<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>前台登录</title>
    <!-- Favicon-->
    <link rel="icon" href="{{asset('favicon.ico')}}" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{{asset('plugins/bootstrap/css/bootstrap.css')}}" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="{{asset('plugins/node-waves/waves.css')}}" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{{asset('plugins/animate-css/animate.css')}}" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
</head>

<body class="login-page bg-grey" style="padding-top: 80px;">

<div class="col-lg-6 col-md-6 bg-blue-grey" style="line-height: 325px">
    <div class="description">
        <h1>Laravel Demo</h1>
    </div>
    <small>Laravel Demo</small>
</div>
<div class="col-lg-6 col-md-6 bg-white" style="height: 394px">
    <div class="login-box">
        <div class="logo">
            <a href="javascript:void(0);"><b class="col-blue-grey">Laravel</b></a>
            <small class="col-blue-grey">Laravel Demo</small>
        </div>
        <div class="card" style="box-shadow:0 0px 0px rgba(0, 0, 0, 0);">
            <div class="body">
                <form id="sign_in" method="POST">
                    {{--<div class="msg">login...</div>--}}
                    @csrf
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line {{ $errors->has('email') ? ' errors error focused' : '' }}">
                            <input type="email" class="form-control" value="{{ old('email') }}" name="email" placeholder="账号" required autofocus>
                        </div>
                        @if ($errors->has('email'))
                            <label id="email-error" class="error" for="email">{{ $errors->first('email') }}</label>
                        @endif
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line" {{ $errors->has('password') ? ' errors error focused'  : '' }}>
                            <input type="password" class="form-control" name="password" placeholder="请输入密码" required>
                        </div>
                        @if ($errors->has('password'))
                            <label id="email-error" class="password" for="password">{{ $errors->first('password') }}</label>
                        @endif
                    </div>
                    <div class="row">
                        <div class="col-xs-8 p-t-5">
                            <input type="checkbox" name="remember" id="remember" class="filled-in chk-col-pink" {{ old('remember') ? 'checked' : '' }}>
                            <label for="remember">自动登录</label>
                        </div>
                        <div class="col-xs-4">
                            <button class="btn btn-block bg-blue-grey waves-effect" type="submit">登 录</button>
                        </div>
                    </div>
                    <div class="row m-t-15 m-b--20">
                        <div class="col-xs-6">
                            <a href="{{route('register')}}">立即注册!</a>
                        </div>
                        <div class="col-xs-6 align-right">
                            <a href="{{route('password.request')}}">忘记密码?</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>


<!-- Jquery Core Js -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>

<!-- Bootstrap Core Js -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.js')}}"></script>

<!-- Waves Effect Plugin Js -->
<script src="{{asset('plugins/node-waves/waves.js')}}"></script>

<!-- Validation Plugin Js -->
<script src="{{asset('plugins/jquery-validation/jquery.validate.js')}}"></script>
<script src="{{asset('js/messages_cn.js')}}"></script>

<!-- Custom Js -->
<script src="{{asset('js/admin.js')}}"></script>
<script src="{{asset('js/pages/examples/sign-in.js')}}"></script>
</body>

</html>
