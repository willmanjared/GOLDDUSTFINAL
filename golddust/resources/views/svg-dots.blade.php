@extends('layouts.main') @section('content')


<div class="container-fluid full-h" style="position: relative;">
  
  <h2 alt="LazerFire" style="height: 100%; position: fixed; top: 0; left: 0; z-index: 3; height: 50px; margin-top: 10px; font-family: 'Lucida Console'; color: #2ab27b; font-weight: bold; text-indent: 20px;">LAZERFIRE</h2>
  
  
  <div class="row full-h">
    <div class="col-md-12 full-h" style="background-color: #424949; position: relative;">
      <canvas id="dots" style="height: calc(100% - 165px); width: calc(100% - 120px); background-color: #424949; position: absolute; top: 65px; left: 65px;"></canvas>
      <div style="position: relative; z-index: 2; top: 67%; display: inline-block; left: 100px;">
        <h1 id="header-title" class="section-title" style="font-family: 'Arial Black'; color: #fff; padding-bottom: 20px; margin-bottom: 20px; text-shadow: inset 0 3px 5px #000;">We Want To Develop Digital Products That </br>Innovate Your Digital Marketspace</h1>
        <button class="btn btn-success" style="font-family: monospace;"><i class="fa fa-arrow-down" aria-hidden="true"></i></button>
      </div>
    </div>
  </div>
  
  <div class="row full-h">
    <div class="col-md-12 full-h" style="background-color: #000;">
      
    </div>
  </div>

</div>


<script>
  
  var c = $("#dots");
  var ctx = c[0].getContext("2d");
  
  var ch = c.height();
  var cw = c.width();
  
  c.attr({ height: ch, width: cw });
  
  var rows = 13;
  var cols = 39;
  
  var tmarg = 4;
  
  var tileHeight = Math.round(ch / rows) - tmarg;
  var tileWidth = Math.round(cw / cols) - tmarg;
  var tileFill = '#2ab27b';
  
  var circleRadius = 2;
  
  var tiles = [];
  var tcount = 0;
  
  var circles = [];
  var ccount = 0;
  
  console.log(tileWidth, tileHeight);
  
  function drawS(x,y,w,h,c) {
      ctx.beginPath();
      ctx.fillStyle = c;
      ctx.fillRect(x,y,w,h);
      ctx.fill();
      ctx.lineWidth = 22;
      ctx.strokeStyle = '#000';
      ctx.stroke();
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
  function drawC(x,y,r,c, id) {
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
          /*
            setInterval(function () {
                drawC(circles[k.id].x, circles[k.id].y, circles[k.id].r + i, "#0FF");

            }, 500);
          */
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
  
  var dx = tmarg / 2;
  var dy = tmarg / 2;
  
  for(var i = 0; i < cols; i++) {
    for(var p = 0; p < rows; p++) {
      drawS(dx,dy,tileWidth,tileHeight,tileFill);
      drawC(Math.round(dx + (tileWidth / 2)), Math.round(dy + (tileHeight / 2)), circleRadius, "#0FF");
      dy += tileHeight + tmarg;
    }
    dy = tmarg / 2;
    dx += tileWidth + tmarg;
  }
  
  //console.log(tiles);
  
 var circleBigger = [];
 var circleSmaller = [];
  
  c.on('click', function (ev) {
    console.log(circles);
  });
  
  c.on('mousemove', function (e) {

            // variables for collision detection 
              var rect = this.getBoundingClientRect(),
                  x = e.clientX - rect.left,
                  y = e.clientY - rect.top,
                  i = 0, r;

            // console.log(rect);

            // clears canvas completely
            //x.clearRect(0, 0, c.width, c.height);
            //console.log(x,y);
    
            // loops throught all rects drawn and re-draws them
    
    // THE ERROR IS HERE, MUST LOCATE R.ID BEFORE ENTERING 
    
    
   // var tr = $.grep(circleSmaller, function(e) { return e.id == r.id; });
    
    //if(rc.length == 0 && tr.length == 0) {
    
              while (r = tiles[i++]) {
                
              var rc = $.grep(circleBigger, function (e) { return e.id == r.id; });
                //console.log(rc);
                
                if (rc.length == 0) {
                  ctx.clearRect(r.x - tmarg, r.y - tmarg, tileWidth + (tmarg * 2), tileHeight + (tmarg * 2));
                  ctx.beginPath();
                  ctx.rect(r.x, r.y, r.w, r.h);
                  
                  if (ctx.isPointInPath(x,y)) {
                    circleBigger.push(r);
                  }
                }
             
                
           /*     
                
               if (rc.length == 0 ) {
                  //console.log(ctx.isPointInPath(x, y) ? "true" : "false");
                  ctx.clearRect(r.x - tmarg, r.y - tmarg, tileWidth + (tmarg * 2), tileHeight + (tmarg * 2));
                
                  ctx.beginPath();
                  ctx.rect(r.x, r.y, r.w, r.h);
                  //console.log(r.id);
                  //ctx.fillStyle = ctx.isPointInPath(x, y) ? "#6898ae": "#424949";
                  
                  if (ctx.isPointInPath(x,y)) {
                    
                    //console.log(r.id);
                    
                    // add square id to circle bigger array
                    //
                    // loop through array after this one
                    // the circle bigger and circle smaller array must be looped through in desc order based on proximity
                    
                    //circleBigger[0] = r;
                    
                    if (circleBigger.length > 0 && r.id !== circleBigger[0].id) {
                      circleSmaller.push( circleBigger[0] );
                      circleBigger.push( r );
                      //console.log("sdskodk");
                      
                      
                    } else {
                      circleBigger.push( r );
                    }
                    
                    
                    ctx.fillStyle = "#494949";//"#6898ae";
                  } else {
                    ctx.fillStyle = "#494949";
                  }
                
                  ctx.fill();
                
                //drawC(Math.round(r.x + (tileWidth / 2)), Math.round(r.y + (tileHeight / 2)), circleRadius, "#0FF");
                drawC(circles[r.id].x, circles[r.id].y, circles[r.id].r, circles[r.id].c);
                } 
              */  
              }
    
            //var h = 0;
            biggerC(circleBigger);
            //console.log(circleBigger, circleSmaller);
            // loop though bigger array
            // at the end of the smaller loop remove smaller object from array
    //}
          });
  
  /*
  

    //var rn = 40;
    //var cn = 20;

    var rects = [],
          i = 0, r;

    var sw = 15;
    var sh = 15;

    //var sx;
    //var sy;

    var sm = 35;

    //var colorArray = ['#234561', '#d8d8d8', '#ffffff'];
    var scount = 0;
    function drawS(x,y,w,h) {
      //var a = Math.floor((Math.random() * 3) + 1) - 1;
      //console.log(a);
      //ctx.fillStyle = colorArray[a];
      ctx.fillStyle = "#616A6B";
      ctx.fillRect(x,y,w,h);
      rects[scount] = {
        x: x,
        y: y,
        w: w,
        h: h
      };
      scount++;
      //console.log(scount);
    }

    //console.log(ch, cw);

    var lh = sm;
    var lw = sm;

    do {

      if (lw >= cw) {
        //console.log(lh);
        lw = sm;
        lh += sh + sm;
        //console.log(lh);
      }

      drawS(lw, lh, sw, sh);

      lw += sw + sm;

    } while(lh <= ch);

    console.log(rects);


          c.on('mousemove', function (e) {

            // variables for collision detection 
              var rect = this.getBoundingClientRect(),
                  x = e.clientX - rect.left,
                  y = e.clientY - rect.top,
                  i = 0, r;

            // console.log(rect);

             // clears canvas completely
              ctx.clearRect(0, 0, c.width, c.height);
            //console.log(x,y);

            // loops throught all rects drawn and re-draws them
              while (r = rects[i++]) {
                //console.log(ctx.isPointInPath(x, y) ? "true" : "false");
                  ctx.beginPath();
                  ctx.rect(r.x, r.y, r.w, r.h);
                  ctx.fillStyle = ctx.isPointInPath(x, y) ? "#00ff00":"#616A6B";
                  ctx.fill();
              }

          });

    // testing the ranges for rect input
    function sizeS(r, x, y) {
      console.log(r);
    }

    // tweens position of rect
    function moveS(r) {
      console.log(r);
    }


    function between(n, a, b) {
      return n <= a && b <= n; 
    }
  
  */
</script>


@endsection