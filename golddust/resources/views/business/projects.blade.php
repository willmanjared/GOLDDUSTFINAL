@extends('layouts.business')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2">
            <div class="panel panel-default">
                <!-- <div class="panel-heading">Projects Actions</div> -->

                <div class="panel-body">
                  <div class="create-button-wrapper">
                    <h3>Create A Project</h3>
                    
                    <button class="create-button btn btn-primary form-control" value="project" onclick="window.location='/createProject'"><i class="fa fa-plus"></i></button>
                  </div>
                </div>
            </div>
        </div>
      
      <div class="col-md-5">
            <div class="panel panel-default">
                <div class="panel-heading">Projects List</div>

                <div class="panel-body">
                  <table class="table">
                    <thead>
                      <th>#</th>
                      <th>Name</th>
                      <th>Status</th>
                      <th>Actions</th>
                    </thead>
                    <tbody>
                    @if (isset($data["projects"]) && count($data["projects"]) > 0)
                      @for($i=0; $i < count($data["projects"]); $i++)
                        <tr>
                          <th class="row">{{ $i }}</th>
                          <td>{{ $data["projects"][$i]["title"] }}</td>
                          <td>{{ $data["projects"][$i]["status"] }}</td>
                          <td>actions button bar...</td>
                        </tr>
                      @endfor
                    @else
                      <tr>
                        <th class="row">0</th>
                        <td>You have no projects currently listed</td>
                        <td>NULL</td>
                        <td>actions...</td>
                      </tr>
                    @endif
                    </tbody>
                  </table>
                </div>
            </div>
        </div>
      
      <div class="col-md-5">
            <div class="panel panel-default">
                <div class="panel-heading">Upcoming Deliverables</div>

                <div class="panel-body">
                  <table class="table">
                    <thead>
                      <th>#</th>
                      <th>Name</th>
                       <th>Status</th>
                      <th>Actions</th>
                    </thead>
                    <tbody>
                    @if (isset($data["teams"]) && count($data["deliverables"]) > 0)
                      @for($i=0; $i < count($data["deliverables"]); $i++)
                        <tr>
                          <th class="row">{{ $i }}</th>
                          <td>{{ $data["deliverables"][$i]["name"] }}</td>
                          <td>{{ $data["deliverables"][$i]["status"] }}</td>
                          <td>actions...</td>
                        </tr>
                      @endfor
                    @else
                      <tr>
                        <th class="row">0</th>
                        <td>You do not have any upcoming deliverables</td>
                        <td>actions...</td>
                      </tr>
                    @endif
                    </tbody>
                  </table>
                </div>
            </div>
        </div>
    </div>

<!--
    <div class="row">
      <div class="col-md-2">
            <div class="panel panel-default">
                <div class="panel-body">
                  <div class="create-button-wrapper">
                    <h3>Create A Team</h3>
                    
                    <button class="create-button btn btn-primary form-control" value="project"><i class="fa fa-plus"></i></button>
                  </div>
                </div>
            </div>
        </div>
      
      <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">Teams</div>

                <div class="panel-body">
                  <table class="table">
                    <thead>
                      <th>#</th>
                      <th>Name</th>
                       <th>Number Of Members</th>
                      <th>Actions</th>
                      <th>actions...</th>
                    </thead>
                    <tbody>
                    @if (isset($data["teams"]) && count($data["teams"] > 0))
                      @for($i=0; $i < count($data["teams"]); $i++)
                        <tr>
                          <th class="row">{{ $i }}</th>
                          <td>{{ $data["teams"][$i]["name"] }}</td>
                          <td>{{ $data["teams"][$i]["number_of_members"] }}</td>
                          <td>actions...</td>
                        </tr>
                      @endfor
                    @else
                      <tr>
                        <th class="row">0</th>
                        <td>You have not created any teams</td>
                        <td>actions...</td>
                      </tr>
                    @endif
                    </tbody>
                  </table>
                </div>
            </div>
        </div>
    </div>
-->
</div>
@endsection
