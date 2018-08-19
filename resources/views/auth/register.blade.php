<html>
<head>
    <meta charset="utf-8">
    <title>دفترچه تلفن</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</head>
<body>
{{--<div id="header">--}}
    {{--<img src="/image/belons-1 (1).jpg" style="padding: 26px 0; float: left;">--}}
    {{--<span class="myPhone">My Phone</span>--}}
    {{--<span class="logReg"><a href="../auth/login" class="login">Login</a> | <a href="../auth/register" class="register">Register</a></span>--}}
{{--</div>--}}
{{--<form method="post" id="formL">--}}
{{--@csrf--}}
    {{--<span style="font-size: 25px;font-weight: bold;">Sign Up!</span>--}}
    {{--<br>--}}
    {{--<br>--}}
    {{--<span style="font-size: 10px;color: lightslategrey;font-weight: bold;">You dont have a account,Please signup in my phonebook.</span>--}}
    {{--<hr style="width: 399px; color: #aaa;">--}}
    {{--<input id="email" name="email" type="text" placeholder="E-mail">--}}
    {{--<br>--}}
    {{--<br>--}}
    {{--<br>--}}
    {{--<input id="userName" name="userName" type="text" placeholder="User Name">--}}
    {{--<br>--}}
    {{--<br>--}}
    {{--<br>--}}
    {{--<input id="password" name="password" type="password" placeholder="Password">--}}
    {{--<button type="submit" class="logBtn">Sign Up</button>--}}
    {{--<span style="color: darkgray;font-size: 13px;">do You have account,Please <a href="../auth/login" style="--}}
    {{--cursor:pointer;color: darkslategrey;font-weight: bold;">Login</a> in your account</span>--}}
{{--</form>--}}


<div class="container-fluid" style="background: lightskyblue;">
    <div class="row" style="height: 70px;">
        <div class="col-6">
            <div class="col-12 myPhone"><img src="/image/phone (3).png"> My Phone</div>
        </div>
        <div class="col-6"><div class="col-12 logReg"><span style="float:right;"><a href="/login" style="text-decoration: none;cursor: pointer">Login</a> | <a href="/register" style="text-decoration: none;cursor: pointer">Register</a></span></div></div>
    </div>
</div>

<div class="container-fluid">
    <div class="row top-buffer" style="height: 310px;margin-top: 90px;">
        <div class="col-lg-6 col-lg-1 col-centered" style="float: none;margin: 0 auto;">
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="register" method="POST" style="margin:0 auto;float: none;">
                {!! csrf_field() !!}
                <div  style="height: 61px;margin: 0 auto;float: none;"><span style="font-size: 28px;font-weight: bold;">Sign Up!</span><br><span class="underL">you dont have a account, Please signup in my phonebook</span><br><hr class="col-12">
                    <input name="email" type="text" class="form-control " placeholder="E-mail" style="margin: 0 10px;">
                    <input name="name" type="text" class="form-control top-buffer" placeholder="User Name" style="margin:15px 10px;">
                    <input name="password" type="text" class="form-control top-buffer" placeholder="Password" style="margin:15px 10px;">
                    <button style="padding-top:3px;margin: 0 10px;float: none;height: 38px;" type="submit" class="btn btn-primary btn-lg col-lg-12 col-centered">Sign Up</button>
                    <br>
                    <br>
                    <span class="underL">Do you have account, please <a href="/login">login</a> in your account</span>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>