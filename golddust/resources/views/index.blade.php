@extends('layouts.main') @section('content')


<div class="container-fluid">

  <nav class="navbar navbar-default navbar-fixed-top transparent">
    <div class="container-fluid">
      <div class="navbar-header" style="height: 48px;">
        <img src="{{ asset('img/main_logo.png') }}" alt="LazerFire" style="height: 100%;">
      </div>
      <div id="main-navigation" class="col-sm-1">
        <ul id="main-nav-wrapper">
          <li class="main-nav-active">Home</li>
          <li>About</li>
          <li>Project Life Cycle</li>
          <li>Contact</li>
          <li>Blog</li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="row full-h">
    <div class="col-sm-10 col-sm-offset-1" style="display: flex; justify-content: center;">
      <div style="margin-top: 15%; width: 800px; display: inline-block">
        <h1 id="header-title" class="section-title" style="font-family: monospace;">We Develop Digital Products To </br>Innovate Your Digital Marketspace</h1>
        <button class="btn btn-default main-button">Learn More</button>
      </div>
    </div>
  </div>

  <div id="about" class="row full-h">
    <div class="col-sm-4 col-sm-offset-1" style="margin-top: 50px;">
      <h2 class="section-title">A Little About Us</h2>
      <p class="section-para">
        LazerFire is comprised of a network of talented designers, code ninjas and internet startup gurus. <!-- you can find on the internet. -->
        <!-- We understand the importance of communication and believe that in order to create innovative products for our clients we must first come to a mutually beneficial understanding. -->
        We understand that business is an ongoing conversation. A mutually beneficial conversation not only between our clients and us, but also our clients and the consumer.<!-- their target audience. -->
        Our entire project life cycle is designed so that our clients have complete control. We are your interface for innovation!
      </p>
    </div>
    <div class="col-sm-6">
      <div id="logo-typed">
        <p class="logo-typed-l"></p>
        <p class="logo-typed-a"></p>
        <p class="logo-typed-z"></p>
        <p class="logo-typed-e">
          
        </p>
        <p class="logo-typed-r">
          
        </p>
        <p class="logo-typed-f">
          
        </p>
        <p class="logo-typed-i">
          
        </p>
        <p class="logo-typed-r">
          
        </p>
        <p class="logo-typed-e">
          
        </p>
      </div>
    </div>
  </div>

  <div id="development" class="row full-h">
    <div class="col-md-10 col-md-offset-1">
      <div class="contianer-fluid">
        <div class="row">
          <div class="col-xs-4 dev-step">
            <i class="fa fa-map dev-icon" aria-hidden="true"></i>
            <h3 class="dev-title">Plan</h3>
          </div>
          <div class="col-xs-4 dev-step">
            <i class="fa fa-code dev-icon" aria-hidden="true"></i>
            <h3 class="dev-title">Build</h3>
          </div>
          <div class="col-xs-4 dev-step">
            <i class="fa fa-rocket dev-icon" aria-hidden="true"></i>
            <h3 class="dev-title">Launch</h3>
          </div>
          <div class="col-xs-12" style="margin-top: 50px;">
            <h3 class="section-title" style="text-align: center; display: inline-block;">From Start To Finish</h3>
            <h4 class="section-para" style="text-align: center; padding: 0 40px;">You are in complete control of your goals. At every stage of development you will get a neatly packaged folder with all your deliverables.</h4>
          </div>
        </div>
      </div>
    </div>
    <!--
    <div class="col-sm-5 col-sm-offset-1" style="height: 50%;">
      <h3 class="section-title">Planning</h3>
    </div>
    <div class="col-sm-5" style="height: 50%;">
      <h3 class="section-title">Development</h3>
    </div>
    <div class="col-sm-5 col-sm-offset-1" style="height: 50%;">
      <h3 class="section-title">Launch</h3>
    </div>
    <div class="col-sm-5" style="height: 50%;">
    
    </div>
    -->
  </div>

  <div id="contact" class="row full-h">
    <div class="col-sm-5 col-sm-offset-1 full-h" style="padding-top: 47px;">
      <div style="position: relative; height: 100%; width: 100%;">
        <img src="{{ asset('img/main_3d.jpg') }}" style="height: 100%; width: 100%; background-color: #234561;">
        <div style="position: absolute; top: 0; left: 0; height: 100%; width: 100%; box-shadow: 0 0 50px 0 #000 inset, -25px -25px 50px 0 #000 inset !important"></div>
      </div>
    </div>
    <div class="col-sm-5" style="padding: 25px 0;">
      
      <h2 style="color: #7CA70D; font-family: monospace;">Let's Build Something Amazing</h2>
      <h3 style="font-family: monospace;">Tell Us A Bit About Yourself And What You Are Trying To Achieve</h3>
      
      <form id="main-contact-form" action="#" method="post">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="name">Name:</label>
          <input class="form-control" name="name" type="text" placeholder="Enter Your First And Last Name"/>
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input class="form-control" name="email" type="email" placeholder="Enter Your Email Address"/>
        </div>
        <div class="form-group">
          <label for="phone">Phone:</label>
          <input class="form-control" name="phone" type="tel" placeholder="Enter Your Phone Number"/>
        </div>
        <div class="form-group">
          <label for="details">A Bit About Your Project:</label>
          <textarea class="form-control" name="details" placeholder="Tell Us A Bit About What You Are Trying To Achieve"></textarea>
        </div>
        <div class="form-group">
          <button class="btn btn-default main-button">Lets Do This</button>
        </div>
      </form>
    </div>
  </div>

  <div id="blog" class="row" style="min-height: 400px;">
    <div class="col-sm-10 col-sm-offset-1">
      <h2 class="section-title">Just Some Good Reads</h2>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6 blog-tile">
            <img class="blog-img">
            <h3 class="blog-title">Blog Title</h3>
            <p class="blog-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent lectus ipsum, eleifend eget sem vitae, eleifend scelerisque dui. Nullam at erat non felis vulputate pulvinar.</p>
          </div>
          <div class="col-md-6 blog-tile">
            <img class="blog-img">
            <h3 class="blog-title">Another Title</h3>
            <p class="blog-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent lectus ipsum, eleifend eget sem vitae, eleifend scelerisque dui. Nullam at erat non felis vulputate pulvinar.</p>
          </div>
          <div class="col-md-6 blog-tile">
            <img class="blog-img">
            <h3 class="blog-title">Interesting Title</h3>
            <p class="blog-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent lectus ipsum, eleifend eget sem vitae, eleifend scelerisque dui. Nullam at erat non felis vulputate pulvinar.</p>
          </div>
          <div class="col-md-6 blog-tile">
            <img class="blog-img">
            <h3 class="blog-title">Readable Title</h3>
            <p class="blog-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent lectus ipsum, eleifend eget sem vitae, eleifend scelerisque dui. Nullam at erat non felis vulputate pulvinar.</p>
          </div>
        </div>
      </div>
     <!--
      <ul id="blog-tile-wrapper">
        <li class="blog-tile">
          <img class="blog-img">
          <h3 class="blog-title">Blog Title</h3>
          <p class="blog-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent lectus ipsum, eleifend eget sem vitae, eleifend scelerisque dui. Nullam at erat non felis vulputate pulvinar.</p>
        </li>
        <li class="blog-tile">
          <img class="blog-img">
          <h3 class="blog-title">Another Title</h3>
          <p class="blog-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent lectus ipsum, eleifend eget sem vitae, eleifend scelerisque dui. Nullam at erat non felis vulputate pulvinar.</p>
        </li>
        <li class="blog-tile">
          <img class="blog-img">
          <h3 class="blog-title">Interesting Title</h3>
          <p class="blog-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent lectus ipsum, eleifend eget sem vitae, eleifend scelerisque dui. Nullam at erat non felis vulputate pulvinar.</p>
        </li>
        <li class="blog-tile">
          <img class="blog-img">
          <h3 class="blog-title">Readable Title</h3>
          <p class="blog-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent lectus ipsum, eleifend eget sem vitae, eleifend scelerisque dui. Nullam at erat non felis vulputate pulvinar.</p>
        </li>
      </ul>
    -->
    </div>
  </div>
<!--
  <div class="row" style="box-shadow: 0 10px 10px #000;">
    <div class="main-divider" style="box-shadow: 0 10px 10px #000;"></div>
  </div>
-->

  <div class="row" id="footer" style="height: 150px;">
    <div class="col-sm-4 col-sm-offset-1 full-h" id="social" style="position: relative;">

      <div style="position: absolute; bottom: 0;">
        <a  class="social-icon" href="https://www.facebook.com/LazerFireDevelopers/"><i class="fa fa-facebook-official fa-3x" aria-hidden="true"></i></a>
        <a  class="social-icon" href="#"><i class="fa fa-instagram fa-3x" aria-hidden="true"></i></a>
        <a  class="social-icon" href="https://twitter.com/LazerFireDevs"><i class="fa fa-twitter fa-3x" aria-hidden="true"></i></a>
      </div>
      
    </div>
    <div class="col-sm-2">

    </div>
    <div class="col-sm-4">
      <h4 class="section-title">
        Some Details
      </h4>
      <p class="section-para">
        <span style="color: #b7d862;">Address:</span> 3565 South Las Vegas Boulevard Las Vegas, NV</br>
        <span style="color: #b7d862;">Phone:</span> 702 - 815 - 7400</br>
        <span style="color: #b7d862;">Email:</span> lazerfiredevelopers@gmail.com
      </p>
    </div>
  </div>

</div>

<script>

  $('#header-title').typeIt({
     strings: ['We Develop Digital Products To </br>Innovate Your Digital Marketspace']
  });
  $('.logo-typed-l').typeIt({
    speed: 40, 
    strings: ['888</br>&nbsp;&nbsp;88</br>&nbsp;&nbsp;88</br>&nbsp;&nbsp;88</br>&nbsp;&nbsp;88</br>&nbsp;&nbsp;88</br>&nbsp;&nbsp;88</br>&nbsp;&nbsp;8888888888']
  });
  $('.logo-typed-a').typeIt({
    speed: 40, 
    strings: ['&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;d8888</br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;d88888</br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;d88P888</br>&nbsp;&nbsp;&nbsp;&nbsp;d88P&nbsp;888</br>&nbsp;&nbsp;&nbsp;d88P&nbsp;&nbsp;888</br>&nbsp;&nbsp;d88P&nbsp;&nbsp;&nbsp;888</br>&nbsp;d8888888888</br>d88P&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;888']
  });
  $('.logo-typed-z').typeIt({
    speed: 40, 
    strings: ['8888888888</br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;d88P&nbsp;</br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;d88P&nbsp;&nbsp;</br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;d88P&nbsp;&nbsp;&nbsp;</br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;d88P;&nbsp;&nbsp;&nbsp;</br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;d88P&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</br>&nbsp;&nbsp;&nbsp;&nbsp;d88P&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</br>d8888888888']
  });

</script>


@endsection