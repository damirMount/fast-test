@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <a href="{{ route('apartments.create') }}">Создать</a>
        </div>
    </div>
    @foreach($apartments as $apartment)
        <div class="row">
            <div class="col-1">
                {{ $apartment->id }}
            </div>
            <div class="col-2">
                {{ $apartment->area }}
            </div>
            <div class="col-1">
                {{ $apartment->floor }}
            </div>
            <div class="col-1">
                {{ $apartment->count_of_rooms }}
            </div>
            <div class="col-1">
                {{ $apartment->home->name }}
            </div>
            <div class="col-3 d-flex">
                <a href="" class="btn btn-success add-to-card" data-id="{{$apartments->id}}">Add to cart</a>
                <a href="" class="btn btn-danger remove-from-card" data-id="{{$apartments->id}}">Remove from cart</a>
                <a href="" class="btn btn-success get-card" data-id="{{$apartments->id}}">Get cart</a>
                <a href="{{ route('apartments.show', $apartment) }}" class="btn">Посмотреть</a>
                <a href="{{ route('apartments.edit', $apartment) }}" class="btn">Изменить</a>
                <form id="delete-form-{{ $apartment->id }}" action="{{ route('apartments.destroy', $apartment) }}" method="post">
                    @csrf
                    @method('DELETE')
                </form>
                <button type="submit" form="delete-form-{{ $apartment->id }}" class="btn btn-danger">Удалить</button>
            </div>
            <div class="col-2">
            </div>
        </div>
    @endforeach
    <div class="col-12">{{ $apartments->links() }}</div>
</div>
@endsection


@push('scripts')
    <script>

        $('.remove-from-cart').click(function (e){
            a.preventDefault()
        })

        $('.remove-from-cart').click(function (e){

        })

        $('.add-to-cart').click(function (e){
            e.preventDefault();
            let id = $(this).data('id');

            // sessionStorage - в границе одного сеанса
            // localStorage - на неопределенное время

            // sessionStorage.setItem('homeId', id);
            // localStorage.setItem('homeId', id);

            $.ajax({
                url: {!! ! route !!}
            })

            console.log(id);
        });
    </script>
@endpush
