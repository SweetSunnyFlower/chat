<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>后台登录</title>
    <!-- Favicon-->
    <link rel="icon" href="{{config('app.url').'/'.('favicon.ico')}}" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{{config('app.url').'/'.('plugins/bootstrap/css/bootstrap.css')}}" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="{{config('app.url').'/'.('plugins/node-waves/waves.css')}}" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{{config('app.url').'/'.('plugins/animate-css/animate.css')}}" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="{{config('app.url').'/'.('css/style.css')}}" rel="stylesheet">
</head>

<body class="login-page">
<div class="login-box">
    <div class="logo">
        <a href="javascript:void(0);"><b>Laravel</b>Admin</a>
        <small>Admin Laravel Demo</small>
    </div>
    <div class="card">
        <div class="body">
            <form id="sign_in" method="POST">
                {{--<div class="msg">login...</div>--}}
                @csrf
                <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                    <div class="form-line {{ $errors->has('phone') ? ' errors error focused' : '' }}">
                        <input type="phone" class="form-control" value="{{ old('phone') }}" name="phone" placeholder="账号" required autofocus>
                    </div>
                    @if ($errors->has('phone'))
                        <label id="phone-error" class="error" for="phone">{{ $errors->first('phone') }}</label>
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
                        <button class="btn btn-block bg-pink waves-effect" type="submit">登 录</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Jquery Core Js -->
<script src="{{config('app.url').'/'.('plugins/jquery/jquery.min.js')}}"></script>

<!-- Bootstrap Core Js -->
<script src="{{config('app.url').'/'.('plugins/bootstrap/js/bootstrap.js')}}"></script>

<!-- Waves Effect Plugin Js -->
<script src="{{config('app.url').'/'.('plugins/node-waves/waves.js')}}"></script>

<!-- Validation Plugin Js -->
<script src="{{config('app.url').'/'.('plugins/jquery-validation/jquery.validate.js')}}"></script>
<script src="{{config('app.url').'/'.('js/messages_cn.js')}}"></script>

<!-- Custom Js -->
<script src="{{config('app.url').'/'.('js/admin.js')}}"></script>
<script src="{{config('app.url').'/'.('js/pages/examples/sign-in.js')}}"></script>
</body>

</html>
