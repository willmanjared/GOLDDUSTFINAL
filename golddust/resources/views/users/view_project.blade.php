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
            <button class="btn btn-primary form-control" onclick="$('#lightbox-container').fadeIn();">
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
  
  <div class="row">
    <div class="col-md-6 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">
          Proposal
        </div>
        <div class="panel-body">
          @if(isset($proposals) && count($proposals) > 0)
          <!--
            <ul class="list-group proposal">
            
              @foreach($proposals as $p)
              
                <li class="list-group-item">
                  <p>{{ $p->user->name }}</p>
                  <p>{{ $p->created_at->diffForHumans() }}</p>
                  <div class="proposal-actions">
                    <a href="/b/proposal/{{ $p->id }}">View</a>
                  </div>
                </li>
              
              @endforeach
              
            </ul>

          -->
          
          <!-- TEMPORARY FIX-->
          @foreach($proposals as $p)
            <div class="proposal">

              <div class="proposal-body">
                <p>{{ $p->body }}</p>
              </div>
              <div class="proposal-actions">
                    <p>
                      {{ $p->created_at->diffForHumans() }}
                    </p>
                    <a class="btn btn-default form-control" href="/answer/{{ $p->answer_id }}">View Test</a>
                    <button class="btn btn-default form-control">Edit</button>
                    <button class="btn btn-default form-control">Delete</button>
              </div>
              
          </div>

          @endforeach
          
          @else
          
            <p>There Aren't Any Proposals For This Project</p>
          
          @endif
        </div>
      </div>
    </div>
  </div>

  @include('forms.proposal_form')
  
</div>
@endsection
