@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <a href="{{ route('clients.create') }}">Создать</a>
        </div>
    </div>
    @foreach($clients as $client)
        <div class="row">
            <div class="col-1">
                {{ $client->id }}
            </div>
            <div class="col-2">
                {{ $client->full_name }}
            </div>
            <div class="col-1">
                {{ $client->phone_number }}
            </div>
            <div class="col-1">
                {{ $client->email }}
            </div>
            <div class="col-3 d-flex">
                <a href="{{ route('clients.show', $client) }}" class="btn">Посмотреть</a>
                <a href="{{ route('clients.edit', $client) }}" class="btn">Изменить</a>
                <form id="delete-form-{{ $client->id }}" action="{{ route('clients.destroy', $client) }}" method="post">
                    @csrf
                    @method('DELETE')
                </form>
                <button type="submit" form="delete-form-{{ $client->id }}" class="btn btn-danger">Удалить</button>
            </div>
            <div class="col-2">
            </div>
        </div>
    @endforeach
    <div class="col-12">{{ $clients->links() }}</div>
</div>
@endsection
