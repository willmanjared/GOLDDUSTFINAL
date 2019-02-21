@extends('layouts.user')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Proposals</div>

                <div class="panel-body">
                  
                  @if(isset($proposals) && count($proposals) > 0)
                  
                  <ul class="list-group proposal">
            
                    @foreach($proposals as $p)

                      <li class="list-group-item">
                        <div class="proposal-body">
                          <p>{{ $p->project->title }}</p>
                          <p>{{ $p->created_at->diffForHumans() }}</p>
                        </div>
                        <div class="proposal-actions">
                          <a href="/projects/{{ $p->project->id }}">View</a>
                        </div>
                      </li>

                    @endforeach

                  </ul>

                  @else
                  
                    <p>You Haven't Submitted Any Proposals</p>
                  
                  @endif
                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
