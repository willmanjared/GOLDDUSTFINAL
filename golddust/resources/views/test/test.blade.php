<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FiveOne Socket.io</title>
</head>
<body> 
  <label>THIS VIEW IS FOR TESTING STUFF</label>
  <br/>
  
  
  <p id="power">0</p>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  
  <!-- Socket io -->
			<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.0.3/socket.io.js"></script>
  <script>
        var socket = io('http://{{ Request::getHost() }}:3000');
        //var socket = io('http://192.168.10.10:3000');
        socket.on("test-channel:App\\Events\\EventName", function(message){
            // increase the power everytime we load test route
					console.log(message);
            $('#power').text(parseInt($('#power').text()) + parseInt(message.data.power));
        });
    </script>

</body>
</html>