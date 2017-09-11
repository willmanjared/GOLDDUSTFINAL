@extends('layouts.user')

@section('content')
<div class="container-fluid full-height">
    <div id="messenger-wrapper" class="row full-height">
        <div id="messenger-left" class="col-md-3">
            <div id="conversations" class="panel panel-default">
                <div class="panel-heading">Conversations</div>

                <div class="panel-body">
                    <div class="conversation">
			<div class="conversation-body">
			    Test Username
			</div>
		    </div>
		    <div class="conversation">
                        <div class="conversation-body">
                            Test Username
                        </div>
                    </div>
		    <div class="conversation">
                        <div class="conversation-body">
                            Test Username
                        </div>
                    </div>
                </div>
            </div>
        </div>

	<div id="messenger-right" class="col-md-9">
	    <div id="messenger-messages">
		<div id="messenger-conversation" class="panel panel-default">
		    <div class="panel-heading">Conversation Name</div>
		    <div class="panel-body">
			<div class="message panel panel-default">
			    <div class="panel-heading">Test Username</div>
			    <div class="panel-body">This is a test user's message. =]</div>
			</div>
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

			    <input id="reciever_id" type="hidden" name="reciever_id" value="1" />

			    <div class="input-group">
      				<input type="text" class="form-control" name="message" placeholder="Type message here...">
      				<span class="input-group-btn">
        			    <button class="btn btn-primary" type="submit">Send</button>
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
