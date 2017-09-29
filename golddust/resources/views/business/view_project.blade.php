@extends('layouts.business')

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
          
          <div class="panel panel-default">
                <div class="panel-heading">Deliverables</div>

                <div class="panel-body">
                  @if(isset($deliverables) && count($deliverables) > 0)
                  
                  <p style="text-align: center;">HAS DELIVERABLES</p>
                  
                  @else
                  
                  <p style="text-align: center;">You Have Not Set any deliverables for this project</p>
                  
                  @endif
                </div>
            </div>
          
                <div class="panel panel-default">
                    <div class="panel-heading">Proposals</div>

                    <div class="panel-body">
                      @if(isset($proposals) && count($proposals) > 0)

                        @foreach($proposals as $p)
                      
                          <div class="panel panel-default panel-dropdown">
                            <div class="panel-heading">
                              {{ $p->user->name }}
                              <!-- <i class="fa fa-caret-right fa-lg" aria-hidden="true"></i> -->
                              <p style="float: right; text-indent: 10px;">$ {{ $p->rate }}</p>
                              <label style="float: right;">{{ ucfirst($projects->payment_period) }} Rate: </label>
                            </div>
                            <div class="panel-body">
                              <div class="panel-body-left">
                                {{ $p->body }}
                              </div>
                              <div class="panel-body-right">
                                <button class="btn btn-primary form-control" data-value="{{ $p->user->id }}">Hire Freelancer</button>
                                <a class="btn btn-default form-control">View Profile</a>
                                <button class="btn btn-default form-control">Message Freelancer</button>
                              </div>
                            </div>
                          </div>
                      
                      
                        
                        @endforeach

                      @else
                      
                      <!-- 
                          # ADD RECOMMENDATIONS FOR GETTING MORE PROPOSALS 
                          #
                          #
                       -->
                      <p style="text-align: center;">There aren't any proposals for this project</p>

                      @endif
                    </div>
                </div>
          
        </div>
      
      <div class="col-md-2">
            <div class="panel panel-default">
              <div class="panel-body">
                <button class="btn btn-default form-control" style="margin-bottom: 10px;">Edit Project</button>
                <button class="btn btn-default form-control">Remove Project</button>
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
  

  
</div>
@endsection
