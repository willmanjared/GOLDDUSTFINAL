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
        <!-- <li><a href="#">About</a></li> -->
        <li><a href="#">Contact</a></li>
        <li><a href="#">Blog</a></li>
      </ul>
    </div>
  </nav>

<div id="lazerfire" class="container-fluid shower" style="position: relative;">
  

  
  <div class="row full-h">
    
    <div class="col-md-12 full-h" style="display: table; position: relative; background-color: #424949;">
      <canvas id="hcanvas" style="height: calc(100% - 165px); width: calc(100% - 120px); position: absolute; top: 65px; left: 65px; z-index: 4;"></canvas>
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

  @include('inc.footer')
  
</div>

<div id="services" class="container-fluid" style="position: relative; display: none;">
  <div class="clouds"></div>
  <div class="row" style="height: 75%;">
    <div class="col-md-10 col-md-offset-1 full-h">
      
    </div>
  </div>
  
  <div class="row" style="min-height: 100%;">
    <div class="col-md-10 col-md-offset-1" style="min-height: 100%; padding: 50px 0 50px 10px;">
       <div class="grid">
     
         <div class="grid-sizer"></div>
         <div class="gutter-sizer"></div>
         <div class="grid-item grid-item--width5">
          <h1>
            WE ARE VERSITILE
           </h1>
         </div>
          <div class="grid-item"></div>
         <div class="grid-item"></div>
         <div class="grid-item"></div>
         <div class="grid-item"></div>
         <div class="grid-item grid-item--width5">
          <h1>
            LOOKING FOR SOMETHING SPECIFIC
           </h1>
         </div>
         <div class="grid-item grid-item--width2"></div>
          <div class="grid-item"></div>
          <div class="grid-item"></div>
          <div class="grid-item"></div>
         <div class="grid-item grid-item--width5">
           <h1>
              WAIT, DID YOU SAY AUTOMATION
           </h1>
         
         </div>
          <div class="grid-item grid-item--width3"></div>
          <div class="grid-item"></div>
          <div class="grid-item"></div>
          <div class="grid-item grid-item--width2"></div>
          <div class="grid-item"></div>
        </div>
    </div>
  </div>
  
  @include('inc.footer')
  
</div>

<div id="about" class="container-fluid" style="position: relative; display: none;">
  
  <div class="row full-h" style="background-color: #808B96;">
     <div class="col-md-12 full-h">
       
    </div>
  </div>
  
   @iclude('inc.footer')
  
</div>

<div id="contact" class="container-fluid" style="position: relative; display: none;">
  
  <div class="row full-h" style="background-color: #000;">
     <div class="col-md-12 full-h">
       
    </div>
  </div>
  
    @include('inc.footer')
  
</div>

<div id="blog" class="container-fluid" style="position: relative; display: none;">
  
  <div class="row full-h" style="background-color: #17202A;">
     <div class="col-md-12 full-h">
       
    </div>
  </div>
  
  @include('inc.footer')
  
</div>


<!--
<script>
  var tcanvas = $("#transition-canvas");
  var tctx = tcanvas[0].getContext('2d');
  var tcanvasW = tcanvas.width();
  var tcanvasH = tcanvas.height();
  tcanvas.css({width: tcanvasW, height: tcanvasH});

  var tilesT = [];
  var tcountT = 0;

  $(".nav-t a").click(function (ev) {
    var a = $(ev.target).text().toLowerCase();
    console.log(a);
    $(".shower").removeClass("shower");
    $("#" + a).addClass("shower");
    // TRIGGER PAGE TRANSITION
  });

    function transition() {

    }

    //transition();
</script>

<script>

  $('.grid').masonry({
    // set itemSelector so .grid-sizer is not used in layout
    itemSelector: '.grid-item',
    // use element for option
    columnWidth: '.grid-sizer',
    // gutter px
    gutter: ".gutter-sizer",
    // slow transitions
    transitionDuration: '0.8s',
    // 1 at a time transitions ms
    stagger: 300,
    horizontalOrder: true,
    percentPosition: true
  });
  
  
</script>


<script>
/*
  var canvasDiv = document.getElementById('contact');
  var options = {
    particleColor: '#17202A',
    interactive: true,
    speed: 'medium',
    density: 'high'
  };
  var particleCanvas = new ParticleNetwork(canvasDiv, options);
*/
  
  
  var hcanvas = $("#hcanvas");
  var hctx = hcanvas[0].getContext('2d');
  var hcanvasW = hcanvas.width();
  var hcanvasH = hcanvas.height();
  hcanvas.css({ width: hcanvasW, height: hcanvasH });
  
  var rows = 13;
  var cols = 39;
  
  var tmarg = 4;
  
  var tileHeight = Math.round(hcanvasH / rows) - tmarg;
  var tileWidth = Math.round(hcanvasW / cols) - tmarg;
  var tileFill = '#2ab27b';
  
  var circleRadius = 2;
  
  var tiles = [];
  var tcount = 0;
  
  var circles = [];
  var ccount = 0;
  
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
  
  function drawC(x,y,r,c,ctx,id) {
      ctx.beginPath();
      ctx.arc(x,y,r,0,2 * Math.PI);
      ctx.fillStyle = c;
      ctx.fill();
      //ctx.stroke();
      if (!id) {
      circles[ccount] = {
        x: x,
        y: y,
        c: c,
        r: r,
        id: ccount
      };
      ccount++;
      }
    }
  
  var dx = tmarg / 2;
  var dy = tmarg / 2;
  
  for(var i = 0; i < cols; i++) {
    for(var p = 0; p < rows; p++) {
      drawS(dx,dy,tileWidth,tileHeight,tileFill, hctx);
      drawC(Math.round(dx + (tileWidth / 2)), Math.round(dy + (tileHeight / 2)), circleRadius, "#0FF", hctx);
      dy += tileHeight + tmarg;
    }
    dy = tmarg / 2;
    dx += tileWidth + tmarg;
  }
  
</script>

-->

<script>
  
  var c = $("#hcanvas");
  var ctx = c[0].getContext("2d");
  
  var ch = c.height();
  var cw = c.width();
  
  c.attr({ height: ch, width: cw });
  
  var rows = 13;
  var cols = 39;
  
  var tmarg = 4;
  
  var tileHeight = Math.round(ch / rows) - tmarg;
  var tileWidth = Math.round(cw / cols) - tmarg;
  var tileFill = 'transparent';//'#2ab27b';
  
  var circleRadius = 2;
  
  var tiles = [];
  var tcount = 0;
  
  var circles = [];
  var ccount = 0;
  
  //console.log(tileWidth, tileHeight);
  
  function drawS(x,y,w,h,c,id) {
      ctx.beginPath();
      ctx.fillStyle = c;
      ctx.fillRect(x,y,w,h);
      ctx.fill();
      //ctx.lineWidth = 2;
      //ctx.strokeStyle = '#000';
      //ctx.stroke();
    if(typeof id == "undefined") {
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
      //ctx.closePath();
    }
  function drawC(x,y,r,c,id) {
    ctx.beginPath();
    ctx.arc(x,y,r,0,2 * Math.PI);
    ctx.fillStyle = c;
    ctx.fill();
    //ctx.stroke();
    //console.log(id);
    if(typeof id == "undefined") {
    circles[ccount] = {
      x: x,
      y: y,
      c: c,
      r: r,
      id: ccount
    };
    ccount++;
    }
    //ctx.closePath();
  }
  
/*
  
  function biggerC(arr) {
    
    var j = 0, k;
    
    // clearRect for the tile circle is in
    
    
    while(k = arr[j]) {
      //var l = k.x + tileWidth;
      //var m = k.y + tileHeight;
      
      //console.log(j);
      
      //var ab = circles[k.id];
      var ba = (tileWidth - circles[k.id].r + 4) / 2;
      
        //for(var i = 0; i < ba; i++) {
          
            setInterval(function () {
                drawC(circles[k.id].x, circles[k.id].y, circles[k.id].r + i, "#0FF");

            }, 500);
          
        //}
      growLoopC(k,ba);
      
      j++;
    }
    
    ctx.clearRect(0, 0, c.width, c.height);
    
    // calculate maximum size of circle
    // loop to incrementally increase the size of the circle
    
  }
  function smallerC(arr) {
    
    
    
  }
  
  function growLoopC(k, b) {
    //console.log(b)
    var i = 0;
    var loo = setInterval(function () {
        if (i < b) {
          ctx.clearRect(k.x - tmarg, k.y - tmarg, tileWidth + tmarg, tileHeight + tmarg);
          drawC(circles[k.id].x, circles[k.id].y, circles[k.id].r + i, "#0FF", k.id);
          i++;
          //console.log(i);
        } else {
          
          // add to smaller array
          circleSmaller.push(circleBigger[0]);
          
          // remove circle from array
          circleBigger.splice(0,1);
          
          clearTimeout(loo);
          
          //shrinkLoopC(k, circleRadius);
          //console.log(circles);
        }
      }, 20);
  }
  
  function shrinkLoopC(k, b) {
    //console.log(b)
    var i = 0;
    var lo = setInterval(function () {
        if (i > b) {
          ctx.clearRect(k.x - tmarg, k.y - tmarg, tileWidth + tmarg, tileHeight + tmarg);
          drawC(circles[k.id].x, circles[k.id].y, circles[k.id].r - i, "#0FF");
          i++;
          //console.log(i);
        } else {
          
          // add to smaller array
          //circleSmaller.push(circleBigger[0]);
          
          // remove circle from array
          circleSmaller.splice(0,1);
          
          clearTimeout(lo);
        }
      }, 2);
  }
  
*/
  
  var dx = tmarg / 2;
  var dy = tmarg / 2;
  
  function initCanvas() {
      for(var i = 0; i < cols; i++) {
        for(var p = 0; p < rows; p++) {
          drawS(dx,dy,tileWidth,tileHeight,tileFill);
          drawC(Math.round(dx + (tileWidth / 2)), Math.round(dy + (tileHeight / 2)), circleRadius, "#808B96");
          dy += tileHeight + tmarg;
        }
        dy = tmarg / 2;
        dx += tileWidth + tmarg;
      }
  }
  
  function drawCanvas(objs, type) {
    // DRAWS CANVAS FROM OBJECT ARRAY
    /*
    var oc = objs.length;
    for(var i = 0; i < oc; i++) {
      if(type == "circle") {
        drawC(objs[i].x,objs[i].y,objs[i].r,objs[i].c,objs[i].id);
      }
      if (type == "square") {
        drawS(objs[i].x,objs[i].y,objs[i].w,objs[i].h,objs[i].c,objs[i].id);
      }
    }
    */
  }
  
  //console.log(tiles);
    initCanvas();
  
 var circleBigger = [];
 //var growing = [];
 var circleSmaller = [];
 //var shrinking = [];
  var circleLoop = [];
  // max circle size
  var ba = (tileWidth - circleRadius - 4) / 2;
  //loop interval milliseconds
  var loopInt = 50;
  
  c.on('click', function (ev) {
    console.log(tiles, "tiles");
    console.log(circles, "circles");
    console.log(circleBigger, "circleBigger");
    console.log(circleSmaller, "circleSmaller");
    console.log(circleLoop, "circleLoop");
  });
  
  c.on('mousemove', function (e) {
      //e.preventDefault();
      // variables for collision detection 
        var rect = this.getBoundingClientRect(),
            x = e.clientX - rect.left,
            y = e.clientY - rect.top,
            i = 0, r;

        while (r = tiles[i++] ) {
          //console.log(r);
          //ctx.clearRect(r.x - tmarg, r.y - tmarg, tileWidth + tmarg, tileHeight + tmarg);
          ctx.beginPath();
          ctx.rect(r.x, r.y, tileWidth, tileHeight);
          //ctx.rect(r.x, r.y, r.w, r.h);
          var rc = $.grep(circleBigger, function (e) { return e.id == r.id; });
          var lc = $.grep(circleLoop, function (e) { return e.id == r.id; });

            if (ctx.isPointInPath(x,y) && rc.length == 0 && lc.length == 0) {
               circleBigger.push(r);
             } else if (rc.length == 0 && lc.length == 0) {
               //drawCanvas(circles, "circle");
               ctx.closePath();
               drawC(circles[r.id].x,circles[r.id].y,circles[r.id].r,circles[r.id].c,r.id);
             } else if (lc.length == 0) {
               ctx.closePath();
               drawC(circles[r.id].x,circles[r.id].y,circleRadius,circles[r.id].c,r.id);
               
               //console.log("circle gets biger");
               // initialize grow loop
               circleLoop.push(r);
               growLoopC(r,ba);
               
               
             }
        }

    });
  
  
  function growLoopC(k, b) {
    //console.log(b)
    
      var i = 0;
      var loo = setInterval(function () {
          if (i < b && typeof k !== "undefined") {
            ctx.clearRect(k.x, k.y, tileWidth, tileHeight);
            drawC(circles[k.id].x, circles[k.id].y, circles[k.id].r + i, "#808B96", k.id);
            i++;
            //console.log(i);
          } else {
             
            clearTimeout(loo); shrinkLoopC(circleBigger[0]);
            //circleLoop.splice(0,1);
            // add to smaller array
            //circleLoop.push(circleBigger[0]);
            //shrinkLoopC(circleBigger[0]);

            // remove circle from array
            //circleBigger.splice(0,1);
            //circleLoop.splice(0,1);

            
            
            
            /*
            if (circleLoop.splice(0,1).length == 1 && circle) {
              
              
              circleLoop.push();
              clearTimeout(loo);
            } else {
              console.log("there was an error");
              clearTimeout(loo);
            }
            */

          }
        }, loopInt);
      
    
  }
  
  function shrinkLoopC(k) {
    //console.log(b)
    if(circleBigger.splice(0,1).length == 1) {
    var i = 0;
    var lo = setInterval(function () {
        if (i < ba && typeof k !== "undefined" && ba - i > circleRadius) {
          ctx.clearRect(k.x, k.y, tileWidth, tileHeight);
          drawC(circles[k.id].x, circles[k.id].y, ba - i, "#616A6B", k.id);
          i++;
          //console.log(i);
        } else {
          clearTimeout(lo);
          // add to smaller array
          //circleSmaller.push(circleBigger[0]);
          
          // remove circle from array
          //circleSmaller.splice(0,1);
          //circleLoop.splice(0,1);
          circleLoop.splice(circleLoop.length-1, 1);
          
          
        }
      }, loopInt);
    } else {
      //circleLoop.splice(circleLoop.length-1, 1);
      console.log("there was an error with the shrink loop");
    }
  }
</script>

@endsection