@extends('layouts.user')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ $projects['title'] }}</div>

                <div class="panel-body">
                  
                  <h3>
                    Description
                  </h3>
                  <p>
                    {{ $projects['body'] }}
                  </p>
                  
                </div>
            </div>
        </div>
      
      <div class="col-md-2">
        
        <div class="panel panel-default">
          <div class="panel-body">
            <button class="btn btn-primary form-control">
              Apply
            </button>
          </div>
        </div>
        
        
            <div class="panel panel-default">
                <div class="panel-body">
                  
                  <div>
                              <ul>
                                <li><label>Status: </label>{{ $projects['status'] }}</li>
                                <li><label>Number of Proposals: </label>{{ count($projects->proposal) }}</li>
                                <li><label>Project Length: </label>{{ $projects['project_length'] }} {{ $projects['project_length_unit'] }}</li>
                                <li><label>Deliverable Type: </label>{{ $projects['payment_period'] }}</li>
                                <li><label>Has Test: </label>@if($projects['test_id'] == 0)
                                {{ "no" }}
                                  @else
                                  {{ "yes" }}
                                  @endif
                                </li> <!-- THIS IS BUT ONLY A TEST ID -->
                              </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
