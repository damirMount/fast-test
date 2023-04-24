{{--@extends('layout')--}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
{{--@section('content')--}}
<div class="d-flex justify-content-evenly container">
{{--    <div class="row">--}}
{{--        <div class="col-12">--}}
{{--            <a href="{{ route('homes.create') }}">Создать</a>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--        <div class="row">--}}
{{--            <div class="col-2">Наименование:</div>--}}
{{--            <div class="col-2">--}}
{{--                <a href="#" class="btn btn-primary btn-lg home-id" id="home-{{ $home->id }}" data-id="{{ $home->id }}" role="button" aria-disabled="true">{{ $home->name }}</a>--}}
{{--            </div>--}}
{{--            <select class="slc-house-class" id="slc-house-id" name="slc-house-name">--}}
{{--                <option value="0">Choose a house</option>--}}
{{--                @foreach($homes as $home)--}}
{{--                    <option value="{{ $home->id }}">{{ $home->name }}</option>--}}
{{--                @endforeach--}}
{{--            </select>--}}

{{--    <select class="slc-apartment-class" id="slc-apartment-id" name="slc-apartment-name">--}}
{{--        <option value="0">Choose apartment</option>--}}
{{--    </select>--}}

{{--            <div class="col-1">--}}
{{--                {{ $home->price }}--}}
{{--            </div>--}}
{{--            <div class="col-1">--}}
{{--                {{ $home->year_of_build }}--}}
{{--            </div>--}}
{{--            <div class="col-1">--}}
{{--                {{ $home->count_of_floors }}--}}
{{--            </div>--}}
{{--            <div class="col-3 d-flex">--}}
{{--                <a href="{{ route('homes.show', $home) }}" class="btn">Посмотреть</a>--}}
{{--                <a href="{{ route('homes.edit', $home) }}" class="btn">Изменить</a>--}}
{{--                <form id="delete-form-{{ $home->id }}" action="{{ route('sales.destroy', $home) }}" method="post">--}}
{{--                    @csrf--}}
{{--                    @method('DELETE')--}}
{{--                </form>--}}
{{--                <button type="submit" form="delete-form-{{ $home->id }}" class="btn btn-danger">Удалить</button>--}}
{{--            </div>--}}
{{--            <div class="col-2">--}}
{{--            </div>--}}
{{--        </div>--}}
<div class="home_index">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Year of build</th>
            <th scope="col">Count of floors</th>
        </tr>
        </thead>
        <tbody id="tbody-home">
        @foreach($homes as $home)
        <tr>
            <td>{{$home->id}}</td>
            <td>{{$home->name}}</td>
            <td>{{$home->price}}</td>
            <td>{{$home->year_of_build}}</td>
            <td>{{$home->count_of_floors}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
    <div class="home_create">
        <form id="formHomeAdd" method="post">
            @csrf
            <div class="form-group">
                <label for="input-name">Наименование</label>
                <input id="input-name" type="text" name="name">
            </div>
            <div class="form-group">
                <label for="input-price">Цена за кв./м</label>
                <input id="input-price" type="number" name="price">
            </div>
            <div class="form-group">
                <label for="input-year_of_build">Год постройки</label>
                <input id="input-year_of_build" type="number" name="year_of_build"></div>
            <div class="form-group">
                <label for="input-count_of_floors">Количество этажей</label>
                <input id="input-count_of_floors" type="number" name="count_of_floors"></div>
        </form>
        <div class="col-2">
            <a href="#" class="btn btn-primary btn-lg createHomeBtnClass" id="createHomeBtnId" role="button" aria-disabled="true">Create</a>
        </div>
    </div>
</div>

        <script>

            $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});

            $('#createHomeBtnId').click(function(){
                $.ajax({
                    url: '{{route('add.home')}}',
                    method: 'post',
                    data: $('#formHomeAdd').serialize(),
                    success: function (data){
                            alert(`Home ${data.homeName} successfully added`);
                    },
                    fail: function (data){
                        alert('error');
                    }
                })
            });

            $('#createHomeBtnId').click(function(){
                $.ajax({
                    url: '{{route('getLastHome')}}',
                    type: 'GET',
                    data: {name: $('#input-name').val()},
                    success: function (data){
                        let htmlCode = `<tr>
                                        <td>${data.id}</td>
                                        <td>${data.name}</td>
                                        <td>${data.price}</td>
                                        <td>${data.year_of_build}</td>
                                        <td>${data.count_of_floors}</td>
                                        </tr>`;

                        $('#tbody-home').append(htmlCode);
                    },
                    fail: function (data){
                        alert('error');
                    }
                })
            });


            {{--$.ajaxSetup({    headers: {--}}
            {{--        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')    }--}}
            {{--});--}}
            {{--$('#createHomeBtnId').click(function(e){--}}
            {{--    e.preventDefault();    $('#createHomeBtnId').prop('disabled', true);--}}
            {{--    $.ajax({--}}
            {{--        url: '{{route('add.home')}}',--}}
            {{--        method: 'POST',--}}
            {{--        data:  $('#formHomeAdd').serialize(),--}}
            {{--        success: function (data) {--}}
            {{--            console.log('success')--}}
            {{--            $('#createHomeBtnId').prop('disabled', false);--}}
            {{--            // $('#record').before(data.record);--}}
            {{--        },--}}
            {{--        fail: function (data) {--}}
            {{--            alert('errpr')--}}
            {{--            console.log('fail')--}}
            {{--            $('#createHomeBtnId').prop('disabled', false);--}}
            {{--        }    });--}}
            {{--});--}}





            {{--$('.home-id').click(function(){--}}
            {{--    let id = $(this).data('id');--}}

            {{--    $.ajax({--}}
            {{--        url: '{{route('get.home')}}',--}}
            {{--        type: 'GET',--}}
            {{--        data: {id: id},--}}
            {{--        success: function (data){--}}
            {{--            $('#home-' + id).after(data.view);--}}
            {{--        },--}}
            {{--        fail: function (data){--}}
            {{--            alert('error');--}}
            {{--        }--}}
            {{--    })--}}
            {{--});--}}

            {{--$('.home-id').click(function(){--}}
            {{--    let id = $(this).data('id');--}}

            {{--    $.ajax({--}}
            {{--        url: '{{route('get.apartments')}}',--}}
            {{--        type: 'GET',--}}
            {{--        data: {id: id},--}}
            {{--        success: function (data){--}}
            {{--            $('#home-' + id).after(data.view);--}}
            {{--        },--}}
            {{--        fail: function (data){--}}
            {{--            alert('error');--}}
            {{--        }--}}
            {{--    })--}}
            {{--});--}}

            {{--$('#slc-house-id').change(function(){--}}
            {{--    let selectedHouseId = document.getElementById("slc-house-id").selectedIndex;--}}

            {{--    $.ajax({--}}
            {{--        url: '{{route('get.apartments')}}',--}}
            {{--        type: 'GET',--}}
            {{--        data: {id: selectedHouseId},--}}
            {{--        success: function (data){--}}
            {{--            let slcApartmentsClear = document.getElementById("slc-apartment-id");--}}
            {{--            slcApartmentsClear.innerHTML = '<option value="0">Choose apartment</option>';--}}

            {{--            data.appartments.forEach(function(element){--}}
            {{--                let htmlCode = `<option value="${element.id}">${element.id}</option>`;--}}

            {{--                $('#slc-apartment-id').append(htmlCode);--}}
            {{--            });--}}
            {{--        },--}}
            {{--        fail: function (data){--}}
            {{--            alert('error');--}}
            {{--        }--}}
            {{--    })--}}
            {{--});--}}
        </script>
{{--@endsection--}}
