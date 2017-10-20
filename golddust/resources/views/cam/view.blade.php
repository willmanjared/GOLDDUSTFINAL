@extends('layouts.cam')

@section('content')

<div class="container-fluid">
  <div class="row">
    <div class="col-md-5" style="height: 100%;">
      <div class="panel panel-default" style="height: 100%;">
        <div class="panel-body" style="height: 100%;">
          
          <video src="" id="video" autoplay="true" style="background-color: #000; width: 100%;"></video>

          <canvas id="preview" style="display: none;"></canvas>

          <div id="logger"></div>
          
        </div>
      </div>
    </div>
    <div class="col-md-7" style="height: 100%;">
      <div class="panel panel-default" style="height: 100%;">
        <div class="panel-body" style="height: 100%;">
          
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  
  //var socket = io();
  
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

  });
</script>

@endsection