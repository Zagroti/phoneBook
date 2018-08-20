<html>
<head>
    <meta charset="utf-8">
    <title>Phone Book</title>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" type="text/javascript"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

</head>
<body>
<div class="container-fluid top" style="background: lightskyblue;">
    <div class="row d1" style="height: 70px;">
        <div class="col-6">
            <div class="col-12 myPhone"><img src="/image/phone (3).png"> My Phone</div>
        </div>
        <div class="col-6"><div class="col-12 logReg"><span style="float:right;">Welcom,{{ Auth::user()->name }}, <a style="text-decoration:none" href="{{ route('logout') }}">Logout</a></span></div></div>
    </div>

</div>
<div class="container-fluid">
    <div class="row top-buffer" style="height:auto;margin-top: 30px;">
        <div class="col-lg-12">
            {{--<div  style="margin:0 auto;float: none;">--}}
                <div style="margin: 0 15px;">
                    {{--<form style="" method="get" action="{{url('contacts')}}">--}}
{{--                        {!! csrf_field() !!}--}}
                    {{--onkeyup="search()"--}}
                    <input style="border-radius: 4px;border: 1px solid darkgray;height: 40px;"  class="col-lg-3 mb-3" name="search" type="search" id="search" placeholder="search...">
                    {{--</form>--}}
                    <a href="/add"><button type="button" class="btn btn-success float-right col-lg-2 mb-3">Add new contact</button></a>
                    <hr class="col-xs-12" style="margin-top:0;">
                    <table id="table1" class="table table-responsive-lg table-hover table-borderLess table-striped">
                        <thead>
                        <tr class="table-secondary">
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Mobile</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Address</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody id="success">
                        <?php foreach ($contact as $con) {?>
                        <tr class="tab">
                            <td><?php echo $con['name']; ?></td>
                            <td><?php echo $con['email']; ?></td>
                            <td><?php echo $con['mobileNumber']; ?></td>
                            <td><?php echo $con['phoneNumber']; ?></td>
                            <td><?php echo $con['address']; ?></td>
                            <td><input type="hidden" id="id" value="{{$con['id']}}"></td>
                            <td>
                                {{--onclick="return confirm('آیا می خواهید این کاربر را حذف کنید؟')"--}}
                                {{--href='{{url("destroy/{$con['id']}")}}'--}}
                                <a onclick="remove({{$con['id']}});" id="delete" class="float-right">
                                    <img src="/image/delete (1).png">
                                    {{-- data-id="{{$con['id']}}"--}}
                                   {{--{{session()->get('message')}}--}}
                                </a>
                                    <a onclick="return confirm('آیا می خواهید این کاربر را ویرایش کنید؟')" href='{{url("contact/{$con['id']}")}}' class="float-right">
                                    <img style="padding: 3px 5px" src="/image/eddit.png" >
                                    </a>
                            </td>
                        </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                    <table id="table2" style="display: none" class="table table-responsive-lg table-hover table-borderLess table-striped">
                        <thead>
                        <tr class="table-secondary">
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Mobile</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Address</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody id="success">

                        </tbody>
                    </table>
                    <nav  aria-label="...">
                        <ul  class="pagination pagination-sm justify-content-center fixed-bottom">
                            {{--@foreach($contact as $contacts)--}}
                            {{--<li class="page-item disabled">--}}
                                {{--<a style="border: 0 !important; cursor: pointer;" class="page-link text-primary" href="#" tabindex="-1">{{$loop->index+1}}</a>--}}
                            {{--</li>--}}
                            <li class="page-item" style="border: 0 !important;">
{{--                                {{$contact->links()}}--}}
{{--                                {{ $contact->appends(\Request::except('page'))->link() }}--}}
                                {{ $contact->appends(\Request::except('_token'))->render() }}
{{--                                {!! str_replace('/?', '?', $contact->render()) !!}--}}
                                {{--<a style="border: 0 !important; cursor: pointer;" class="page-link text-primary" href="{{url("contacts/{$con['id']}")}}" tabindex="-1">{{$loop->index+2}}</a>--}}
                            </li>
                            {{--@endforeach--}}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
{{--</div>--}}
</body>
</html>
{{--<script type="text/javascript">--}}
    {{--function search() {--}}
        {{--var search = $('#search').val();--}}
        {{--// if (search){--}}
        {{--//     $('#table1').hide();--}}
        {{--//     $('#table2').show();--}}
        {{--// }else{--}}
        {{--//     $('#table1').show();--}}
        {{--//     $('#table2').hide();--}}
        {{--// }--}}
    {{--$.ajax({--}}
        {{--type: "get",--}}
        {{--url: "{{url("contacts/{$con['id']}")}}",--}}
        {{--url:'{{url("/contacts")}}',--}}
        {{--data: {search: search,_token:$('#token').val()},--}}
        {{--dataType:'html',--}}
        {{--success: function (response) {--}}
            {{--alert(response);--}}
        {{--console.log(response);--}}
        {{--$('tbody').html(response);--}}

        {{--}--}}
        {{--});--}}
    {{--}--}}
{{--</script>--}}
{{--<script type="text/javascript">--}}
    {{--$('#delete').click(function(){--}}
        {{--swal({--}}
                {{--title: "Are you sure?",--}}
                {{--text: "You will not be able to recover this imaginary file!",--}}
                {{--type: "warning",--}}
                {{--showCancelButton: true,--}}
                {{--confirmButtonColor: "#DD6B55",--}}
                {{--confirmButtonText: "Yes, delete it!",--}}
                {{--closeOnConfirm: false--}}
            {{--},--}}
            {{--function(){--}}
                {{--swal("Deleted!", "Your imaginary file has been deleted.", "success");--}}
            {{--});--}}
    {{--});--}}
{{--</script>--}}
<?php //$id = $con['id']-1; ?>
{{--url : '{{url("destroy/{$id}")}}',--}}
<script type="text/javascript">
    function remove(id){
        swal({
        title: "Are you sure?",
        text: "Once deleted, you will not be able to recover this imaginary file!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        })

        .then((willDelete) => {
        if (willDelete) {
        $.ajax({
        type : 'get',
                url :'{{url("destroy")}}/'+id,
        success:function(){
        // alert($con);
        swal("Poof! Your imaginary file has been deleted!", {
        icon: "success",
        });
        }
        });
        } else {
        swal("Your imaginary file is safe!");
        }

        });

    }
</script>
{{--<script type="text/javascript">--}}
    {{--$('#delete').on('click',function(e){--}}
        {{--e.preventDefault();--}}
                {{--swal({--}}
                    {{--title: "Are you sure?",--}}
                    {{--text: "Once deleted, you will not be able to recover this imaginary file!",--}}
                    {{--icon: "warning",--}}
                    {{--buttons: true,--}}
                    {{--dangerMode: true,--}}
                {{--})--}}

                    {{--.then((willDelete) => {--}}
                    {{--if (willDelete) {--}}
                        {{--$.ajax({--}}
                            {{--type : 'delete',--}}
                            {{--url :'{{url("destroy/{$con['id']}")}}',--}}
                            {{--success:function(){--}}
                                {{--// alert($con);--}}
                        {{--swal("Poof! Your imaginary file has been deleted!", {--}}
                            {{--icon: "success",--}}
                        {{--});--}}
                    {{--}--}}
                    {{--});--}}
                    {{--} else {--}}
                        {{--swal("Your imaginary file is safe!");--}}
            {{--}--}}
        {{--});--}}
    {{--});--}}
{{--</script>--}}

<script type="text/javascript">
    $('#search').on('keyup',function(){
        if ($('#search')){
            $('#table1').show();
            $('#table2').hide();
        }
            else{
            $('#table1').hide();
            $('#table2').show();
        }
        var value=$(this).val();
        $.ajax({
            type : 'get',
            url : '{{url("/contacts")}}',
            data:{search:value},
            success:function(data){
                // alert(data);
                // console.log(data);
                $('#table1').html(data);
            }
        });
    });
</script>