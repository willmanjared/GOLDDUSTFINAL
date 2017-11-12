@extends('layouts.main')

@section('content')

  <div id="transition-container" style="display: none;">
    <canvas id="transition-canvas"></canvas>
  </div>

  <nav class="navbar navbar-default navbar-fixed-top" style="width: calc(100% - 17px); background-color: transparent; border: 0;">
    <div class="container-fluid">
      <div class="navbar-header nav-t">
        <a class="navbar-brand" href="#">LAZERFIRE</a>
      </div>
      <ul class="nav navbar-nav navbar-right nav-t">
        <li><a href="#">Services</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="#">Blog</a></li>
      </ul>
    </div>
  </nav>

<div id="lazerfire" class="container-fluid shower" style="position: relative;">
  

  
  <div class="row full-h" style="background-color: #424949;">
    <div class="col-md-12 full-h" style="display: table;">
      <div style="display: table-cell; text-align: left; vertical-align: bottom;">
        <h4>
          Welcome To The Future 
        </h4>
        <h2>
          We Want To Develop Digital Products That </br>Innovate Your Digital Marketspace
        </h2>
        <button class="btn btn-success" style="font-family: monospace; margin: 25px 0;"><i class="fa fa-arrow-down" aria-hidden="true"></i></button>
      </div>

    </div>
  </div>
  
  <div class="row full-h">
    <div class="col-md-3 col-md-offset-1" style="height: inherit; margin-top: 50px; margin-bottom: 50px; background-color: #000;">
      
    </div>
    
    <div class="col-md-7 col-md-offset-1" style="height: inherit; margin-top: 50px; margin-bottom: 50px; background-color: #000;">
      
    </div>
  </div>

  <div class="row process-container">
    <div class="col-md-4" style="display: flex;">
      <div style="background-color: #000; height: 200px; width: 200px; display: inline-block; margin: auto; align-items: center; justify-content: center;">
        
      </div>
    </div>
    <div class="col-md-8" style="display: flex;">
      <div style="background-color: #000; margin: auto; height: 200px; width: 80%;">
        
      </div>
    </div>
    
    <div class="col-md-4" style="display: flex;">
      <div style="background-color: #000; height: 200px; width: 200px; display: inline-block; margin: auto; align-items: center; justify-content: center;">
        
      </div>
    </div>
    <div class="col-md-8" style="display: flex;">
      <div style="background-color: #000; margin: auto; height: 200px; width: 80%;">
        
      </div>
    </div>
    
    <div class="col-md-4" style="display: flex;">
      <div style="background-color: #000; height: 200px; width: 200px; display: inline-block; margin: auto; align-items: center; justify-content: center;">
        
      </div>
    </div>
    <div class="col-md-8" style="display: flex;">
      <div style="background-color: #000; margin: auto; height: 200px; width: 80%;">
        
      </div>
    </div>
  </div>

  <div class="row footer-divider" style="height: 40%; background-color: #2ab27b;">
    <div class="col-md-12">
      
    </div>
  </div>

  <footer class="row" style="min-height: 250px;">
    <div class="col-md-3">
      
    </div>
    <div class="col-md-3">
      
    </div>
    <div class="col-md-3">
      
    </div>
    <div class="col-md-3">
      
    </div>
  </footer>
  
</div>

<div id="services" class="container-fluid" style="position: relative; display: none;">
  
  <div class="row full-h" style="background-color: #AEB6BF;">
     <div class="col-md-12 full-h">
       
    </div>
  </div>
  
    <div class="row footer-divider" style="height: 40%; background-color: #2ab27b;">
      <div class="col-md-12">
      
      </div>
    </div>

  
    <footer class="row" style="min-height: 250px;">
    <div class="col-md-3">
      
    </div>
    <div class="col-md-3">
      
    </div>
    <div class="col-md-3">
      
    </div>
    <div class="col-md-3">
      
    </div>
  </footer>
  
</div>

<div id="about" class="container-fluid" style="position: relative; display: none;">
  
  <div class="row full-h" style="background-color: #808B96;">
     <div class="col-md-12 full-h">
       
    </div>
  </div>
  
    <div class="row footer-divider" style="height: 40%; background-color: #2ab27b;">
      <div class="col-md-12">
      
      </div>
    </div>

  
    <footer class="row" style="min-height: 250px;">
    <div class="col-md-3">
      
    </div>
    <div class="col-md-3">
      
    </div>
    <div class="col-md-3">
      
    </div>
    <div class="col-md-3">
      
    </div>
  </footer>
  
</div>

<div id="contact" class="container-fluid" style="position: relative; display: none;">
  
  <div class="row full-h" style="background-color: #17202A;">
     <div class="col-md-12 full-h">
       
    </div>
  </div>
  
    <div class="row footer-divider" style="height: 40%; background-color: #2ab27b;">
      <div class="col-md-12">
      
      </div>
    </div>

  
    <footer class="row" style="min-height: 250px;">
    <div class="col-md-3">
      
    </div>
    <div class="col-md-3">
      
    </div>
    <div class="col-md-3">
      
    </div>
    <div class="col-md-3">
      
    </div>
  </footer>
  
</div>

<div id="blog" class="container-fluid" style="position: relative; display: none;">
  
  <div class="row full-h" style="background-color: #17202A;">
     <div class="col-md-12 full-h">
       
    </div>
  </div>
  
    <div class="row footer-divider" style="height: 40%; background-color: #2ab27b;">
      <div class="col-md-12">
      
      </div>
    </div>

  
    <footer class="row" style="min-height: 250px;">
    <div class="col-md-3">
      
    </div>
    <div class="col-md-3">
      
    </div>
    <div class="col-md-3">
      
    </div>
    <div class="col-md-3">
      
    </div>
  </footer>
  
</div>



<script>
var tcanvas = $("#transition-canvas");
var tctx = tcanvas[0].getContext('2d');
var tcanvasW = tcanvas.width();
var tcanvasH = tcanvas.height();
tcanvas.css({width: tcanvasW, height: tcanvasH});
  
var tiles = [];
var tcount = 0;

$(".nav-t a").click(function (ev) {
  var a = $(ev.target).text().toLowerCase();
  console.log(a);
  $(".shower").removeClass("shower");
  $("#" + a).addClass("shower");
  // TRIGGER PAGE TRANSITION
});
  
  function drawS(x,y,w,h,c,ctx) {
      ctx.beginPath();
      ctx.fillStyle = c;
      ctx.fillRect(x,y,w,h);
      ctx.fill();
      //ctx.lineWidth = 22;
      //ctx.strokeStyle = '#000';
      //ctx.stroke();
      tiles[tcount] = {
        x: x,
        y: y,
        w: w,
        h: h,
        fill: c,
        id: tcount
      };
    tcount++;
    }
  
  function transition() {
    
  }
  
  transition();
</script>

@endsection