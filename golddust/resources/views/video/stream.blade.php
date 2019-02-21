@extends('layouts.user')

@section('content')


<div class="container-fluid">
  <div class="row" style="height: 100%;">
    <div class="col-md-12" style="height: 100%;">
      <div class="panel panel-default" style="height: 100%;">
        <div class="panel-body" style="height: 100%;">

          <div class="panel panel-default" style="height: 100%;">
            <div class="panel-body" style="height: calc(100% - 43px);">
              <video src="" id="video" autoplay="true" style="background-color: #000; height: 100%; width: 100%;"></video>
              <canvas id="preview" style="background-color: #888; display: none;"></canvas>
            </div>
            <div class="panel-footer">
              <div id="logger"></div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>

<script>

  var socket = io('http://{{ Request::getHost() }}:3000');

  var canvas = document.getElementById('preview');
  var context = canvas.getContext("2d");

  canvas.width = 400;
  canvas.height = 300;
  context.width = canvas.width;
  context.height = canvas.height;

  var vid = document.getElementById('video');
  var vw = $("#video").css('width');
  var vh = $("#video").css('height');

  function logger(msg) {
    $("#logger").text(msg);
  }

  function loadCam(stream) {
    video.src = window.URL.createObjectURL(stream);
    logger('Cam has connected');
  }

  function loadFail() {
    logger('No connection');
  }

  function viewVideo(video, context) {
    context.drawImage(video,0,0,context.width, context.height);

    // send stream to server.js
    socket.emit('stream', canvas.toDataURL('image/webp'));
  }

  $(function () {

    navigator.getUserMedia = (navigator.getUserMedia || navigator.webkitGetUserMedia || navigator.mozGetUserMedia || navigator.msgGetUserMedia);

    if (navigator.getUserMedia) {
      console.log("Has get user media");
      navigator.getUserMedia({video: true}, loadCam,loadFail);
    }


     // video preview
      setInterval(function () {
        viewVideo(video,context);
      },500);
  });
</script>
@endsection
