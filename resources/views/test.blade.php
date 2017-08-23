<!DOCTYPE html>
<html lang="en">
<body>
    <p id="power">0</p>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.0.3/socket.io.js"></script>
    <script>
        var socket = io('http://localhost:3000');
        socket.on('test-channel:App\\Events\\EventoPrueba', function(message){
            $('#power').text(parseInt($('#power').text()) + parseInt(message.data.power));
        });
    </script>
</body>
</html>