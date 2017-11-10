@extends('layouts.main') @section('content')


<div class="container-fluid full-h">

  <div class="row full-h">
    <div class="col-md-12 full-h dg-cube-bg" style="display: table; box-shadow: inset 0 -50px 50px #000;">
      <div style="text-align: center; width: 100%; display: table-cell; vertical-align: middle;">
        <h1 id="header-title" class="section-title">We Develop Digital Products To </br>Innovate Your Digital Marketspace</h1>
        <button class="btn btn-default">Learn More</button>
      </div>
    </div>
  </div>
  <div class="row full-h">
    <div class="col-md-12 full-h" style=" padding: 0;">
      <canvas id="matrix" style="height: 100%; width: 100%; background-color: #000;"></canvas>
    </div>
  </div>

</div>


@endsection