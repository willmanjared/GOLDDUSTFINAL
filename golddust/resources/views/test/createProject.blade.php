@extends('layouts.business')

@section('content')


<link rel="stylesheet" href="{{ asset('css/viewForm.css') }}" />
<script src="{{ asset('js/viewForm.js') }}"></script>

<div style="display: none;">
  <form>
    
    {{ csrf_field() }}
    <input type="hidden" class="form-control" name="title" />
    <input type="hidden" class="form-control" name="body" />
    <input type="hidden" class="form-control" name="status" />
    <input type="hidden" class="form-control" name="project_length" />
    <input type="hidden" class="form-control" name="project_length_unit" />
    <input type="hidden" class="form-control" name="payment_period" />
    <input type="hidden" class="form-control" name="skill_level" />
    <input type="hidden" class="form-control" name="test_id" />
    
  </form>
</div>


<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                  <p contenteditable="true">
                    {{ $projects['title'] }}
                  </p>
              </div>

                <div class="panel-body">
                  
                  <h3>
                    Description
                  </h3>
                  <p contenteditable="true">
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
                <button class="btn btn-primary form-control" onclick="return false;">
                  Apply
                </button>
              </div>
            </div>
        
            <div class="panel panel-default">
                <div class="panel-body">
                  
                  <div>
                              <ul class="project-attr-list">
                                <li><label>Status: </label><p class="attr-list-status">{{ ucfirst($projects['status']) }}</p></li>
                                <li><label>Number of Proposals: </label><p class="attr-list-proposals">0</p></li>
                                <li><label>Project Length: </label><p class="attr-list-length">{{ $projects['project_length'] }}</p> <p class="attr-list-length_unit">{{ ucfirst($projects['project_length_unit']) }}</p></li>
                                <li><label>Deliverable Type: </label><p class="attr-list-payment_period">{{ ucfirst($projects['payment_period']) }}</p></li>
                                <li><label>Has Test: </label>
                                  <p class="attr-list-test_id btn-p">
                                    @if($projects['test_id'] == 0)
                                      {{ "No" }}
                                    @else
                                      {{ "Yes" }}
                                    @endif
                                  </p>
                                </li> <!-- THIS IS BUT ONLY A TEST ID -->
                                <li><label>Skill Level: </label><p class="attr-list-skill_level">{{ ucfirst($projects['skill_level']) }}</p></li>
                              </ul>
                </div>
            </div>
        </div>
    </div>
      
  </div>
  

  
</div>

<script>
$(function () {
  $(".attr-list-test_id").on("mouseover", function () {
    $(this).addClass("btn-primary-p");
  });
  $(".attr-list-test_id").on("mouseleave", function () {
    $(this).removeClass("btn-primary-p");
  });
});  
</script>




<!--
<div class="container-fluid" style="height: 85%;">
  <div class="row" style="height: 100%;">
    <div class="col-sm-12" style="height: calc(100% - 22px);">
      <div class="panel panel-default" style="height: 100%;">
        <div class="panel-heading" style="height: 65px; overflow: hidden;">
          <ul class="nav nav-tabs" data-container="tab-container" data-link="linked-list" style="">
            <li role="presentation" class="active" data-value="project"><a href="#">Project</a></li>
            <li role="presentation" data-value="deliverables"><a href="#">Deliverables</a></li>
            <li role="presentation" data-value="test"><a href="#">Test</a></li>
          </ul>
        </div>
        <div class="panel-body" style="height: calc(100% - 65px); overflow-x: hidden; overflow-y: auto;">
          <div class="project">
            <div class="container-fluid" style="height: 100%;">
              <div class="row" style="height: 100%;">
                <div class="col-xs-6 col-offset-2">
                  
                </div>
                <div class="col-xs-2">
                  
                </div>
              </div>
            </div>
          </div>
          <div class="deliverables">
            
          </div>
          <div class="test">
            
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

->

@endsection