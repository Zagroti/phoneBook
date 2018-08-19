<html>
<head>
    <meta charset="utf-8">
    <title>دفترچه تلفن</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</head>
<body>
<div class="container-fluid" style="background: lightskyblue;">
    <div class="row" style="height: 70px;">
        <div class="col-6">
            <div class="col-12 myPhone"><img src="/image/phone (3).png"> My Phone</div>
        </div>
        <div class="col-6"><div class="col-12 logReg"><span style="float:right;">Welcom,{{ Auth::user()->name }}</span></div></div>
    </div>

</div>
<div class="container-fluid">
    <div class="row top-buffer" style="height:auto;margin-top: 30px;">
        <div class="col-lg-12">
            <form method="post" action="" style="margin:0 auto;float: none;">
                {!! csrf_field() !!}
                {{--@method('put')--}}
                <div  style="height: 61px;"><span style="font-size: 20px;font-weight: bold;" class="mb-3">Update Contact</span><a href="{{url('contacts/'.Auth::user()->id)}}" style="text-decoration: none"><button type="button" class="btn btn-warning col-lg-2 float-right mb-3">View Contacts</button></a><hr class="col-xs-12">
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <input value="{{$contact->name}}" name="name" type="text" class="form-control top-buffer col-lg-5" placeholder="Name" style="margin:15px 10px;">
                    <input value="{{$contact->email}}" name="email" type="text" class="form-control top-buffer col-lg-5" placeholder="E-mail" style="margin:15px 10px;">
                    <input value="{{$contact->mobileNumber}}" name="mobileNumber" type="text" class="form-control top-buffer col-lg-5" placeholder="Mobile" style="margin:15px 10px;">
                    <input value="{{$contact->phoneNumber}}" name="phoneNumber" type="text" class="form-control top-buffer col-lg-5" placeholder="Phone Number" style="margin:15px 10px;">
                    <input value="{{$contact->address}}" name="address" type="text" class="form-control top-buffer col-lg-5" placeholder="Address" style="margin:15px 10px;">
                    <a href="{{url('contacts/'.Auth::user()->id)}}"><button style="height:38px; margin:0 2px" type="button" class="btn btn-secondary col-lg-2 col-sm-2 mb-3">Back</button></a>
                    <button style="height:38px;" type="submit" class="btn btn-primary col-lg-3 col-sm-3 mb-3">Edit</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>