<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
    </head>
    <body>
        <button onclick="send()">发送</button>
    </body>
</html>
<script>
    ws = new WebSocket("ws://"+document.domain+":2346");
    ws.onopen = function() {
        console.log("连接成功");

        var login_info = {
            "event":"login",
            "info":"{{auth()->id()??'游客'}}"
        };
        login_info = JSON.stringify(login_info);
        ws.send(login_info);
        console.log("{{auth()->user()?auth()->user()->name:'游客'}}" + "登录");
    };
    ws.onmessage = function(e) {
        console.log(e);
    };

    function send() {
        var info = {
            "event":"say",
            "info":"hello world!!!"
        };
        info = JSON.stringify(info);
        ws.send(info);
    }

</script>
