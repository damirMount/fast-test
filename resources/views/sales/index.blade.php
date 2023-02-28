@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <a href="{{ route('sales.create') }}">Создать</a>
        </div>
    </div>
    @foreach($sales as $sale)
        <div class="row">
            <div class="col-1">
                {{ $sale->id }}
            </div>
            <div class="col-2">
                {{ $sale->client->full_name }}
            </div>
            <div class="col-1">
                {{ $sale->apartment->home->name }}
            </div>
            <div class="col-1">
                {{ $sale->price }}
            </div>
            <div class="col-3 d-flex">
                <a href="{{ route('sales.show', $sale) }}" class="btn">Посмотреть</a>
                <form id="delete-form-{{ $sale->id }}" action="{{ route('sales.destroy', $sale) }}" method="post">
                    @csrf
                    @method('DELETE')
                </form>
                <button type="submit" form="delete-form-{{ $sale->id }}" class="btn btn-danger">Удалить</button>
            </div>
            <div class="col-2">
            </div>
        </div>
    @endforeach
    <div class="col-12">{{ $sales->links() }}</div>
</div>
@endsection
