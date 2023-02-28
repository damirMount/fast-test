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
