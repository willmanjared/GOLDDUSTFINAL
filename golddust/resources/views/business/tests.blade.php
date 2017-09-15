@extends('layouts.business')

@section('content')
<div class="container-fluid">
    <div class="row">
      <div class="col-md-2">
            <div class="panel panel-default">
                <!-- <div class="panel-heading">Projects Actions</div> -->

                <div class="panel-body">
                  <div class="create-button-wrapper">
                    <h3>Create A Test</h3>
                    
                    <button class="create-button btn btn-primary form-control" value="test" onclick="window.location='/createTest'"><i class="fa fa-plus"></i></button>
                  </div>
                </div>
            </div>
        </div>
      
      <div class="col-md-5">
            <div class="panel panel-default">
                <div class="panel-heading">Teams</div>

                <div class="panel-body">
                  <table class="table">
                    <thead>
                      <th>#</th>
                      <th>Name</th>
                       <th>Number Of Submissions</th>
                      <th>Actions</th>
                    </thead>
                    <tbody>
                    @if (isset($data["tests"]) && count($data["tests"] > 0))
                      @for($i=0; $i < count($data["tests"]); $i++)
                        <tr>
                          <th class="row">{{ $i }}</th>
                          <td>{{ $data["tests"][$i]["name"] }}</td>
                          <td>{{ $data["tests"][$i]["number_of_submissions"] }}</td>
                          <td>actions...</td>
                        </tr>
                      @endfor
                    @else
                      <tr>
                        <th class="row">0</th>
                        <td>You have not created any tests</td>
                        <td>actions...</td>
                      </tr>
                    @endif
                    </tbody>
                  </table>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
