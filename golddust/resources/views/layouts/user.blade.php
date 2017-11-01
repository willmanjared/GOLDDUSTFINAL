<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Gold Dust') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Bootstrap CSS
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    -->

    <!-- Font-Awesome CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- Users Main CSS -->
    <link href="{{ asset('css/users.css') }}" rel="stylesheet">

	    <!-- JQUERY -->
			<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>

			<!-- Socket io -->
			<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.0.3/socket.io.js"></script>

			<!-- MOMENT JS -->
			<script src="https://cdn.jsdelivr.net/npm/moment@2.18.1/moment.js"></script>

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container-fluid">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Gold Dust') }}
                    </a>
										<a class="navbar-brand" href="{{ url('/b/dashboard') }}">
                        <i class="fa fa-users"></i>
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>


		    <!-- Center Of Navbar -->
		    <div id="center-nav-wrapper">
						<ul class="nav navbar-nav">
								<li><a href="{{ url('/f/dashboard') }}">Dashboard</a></li>
								<li><a href="{{ url('/f/messenger') }}">Messages  <span id="note-messages" class="badge"></span></a></li>
								<li><a href="{{ url('/f/proposals') }}">Proposals</a></li>
								<li><a href="{{ url('/f/tasks') }}">Tasks</a></li>
								<li><a href="{{ url('/f/stats') }}">Stats</a></li>
								<li><a href="{{ url('/video/index') }}">Video</a></li>
						</ul>
		     </div>


                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else

														<!-- Notifications Feed Widget Right Side Of Navbar -->
														<li class="dropdown">
															<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
																<i class="fa fa-bell-o" aria-hidden="true"></i>
																<span id="note-notifications" class="badge"></span>
															</a>

															<ul id="notifications" class="dropdown-menu" role="menu">
																<li id="project-note">
																	<div class="notification-icon">
																		<i class="fa fa-folder-open fa-lg"></i>
																	</div>
																	<div class="notification-label">
																		<h5>Projects</h5>
																	</div>
																	<div class="notification-count">
																		<h5>0</h5>
																	</div>
																</li>
																<li id="business-note">
																	<div class="notification-icon">
																		<i class="fa fa-briefcase fa-lg"></i>
																	</div>
																	<div class="notification-label">
																		<h5>Business</h5>
																	</div>
																	<div class="notification-count">
																		<h5>0</h5>
																	</div>
																</li>
																<li id="message-note">
																	<div class="notification-icon">
																		<i class="fa fa-comment fa-lg"></i>
																	</div>
																	<div class="notification-label">
																		<h5>Messages</h5>
																	</div>
																	<div class="notification-count">
																		<h5>0</h5>
																	</div>
																</li>
																<li id="task-note">
																	<div class="notification-icon">
																		<i class="fa fa-sticky-note fa-lg"></i>
																	</div>
																	<div class="notification-label">
																		<h5>Tasks</h5>
																	</div>
																	<div class="notification-count">
																		<h5>0</h5>
																	</div>
																</li>
															</ul>
														</li>

                           <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
																		<li>
																			<a href="{{ url('/profile/'. auth()->id() .'') }}">Profile</a>
																		</li>
																		<li>
																			<a href="{{ route('account') }}">Account</a>
																		</li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>

                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    @yield('content')

    <!-- Bootstrap JS
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    -->

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- USER JS -->
    <script src="{{ asset('js/users.js') }}"></script>

		<!-- NOTIFICATIONS JS -->
		<script src="{{ asset('js/notifications.js') }}"></script>

		<!-- MESSAGES JS 	-->
		<script src="{{ asset('js/messages.js') }}"></script>

	<script>
		var socket = io('http://{{ Request::getHost() }}:3000');

		socket.on("test-channel:user-{{ auth()->id() }}-message", function (res) {
			res = res.message;
			console.log("USER GOT NEW MESSAGE");
			//console.log(res);
			//console.log($("input[name='reciever_id']").val());
			//console.log(res['reciever_id']);

			if ($("input[name='reciever_id']").val() == res['reciever_id']) {
				console.log("SOCKET APPEND NEW MESSAGE");
				//res['user_id'] = res["reciever_id"];
				//res['reciever_id'] = res['user_id'];
				//socketAppendMessage(res);
				appendNewMessage(res);
			}
		});
	</script>



</body>
</html>
