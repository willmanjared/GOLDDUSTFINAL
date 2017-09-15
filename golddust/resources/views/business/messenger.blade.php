@extends('layouts.business')

@section('content')
<div class="container-fluid full-height">
    <div id="messenger-wrapper" class="row full-height">
        <div id="messenger-left" class="col-md-3">
            <div id="conversations" class="panel panel-default">
                <div class="panel-heading fixed-panel-heading">Conversations</div>

                <div class="panel-body">
									
				@if(count($data) > 0)
		   @foreach($data as $a)

		    <div class="conversation">
                        <div class="conversation-body">
                            {{ $a['user']['name'] }}
                        </div>
                    </div>

		   @endforeach
			@endif

                </div>
            </div>
        </div>

	<div id="messenger-right" class="col-md-9">
	    <div id="messenger-messages">
		<div id="messenger-conversation" class="panel panel-default">
				@if(count($data) > 0)
		    <div class="panel-heading fixed-panel-heading">Conversation: {{ $data[0]['user']['name'] }}</div>
				@else
			<div class="panel-heading fixed-panel-heading">Conversation: </div>
			@endif
		    <div class="panel-body">
			
			@if(count($data) > 0)
			@foreach(array_reverse($data[0]['messages']) as $a)

			<div class="message panel panel-default">
       <div class="panel-heading">
				<p class="message-name">
				@if ($a['user_id'] == auth()->id())

					{{ auth()->user()->name }}

				@else

					{{ $data[0]['user']['name'] }}

				@endif
				</p>

				<ul class="message-actions navbar-right">
					<!-- Notifications Feed Widget Right Side Of Navbar -->
					<!--
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
							<i class="fa fa-ellipsis-h" aria-hidden="true"></i>
						</a>

						<ul class="dropdown-menu" role="menu">

						</ul>
						
					</li>
        </ul>
				-->
				 
				 <!-- Single button -->
				<div class="btn-group message-actions">
					<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="fa fa-ellipsis-h" aria-hidden="true"></i>
					</button>
					<ul class="dropdown-menu">
						<li><a href="#">Edit</a></li>
						<li><a href="#">Delete</a></li>
					</ul>
				</div>
				 
				 <p class="message-date">{{ $a['created_at'] }}</p>

			    </div>
      	<div class="panel-body">

				{{ $a['body'] }}

			    </div>
      </div>

			@endforeach
			@endif

		    </div>
		</div>
	    </div>
	    <div id="messenger-form">
		<div class="panel panel-default">
		    <div class="panel-body">
			<!-- THIS ACTION FOR THE FORM NEEDS TO BE FIXED --- TEMP FIX BECAUSE THE ROUTES ARE FUCKED -->
			<form action="/index.php/messenger/send" method="post">
			{{ csrf_field() }}
              		@include('includes.formerror')
				@if(count($data) > 0)
			    <input id="reciever_id" type="hidden" name="reciever_id" value="{{ $data[0]['user']['id'] }}" />
				@else
					<input id="reciever_id" type="hidden" name="reciever_id" value="0" />
				@endif

			    <div class="input-group">
      				<input type="text" class="form-control" name="message" placeholder="Type message here...">
      				<span class="input-group-btn">
								@if(count($data) > 0) 
        			    <button class="btn btn-primary" type="submit">Send</button>
								@else
									<button class="btn btn-primary" type="submit" disabled>Send</button>
								@endif
      				</span>
			    </div>
			</form>
		    </div>
		</div>
	    </div>
	</div>
    </div>
</div>

@endsection
