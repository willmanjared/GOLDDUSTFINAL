@extends('layouts.main') @section('content')


<div class="container-fluid">

  <nav class="navbar navbar-default navbar-fixed-top transparent">
    <div class="container-fluid">
      <div class="navbar-header" style="height: 48px;">
        <img src="{{ asset('img/main_logo.png') }}" alt="LazerFire" style="height: 100%;">
      </div>
      <div id="main-navigation">
        <ul>
          <li>Home</li>
          <li>About</li>
          <li>Project Life Cycle</li>
          <li>Contact</li>
          <li>Blog</li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="row full-h shattered-bg" data-parallax="scroll">
    <div class="col-md-12">

    </div>
  </div>

  <div id="about" class="row full-h" style="background-color: #000;">
    <div class="col-md-12">

    </div>
  </div>

  <div id="development" class="row full-h" style="background-color: #272830;">

  </div>

  <div id="contact" class="row" style="background-color: #000;">
    <div class="col-sm-5 col-sm-offset-1">
      
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

  <div id="blog" class="row" style="background-color: #000; min-height: 400px;">
    <div class="col-sm-10 col-sm-offset-1">
      <ul id="blog-tiles">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
      </ul>
    </div>
  </div>

  <div class="row">
    <div class="main-divider"></div>
  </div>

  <div class="row" id="footer" style="min-height: 100px;">
    <div class="col-sm-4">

    </div>
    <div class="col-sm-4">

    </div>
    <div class="col-sm-4">

    </div>
  </div>

</div>


@endsection