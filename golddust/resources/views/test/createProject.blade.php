@extends('layouts.business')

@section('content')

<!-- ANGULAR JS -->
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>

<div class="container-fluid" style="height: 85%;">
  <div class="row" style="overflow: auto; height: 100%;">
    <div class="col-sm-6" style="height: 100%; padding-bottom: 22px;">      
      
      <div class="panel panel-default" style="height: 100%; overflow-x: hidden; overflow-y: auto;" >
        
        <div class="panel-body">

          <ul class="nav nav-tabs" data-container="tab-container" data-link="linked-list">
            <li role="presentation" class="active" data-value="project"><a href="#">Project</a></li>
            <li role="presentation" data-value="deliverables"><a href="#">Deliverables</a></li>
            <li role="presentation" data-value="test"><a href="#">Test</a></li>
          </ul>
        <form method="post" action="/create/project">
          <div class="tab-container">

           <div class="project">
             

              {{ csrf_field() }}

              <div class="form-group">
                <label for="title">Title</label>
                <input class="form-control" type="text" name="title" placeholder="Add Project Title..." required/>
              </div>

              <div class="form-group">
                <label for="body">Project Description</label>
                <textarea class="form-control" name="body" style="width: 100%; resize: vertical;" placeholder="Add Project Description..." required></textarea>
              </div>

              <div class="form-group">
                <label for="project_length">Project Length</label>
                <input class="form-control" min="1" max="365" type="number" name="project_length" placeholder="Add Project Length..." required/>
              </div>

              <div class="form-group">
                <label for="project_length_unit">Project Length Unit</label>
                <select class="form-control" name="project_length_unit">
                  <option value="days">Days</option>
                  <option value="weeks">Weeks</option>
                  <option value="months">Months</option>
                </select>
              </div>


              <div class="form-group">
                <label for="payment_period">Payment Period</label>
                <select class="form-control" name="payment_period">
                  <option value="hourly">Hourly</option>
                  <option value="fixed">Fixed</option>
                  <option value="piece">Piece</option>
                </select>
              </div>

              <div class="form-group">
                <label for="skill_level">Skill Level</label>
                <select class="form-control" name="skill_level">
                  <option value="entry">Entry</option>
                  <option value="intermediate">Intermediate</option>
                  <option value="advanced">Advanced</option>
                </select>
              </div>

              <div class="form-group">
                <label for="test_id">Test</label>
                <select class="form-control" name="test_id">
                  <option value="0">None</option>

                  <!-- echo all tests associated with the user -->
                </select>
              </div>

              <div class="form-group">
                <input type="submit" class="btn btn-primary form-control" />
              </div>

            
           </div>

            <div class="deliverables">
              <div class="form-group" style="width: 25%; margin-left: 75%; border: 1px solid #ddd; padding: 10px; border-radius: 4px; box-shadow: 0 1px 1px rgba(0,0,0,.05);">
                <div class="create-button-wrapper">
                  <h3>Deliverable</h3>
                  <button type="button" class="create-button btn btn-primary" onclick="addDeliverable();"><i class="fa fa-plus"></i></button>
                  <input name="has_deliverable" type="hidden" class="form-control" value="0" />
                </div>
              </div>
            </div>

            <div class="test">
              <div style="width: 25%; margin-left: 75%; border: 1px solid #ddd; padding: 10px; border-radius: 4px; box-shadow: 0 1px 1px rgba(0,0,0,.05);">
                <div class="create-button-wrapper">
                  <h3>Test</h3>
                  <button type="button" class="create-button btn btn-primary" onclick="addTest();"><i class="fa fa-plus"></i></button>
                  <button type="button" class="remove-button btn btn-danger" onclick="removeTest();" style="display: none;"><i class="fa fa-minus"></i></button>
                  <input name="has_test" type="hidden" class="form-control" value="0" />
                </div>
              </div>
            </div>

            </div>
        </form>
        </div>
        
      </div>
      
  </div>
    
  <div class="col-sm-6" style="height: 100%; padding-bottom: 22px;">
    <div class="panel panel-default" style="height: 100%; overflow-x: hidden; overflow-y: auto;">
      <div class="panel-body" style="height: 100%;">
        <!--
        <ul class="nav nav-tabs">
          <li role="presentation" class="active disabled"><a href="#">Project</a></li>
          <li role="presentation" class="disabled"><a href="#">Deliverables</a></li>
          <li role="presentation" class="disabled"><a href="#">Test</a></li>
        </ul>
        -->
      
          <div class="tab-container">
            
            <div class="project">
              <div class="panel panel-default" style="height: 100%;">
                <div class="panel-heading">
                  <p id="input-title">Add Project Title</p>
                </div>
                <div class="panel-body" style="height: calc(100% - 43px);">
                  <div class="panel-body-left">
                    <h3 class="description-heading">Description</h3>
                    <p id="input-body">Add Project Description...</p>
                  </div>
                  <div class="project-feed-stats">
                    <ul>
                      <li><label>Status: </label><p>Active</p></li>
                      <li><label>Number of Proposals: </label><p>0</p></li>
                      <li><label>Project Length: </label><p id="input-project_length" style="display: inline-block;">Indeterminate</p> <p id="input-project_length_unit" style="display: inline-block;">Days</p></li>
                      <li><label>Deliverable Type: </label><p id="input-payment_period">Hourly</p></li>
                      <li><label>Has Test: </label><p id="input-has_test">No</p></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="deliverables">
              <div class="panel panel-default">
                <div class="panel-body">
                <p>You have not created any deliverables yet.</p>
                </div>
              </div>
            </div>
            <div class="test">
              <div class="panel panel-default">
                <div class="panel-body">
                <p>You have not created a test yet.</p>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>  
  </div>
</div>

<!-- ANGULAR CREATE_PROJECT SCRIPTS

CONVERT EVERYTHING TO ANGULAR WHEN FINISHED

<script>
var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope) {
    $scope.description = $("textarea[name='body']").val();
});
  
  $("textarea[name='body']").on('keydown',function (e) {
    console.log($(this).val());
  });
</script>
-->

<!-- CREATE_PROJECT JS -->
<script>
$(document).ready(function () {
    $("textarea[name='body']").on('keyup',function (e) {
    $("#input-body").html($(this).val());
    });
  $("input[name='title']").on('keyup',function (e) {
    $("#input-title").html($(this).val());
    });
  $("input[name='project_length']").on('keyup',function (e) {
    $("#input-project_length").html($(this).val());
    });

  $("input[name='project_length']").on('mouseup',function (e) {
    $("#input-project_length").html($(this).val());
    });
});
  
  function addDeliverable() {
    console.log("Add Deliverable");
  }
  
  function addTest() {
    console.log("Add Test");
  }
</script>
@endsection