var app = require('express')();
var http = require('http').Server('app');
var io = require('socket.io');
var Redis = require('ioredis');
var redis = new Redis();

http.listen(3000, function(){
    console.log('Listening on Port 3000');
});

redis.on('connect', function () {
  console.log('CONNECTED');
});

redis.on('disconnect', function () {
   console.log('DISCONNECT')
});

redis.subscribe('test-channel', function(err, count) {
  console.log("SUBSCRIBED: ", err, count);
});

redis.on('message', function(channel, message) {
    console.log(message);
    message = JSON.parse(message);
    io.emit(channel + ':' + message.event, message.data);
});

io.on('connection', function (image) {
  console.log("SOCKET CONNECTION");
  socket.on('stream', function (image) {
    socket.broadcast.emit('stream',image);
  });
});
