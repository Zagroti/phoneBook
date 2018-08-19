{{--@extends('header')--}}
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>دفترچه تلفن</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</head>

<body>
<div id="main" >
    <img src="/image/load.gif" class="rounded mx-auto d-block" style="margin-top: 185px">
</div>
<div class="container-fluid header" style="background: lightskyblue;">
    <div class="row" style="height: 70px;">
        <div class="col-6">
            <div class="col-12 myPhone"><img src="/image/phone (3).png"> My Phone</div>
        </div>
        <div class="col-6"><div class="col-12 logReg"><span style="float:right;"><a href="/login" style="text-decoration: none;cursor: pointer">Login</a> | <a href="/register" style="text-decoration: none;cursor: pointer">Register</a></span></div></div>
    </div>

</div>

<div class="container-fluid header">
<div class="row top-buffer" style="height: 310px;margin-top: 90px;">
 <div class="col-lg-6 col-sm-12 col-lg-1 col-centered" style="float: none;margin: 0 auto;">
     @if($errors->any())
         <div class="alert alert-danger">
             <ul>
                 @foreach($errors->all() as $error)
                     <li>{{$error}}</li>
                 @endforeach
             </ul>
         </div>
     @endif
     <form action="login" method="post" style="margin:0 auto;float: none;">
         {{csrf_field()}}
         <div  style="height: 61px;margin: 0 auto;float: none;"><span style="font-size: 28px;font-weight: bold;">Login!</span><br><span class="underL">Please Login in your Account.</span><br><hr class="col-12">
             <input name="name" type="text" class="form-control " placeholder="User Name" style="margin: 0 10px;">
             <input name="password" type="text" class="form-control top-buffer" placeholder="Password" style="margin:15px 10px;">
             <button style="padding-top:3px;margin: 0 10px;float: none;height: 38px;" type="submit" class="btn btn-primary btn-lg col-lg-12 col-centered">{{ __('Login') }}</button>
             <br>
             <br>
             <span class="underL">You dont have account, please try agian <a href="/register">sign up</a></span>
         </div>
     </form>
 </div>
</div>





</div>
</body>
</html>
<script type="text/javascript">
    $('.header').hide();
    $(window).ready(function() {
        $('#main').hide();
        $('.header').show();
    });
</script>
{{--<script type="text/javascript">--}}
{{--$(document).ready(function(){--}}
    {{--$(window).load(function(){--}}
        {{--alert('l');--}}
    {{--$('.header').hide();--}}
    {{--// $('#main').show();--}}

{{--// $('#main').hide();--}}
        {{--// $('#main').css('display', 'none');--}}
        {{--// $('.header').show();--}}
    {{--});--}}
{{--});--}}
{{--</script>--}}
{{--<script type="text/javascript">--}}
    {{--$('#main').show();--}}
    {{--$('.header').hide();--}}
    {{--setInterval(function(){--}}
        {{--$('#main').hide();--}}
        {{--$('.header').show();--}}
    {{--},5000);--}}
{{--</script>--}}