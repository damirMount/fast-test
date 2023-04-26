<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    @stack('styles')
</head>
<body>

<div>

    <select name="color" id="sellector">
        <option value="green">green</option>
        <option value="red">red</option>
        <option value="blue">blue</option>
        <option value="pink">pink</option>
    </select>

    <div style="height: 100px;width:100px;text-align: center" id="clr_box"> here</div>

<p>PHP are champions</p>

    <p class="chemp">Joodar</p>
    <p class="chemp">Jr</p>
    <p class="chemp">Jdar</p>
    <p  id="newOne" data-id='5' data-name='Nar'> Jar</p>

<button class="btn btn-danger" id="rd_btn">red</button>
<button class="btn btn-warning" id="yl_btn">yellow</button>
<button class="btn btn-success" id="gr_btn">green</button>
<button class="btn btn-primary" id="blue_btn">blue</button>
<button class="btn btn-secondary" id="db-click">hide</button>
<button class="btn btn-secondary" id="id-getter">get ID</button>

{{--    <div class="col-1" style="width:500px;height:500px;border:1px black solid;margin:3px;">--}}
{{--        <select name="homes" id="hom" data-name='{{$homes->name}}' data-id='{{$home->id}}'>--}}
{{--            <option value="{{$homes->name}}">{{$homes->name}}</option>--}}
{{--            <option value="OT">other thing</option>--}}
{{--        </select>--}}
{{--    </div>--}}

</div>

<div style="border:1px solid black;width:300px;height:300px;" class="dv">

</div>
<div style="border:1px solid black;width:300px;height:300px;" class="dv">

</div>

<script>

    {{--$('#slt').change((function(){--}}
    {{--    let value = $(this).data('name');--}}
    {{--    $.ajax({--}}
    {{--        url:'{{route('get.appartment')}}',--}}
    {{--        type:'GET',--}}
    {{--        data:{--}}

    {{--        }--}}
    {{--    });--}}
    {{--}))--}}



   $('#sellector').change((function(){
      let col =  $(this).val();
       $('#clr_box').css('background-color',col);
   }))

$('#id-getter').click(function(){
    let ident = $('#newOne').data('id');
   let IM = $('#newOne').data('name');

    alert(IM + ' ' + ident);
})

    $(".dv").mouseenter(function(){
       $(this).css('background-color','red');
    })

    $('#db-click').dblclick(function (){
        $('.chemp').css('display','none');

    })

$('#blue_btn').click(function(){
    $("p").css('color','blue');
})
$('#gr_btn').click(function(){
    $("p").css('color','green');
})
$('#rd_btn').click(function(){
    $("p").css('color','red');
})
$('#yl_btn').click(function(){
    $("p").css('color','yellow');
})

</script>
<header>
    <div>
        <a href="{{ route('homes.index') }}">Дома</a>
        <a href="{{ route('apartments.index') }}">Квартиры</a>
        <a href="{{ route('clients.index') }}">Клиенты</a>
        <a href="{{ route('sales.index') }}">Продажи</a>
    </div>
</header>
@yield('content')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
@stack('scripts')
</body>
</html>
