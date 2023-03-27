@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <a href="{{ route('homes.create') }}">Создать</a>
        </div>
    </div>
    @foreach($homes as $home)

        <div class="row">

            <div class="col-2">Наименование:</div>
            <div class="col-2 ">
                <a href="#" class="btn btn-primary btn-sm home-id" id="home-{{$home->id}}"   data-id="{{ $home->id }}">{{ $home->name }}</a>
            </div>

{{--            <div class="col-3 d-flex">--}}
{{--                <a href="{{ route('homes.show', $home) }}" class="btn">Посмотреть</a>--}}
{{--                <a href="{{ route('homes.edit', $home) }}" class="btn">Изменить</a>--}}
{{--                <form id="delete-form-{{ $home->id }}" action="{{ route('sales.destroy', $home) }}" method="post">--}}
{{--                    @csrf--}}
{{--                    @method('DELETE')--}}
{{--                </form>--}}
{{--                <button type="submit" form="delete-form-{{ $home->id }}" class="btn btn-danger">Удалить</button>--}}
{{--            </div>--}}
        </div>
    @endforeach


    <select name="" id="slct">
        <option value="" data-id="1">1</option>
        <option value="" data-id="2">2</option>
    </select>
</div>





<script>


    $('#slct').change(function () {
        $(this).find(':selected').data('id')
    })

    $('.home-id').click(function () {
        let id = $(this).data('id');

        $.ajax({
            url: '{{ route('get.home') }}',
            type: 'GET',
            data: {
                homeId: id
            },
            success: function (data) {
                $('#home-' + id).after(data.view);
            },
            fail: function (data) {
                alert('Error')
            }
        })
    })

</script>

@endsection
