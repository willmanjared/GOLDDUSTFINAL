@extends('layouts.user')

@section('content')
<div class="container-fluid">
    <div id="messenger-wrapper" class="row">
        <div id="messenger-left" class="col-md-3">
            <div id="conversations" class="panel panel-default">
                <div class="panel-heading fixed-panel-heading">Conversations</div>

                <div class="panel-body">
				@if(count($data) > 0)
		   @foreach($data as $a)

		    <div class="conversation" data-value="{{ $a['user']['id'] }}">
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
		    <div class="panel-heading fixed-panel-heading">{{ $data[0]['user']['name'] }}</div>
				@else
			<div class="panel-heading fixed-panel-heading"></div>
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
				 
				<!-- Notifications Feed Widget Right Side Of Navbar -->
				<!--
				<ul class="message-actions navbar-right">
					
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
							<i class="fa fa-ellipsis-h" aria-hidden="true"></i>
						</a>

						<ul class="dropdown-menu" role="menu">

						</ul>
						
					</li>
        </ul>
				-->
					
					@if ($a['user_id'] == auth()->id())
				 
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
					
					@endif
				 
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
			<form id="messenger-form" action="/messenger/send" method="post" autocomplete="off">
			{{ csrf_field() }}
              		@include('includes.formerror')
				@if(count($data) > 0)
			    <input id="reciever_id" type="hidden" name="reciever_id" value="{{ $data[0]['user']['id'] }}" />
				@else
					<input id="reciever_id" type="hidden" name="reciever_id" value="2" />
				@endif

			    <div class="input-group">
      				<input type="text" class="form-control" name="message" placeholder="Type message here...">
      				<span class="input-group-btn">
								@if(count($data) > 0) 
        			    <button class="btn btn-primary" type="submit">Send</button>
								@else
									<button class="btn btn-primary" type="submit">Send</button>
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

<script>
		var auid = "{{ auth()->id() }}";
		var aname = "{{ auth()->user()->name }}";
	
		$( document ).ready(function () {
			$("#messenger-conversation > .panel-body").scrollTop($("#messenger-conversation > .panel-body")[0].scrollHeight);
			$(".conversation:first").addClass("conversation-active");
			$("body .conversation").click(function (ev) {
				var url = "/conversations/"+ $(this).attr('data-value') +"";
				//alert(a);
				//console.log(url);
				$(this).parent().children(".conversation-active").removeClass("conversation-active");
				$(this).addClass("conversation-active");

				$.get(url, function (data) {
					
					//var a = JSON.parse(data);
					//console.log(data, data.length, data[0]);
					//console.log(data[0].name);
					$("#messenger-conversation > .panel-heading").html(data[0].user.name);
					$("#messenger-conversation > .panel-body").html(" ");
					$("#reciever_id").val(data[0].user.id);
					$.each(data[0].messages, function (i,v) {

						//console.log(v);
						var r = '<div class="message panel panel-default"><div class="panel-heading"><p class="message-name">';
						if (v['user_id'] == auid) {

						r += aname;

						} else {

							 r += data[0]['user']['name'];

						}
							r += '</p>';

							if (v['user_id'] == auid) {

								r += '<div class="btn-group message-actions"><button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">' +
								'<i class="fa fa-ellipsis-h" aria-hidden="true"></i></button><ul class="dropdown-menu"><li><a href="#">Edit</a></li><li><a href="#">Delete</a></li></ul></div>';

							}

								r += '<p class="message-date">' +
								v['created_at'] +
								'</p></div>';

							r += '<div class="panel-body">' +
							v['body'] +
							'</div></div>';

						$("#messenger-conversation > .panel-body").append(r);
					});

					$("#messenger-conversation > .panel-body").scrollTop($("#messenger-conversation > .panel-body")[0].scrollHeight);

				});

			});
		});
	
	function appendNewMessage(data) {
		
		//console.log(v);
						var r = '<div class="message panel panel-default"><div class="panel-heading"><p class="message-name">';
						if (data['reciever_id'] == auid) {

						r += aname;

						} else {

							 r += data["user"];

						}
							r += '</p>';

							if (data['reciever_id'] == auid) {

								r += '<div class="btn-group message-actions"><button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">' +
								'<i class="fa fa-ellipsis-h" aria-hidden="true"></i></button><ul class="dropdown-menu"><li><a href="#">Edit</a></li><li><a href="#">Delete</a></li></ul></div>';

							}

								r += '<p class="message-date">' +
								data['created_at'].date +
								'</p></div>';

							r += '<div class="panel-body">' +
							data['message'] +
							'</div></div>';

						$("#messenger-conversation > .panel-body").append(r);
					
			$("#messenger-form input[name='message']").val("");
		
		
			$("#messenger-conversation > .panel-body").scrollTop($("#messenger-conversation > .panel-body")[0].scrollHeight);
		
	}
	
	
	$("#messenger-form").submit(function (ev) {
		ev.preventDefault();
		
		
		//console.log($(this));
		//console.log($("#messenger-form input[name='_token']").val());
		/*
		$.ajax({
			type: "POST",
			action: "http://ec2-34-210-133-115.us-west-2.compute.amazonaws.com/messenger/send",
			dataType: "JSON",
			data: { "_token": $("#messenger-form input[name='_token']").val() },
			success: function (ev) {
				console.log(ev);
			},
			error: function (ev) {
				console.log(ev);
			}
		});
		*/
		var ob = { 
			"_token": $("#messenger-form input[name='_token']").val(),
			"reciever_id": $("#messenger-form input[name='reciever_id']").val(),
			"message": $("#messenger-form input[name='message']").val()
		};
		$.post("//{{ Request::getHost() }}/messenger/send", ob, function(res){
        // Do something with the response `res`
        console.log(res);
        // Don't forget to hide the loading indicator!
			if ($("input[name='reciever_id']").val() == res['user_id']) {
				console.log("APPEND NEW MESSAGE");
				appendNewMessage(res);
			}
    });
		//return false;
	});
</script>

@endsection
