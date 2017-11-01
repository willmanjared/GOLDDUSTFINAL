@extends('layouts.user')

@section('content')


<div class="container-fluid">
  <div class="row" style="height: 100%;">
    <div class="col-md-5" style="height: 100%;">
      <div class="panel panel-default" style="height: 100%;">
        <div class="panel-body" style="height: 100%;">


          <div class="panel panel-default" style="height: 100%;">
            <div class="panel-body" style="height: calc(100% - 43px);">
              <!--
              <video src="" id="video" autoplay="true" style="background-color: #000; height: 100%; width: 100%;"></video>
              -->
              <img src="" id="video" style="background-color: #000; height: 100%; width: 100%;">
              <canvas id="preview" style="display: none;"></canvas>
            </div>
            <div class="panel-footer">
              <div id="logger">Connecting...</div>
            </div>
          </div>


        </div>
      </div>
    </div>
    <div class="col-md-7" style="height: 100%;">
      <div class="panel panel-default" style="height: 100%;">
        <div class="panel-body" style="height: 100%;">



          <div id="messenger-messages">
            <div id="messenger-conversation" class="panel panel-default" style="border-bottom-left-radius: 0; border-bottom-right-radius: 0;">
              <div class="panel-heading fixed-panel-heading">Chat</div>
              <div class="panel-body"></div>
            </div>
          </div>


          <div id="messenger-form">
            <div class="panel panel-default" style="border-top-left-radius: 0; border-top-right-radius: 0;">
                <div class="panel-body">
              <!-- THIS ACTION FOR THE FORM NEEDS TO BE FIXED --- TEMP FIX BECAUSE THE ROUTES ARE FUCKED -->
              <form id="messenger-form" action="/messenger/send" method="post" autocomplete="off">
              {{ csrf_field() }}
              @include('includes.formerror')

                  <input id="reciever_id" type="hidden" name="reciever_id" value="1" />

                  <div class="input-group">
                      <input type="text" class="form-control" name="message" placeholder="Type message here...">
                      <span class="input-group-btn">

                          <button class="btn btn-primary" type="submit">Send</button>

                      </span>
                  </div>
              </form>
                </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>

<script>

   var socket = io('http://{{ Request::getHost() }}:3000');

   function logger(msg) {
      $("#logger").text(msg);
    }

  socket.on('stream', function (image) {
    console.log('IMAGE RECIEVED');
    var img = document.getElementById('video');
    img.src = image;
    logger(image);
  });


</script>


@endsection
