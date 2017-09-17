@extends('layouts.business')

@section('content')
<div class="container-fluid" style="height: 85%;">
  <div class="row" style="overflow: auto; height: 100%;">
    <div class="col-sm-8 col-md-offset-2">
      
    <form method="post" action="/create/project">
      
      {{ csrf_field() }}
      
      <div class="form-group">
        <label for="title">Title</label>
        <input class="form-control" type="text" name="title" />
      </div>
        
      <div class="form-group">
        <label for="body">Project Description</label>
        <textarea class="form-control" name="body"></textarea>
      </div>
        
      <div class="form-group">
        <label for="project_length">Project Length</label>
        <input class="form-control" type="number" name="project_length" />
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
      
    </form>
      
  </div>  
</div>
@endsection