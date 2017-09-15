@extends('layouts.user')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Search Projects</div>

                <div class="panel-body">
                  <form action="/s/projects" method="post" onsubmit="return false;">
                    {{ csrf_field() }}
                    <div class="input-group">
                      <input type="text" class="form-control" name="project_search" placeholder="Type something you want to work on...">
                      <span class="input-group-btn">
                          <button class="btn btn-primary" type="submit" disabled>Search</button>
                      </span>
                  </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
  
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Projects Feed</div>

                <div class="panel-body">
                  @if(isset($data["projects"]) && count($data["projects"]) > 0)
                    @for($i=0; $i < count($data["projects"]); $i++)
                      <div class="project-feed-wrapper panel panel-default">
                        <div class="panel-heading"><a href="#">{{ $data["projects"][$i]['title'] }}</a></div>
                          <div class="panel-body">
                            <div class="project-feed-body">
                              <p>{{ $data["projects"][$i]['body'] }}</p>
                            </div>
                            <div class="project-feed-stats">
                              <ul>
                                <li><label>Status: </label>{{ $data["projects"][$i]['status'] }}</li>
                                <li><label>Number of Proposals: </label>{{ $data["projects"][$i]['proposals_count'] }}</li>
                                <li><label>Project Length: </label>{{ $data["projects"][$i]['project_length'] }} {{ $data["projects"][$i]['project_length_unit'] }}</li>
                                <li><label>Deliverable Type: </label>{{ $data["projects"][$i]['deliverable'] }}</li>
                                <li><label>Has Test: </label>{{ $data["projects"][$i]['test_id'] }}</li> <!-- THIS IS BUT ONLY A TEST ID -->
                              </ul>
                            </div>
                          </div>
                      </div>           
                    @endfor
                  @else
                    <div class="panel panel-defualt">
                      <div class="panel-body">
                        <p style="text-align: center;">Terribly sorry, there are not any projects to display in your feed yet...</p>
                      </div>
                    </div>
                  @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
