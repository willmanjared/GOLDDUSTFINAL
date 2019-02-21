@extends('layouts.business')

@section('content')

<link rel="stylesheet" href="{{ asset('libs/codemirror.css') }}" />
<script src="{{ asset('libs/codemirror.js') }}"></script>
<script src="{{ asset('libs/clike.js') }}"></script>

<style>
  .CodeMirror {
    height: 100%;
  }
  .CodeMirror-scroll {

  }
  .CodeMirror-gutters {
    background-color: #222;
    border-color: #000;
    color: #fff;
  }
</style>

<div class="container-fluid">
  <div class="row" style="height: 100%;">
    
    <div class="col-md-6" style="height: 100%; padding-right: 0;">
      <div class="panel panel-default" style="height: 100%; border-top-right-radius: 0; border-bottom-right-radius: 0;">
        <div class="panel-heading" style="height: 50px;">
          <p>
            Project Title
          </p>
        </div>
        <div class="panel-body" style="height: calc(100% - 50px);">
          
        </div>
      </div>
    </div>
    
    <div class="col-md-6" style="height: 100%; padding-left: 0;">
      <div class="panel panel-default" style="height: 100%; border-top-left-radius: 0; border-bottom-left-radius: 0;">
        <div class="panel-heading" style="height: 50px;">
          
        </div>
        <div class="panel-body" style="height: calc(100% - 50px); padding: 0;">
          <textarea id="text-editor" style="background-color: #2C3E50; border: 0; height: 100%; width: 100%; color: #fff; resize: none;"></textarea>
        </div>
      </div>
    </div>
    
  </div>  
</div>

<script>
  var myTextarea = document.getElementById("text-editor");
  var editor = CodeMirror.fromTextArea(myTextarea, {
    lineNumbers: true,
    matchBrackets: true,
    mode: "text/x-c++src"
  });
</script>
@endsection