var app = require('express')();
var http = require('http').Server(app);
var io = require('socket.io')(http);
var Redis = require('ioredis');
var redis = new Redis();

//var socket = io('http://http://ec2-34-210-133-115.us-west-2.compute.amazonaws.com:3000');
var port = process.env.PORT || 3000;

redis.subscribe('test-channel', function(err, count) {
  console.log("SUBSCRIBED: ", err, count);
});


redis.on('message', function(channel, message) {
    //console.log(message);
    //console.log('Message Recieved: ' + message);
  console.log(channel);
  console.log(message);
  console.log(message.event);
    message = JSON.parse(message);
    io.emit(channel + ':' + message.event, message.data);
});

/*

redis.psubscribe('*', function (e,c) {
  console.log('psubscribe: ', e, c);
});

redis.on('pmessage', function(subscribed, channel, message) {
  console.log(subscribed);
    console.log(channel);
  console.log(message);
    message = JSON.parse(message);
    io.emit(channel + ':' + message.event, message.data);
});
*/

redis.on('connect', function () {
  console.log('CONNECTED');
});

redis.on('disconnect', function () {
   console.log('DISCONNECT')
});

http.listen(port, function(){
    console.log('Listening on Port 3000');
});

// VIDEO SOCKET STUFF
io.on('connection', function (socket) {
  console.log("connected with socket");
  socket.on('stream', function (image) {
    console.log('socket streaming');
      socket.broadcast.emit('stream', image);
  });
});
