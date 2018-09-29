<html>
    <head>
        <title>Coaching-Supporter: A Complete solution for Coaching</title>
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/bootstrap.css') }}" />
        <script src="{{ URL::asset('js/jquery.min.js') }}"></script>
        <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
        <link href="https://fonts.googleapis.com/css?family=Crimson+Text|Work+Sans:400,700" rel="stylesheet">
        <style>
            body{
                background: url('{{ URL::asset("images/bg3.jpg") }}');
                background-size: cover;
            }
        </style>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div id="login-header" class="col-lg-3 col-sm-9 col-sm-offset-2" style="">
                    <h2><u>LOGIN</u></h2>
                </div>
            </div>
            <div class="row">
                <div id="login-box" class="col-lg-3 col-sm-8 col-xs-10 col-sm-offset-2 col-xs-offset-1" style="">
                    <form action="login" method="post">
                        {{ csrf_field() }}
                        <input type="text" placeholder="Username" id="username" name="username" class="form-control" >
                        <br>
                        <input type="password" placeholder="Password" id="passwowrd" name="password" class="form-control" >
                        <br>
                        <input type="submit"  class="form-control" value="LOGIN" id="sub_btn"><br>
                        <a href="#"><span style="color: #3399ff">Forgot Password</span></a>
                    </form><br>
                    <span style="color:red">
                        <?php
                        if (isset($error)) {
                            echo $error;
                        }
                        ?></span>
                    @if (count($errors) > 0)
                    <div class = "alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </body>
</html>
