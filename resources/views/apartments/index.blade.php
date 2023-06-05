@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <a href="{{ route('apartments.create') }}">Создать</a>
        </div>
    </div>
{{--    @foreach($apartments as $apartment)--}}
{{--        <div class="row">--}}
{{--            <div class="col-1 mt-3">--}}
{{--                {{ $apartment->id }}--}}
{{--            </div>--}}
{{--            <div class="col-2 mt-3">--}}
{{--                {{ $apartment->area }}--}}
{{--            </div>--}}
{{--            <div class="col-1 mt-3">--}}
{{--                {{ $apartment->floor }}--}}
{{--            </div>--}}
{{--            <div class="col-1 mt-3">--}}
{{--                {{ $apartment->count_of_rooms }}--}}
{{--            </div>--}}
{{--            <div class="col-1 mt-3">--}}
{{--                {{ $apartment->home->name }}--}}
{{--            </div>--}}
{{--            <div class="col-4 mt-3 d-flex">--}}
{{--                <a href="" class="btn btn-success add-to-cart" data-id="{{ $apartment->id }}">add to cart</a>--}}
{{--                <a href="" class="btn btn-success remove-from-cart" data-id="{{ $apartment->id }}">delete to cart</a>--}}
{{--                <a href="" class="btn btn-success get-cart" data-id="{{ $apartment->id }}">get  cart</a>--}}
{{--                <a href="{{ route('apartments.show', $apartment) }}" class="btn">Посмотреть</a>--}}
{{--                <a href="{{ route('apartments.edit', $apartment) }}" class="btn">Изменить</a>--}}
{{--                <form id="delete-form-{{ $apartment->id }}" action="{{ route('apartments.destroy', $apartment) }}" method="post">--}}
{{--                    @csrf--}}
{{--                    @method('DELETE')--}}
{{--                </form>--}}
{{--                <button type="submit" form="delete-form-{{ $apartment->id }}" class="btn btn-danger">Удалить</button>--}}
{{--            </div>--}}
{{--            <div class="col-2">--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    @endforeach--}}
{{--    <div class="col-12">{{ $apartments->links() }}</div>--}}

    <div class="m-2 rounded">
        <table class="table table-striped table-bordered rounded" id="aparts-table">
            <thead>
            <tr>
                <th></th>
                <th scope="col">Заголовок</th>
                <th scope="col">Описание</th>
                <th scope="col">Баннер</th>
            </tr>
            </thead>
        </table>
    </div>

</div>
@endsection


@push('scripts')

    <script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js" defer></script>
    <script>
        $(function () {
            let table = $('#aparts-table').DataTable({
                responsive: true,
                processing: true,
                ajax: '{!! route('apartments.index') !!}',
                columns: [
                    // Responsive control column
                    {
                        data: null,
                        defaultContent: '<i class="fas fa-plus-circle fa-2x"></i>',
                        className: 'control',
                        orderable: false,
                        searchable: false,
                    },
                    {data: 'area'},
                    {data: 'floor'},
                    {data: 'home_id'},
                    // {data: 'actions'},
                ],
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.18/i18n/Russian.json"
                },
            });
{{--    <script>--}}



{{--        $('.get-cart').click(function (e) {--}}
{{--            e.preventDefault();--}}

{{--            console.log({!! json_encode(session()->all()) !!});--}}
{{--        });--}}

{{--        $('.remove-from-cart').click(function (e) {--}}
{{--            e.preventDefault();--}}

{{--            let session = {!! json_encode(session()->get('nameApart')) !!};--}}

{{--            {!! session()->forget('nameApart') !!}--}}
{{--            console.log(session);--}}
{{--        })--}}

{{--        $('.add-to-cart').click(function (e) {--}}
{{--            e.preventDefault();--}}
{{--            let id = $(this).data('id');--}}

{{--            // sessionStorage - в границе одого сеанса--}}
{{--            // localStorage - на неопределенное время--}}

{{--            $.ajax({--}}
{{--                url: '{!! route('add.apart') !!}',--}}
{{--                post: 'get',--}}
{{--                data: {--}}
{{--                    id: id--}}
{{--                },--}}
{{--                success: function (data) {--}}
{{--                    console.log(data.msg);--}}
{{--                }--}}
{{--            })--}}
{{--        })--}}
{{--    </script>--}}
@endpush

