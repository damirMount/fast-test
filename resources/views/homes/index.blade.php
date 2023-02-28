@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <a href="{{ route('homes.create') }}">Создать</a>
        </div>
    </div>
    @foreach($homes as $home)
        <div class="row">
            <div class="col-1">
                {{ $home->id }}
            </div>
            <div class="col-2">
                {{ $home->name }}
            </div>
            <div class="col-1">
                {{ $home->price }}
            </div>
            <div class="col-1">
                {{ $home->year_of_build }}
            </div>
            <div class="col-1">
                {{ $home->count_of_floors }}
            </div>
            <div class="col-3 d-flex">
                <a href="{{ route('homes.show', $home) }}" class="btn">Посмотреть</a>
                <a href="{{ route('homes.edit', $home) }}" class="btn">Изменить</a>
                <form id="delete-form-{{ $home->id }}" action="{{ route('sales.destroy', $home) }}" method="post">
                    @csrf
                    @method('DELETE')
                </form>
                <button type="submit" form="delete-form-{{ $home->id }}" class="btn btn-danger">Удалить</button>
            </div>
            <div class="col-2">
            </div>
        </div>
    @endforeach
    <div class="col-12">{{ $homes->links() }}</div>
</div>
@endsection
