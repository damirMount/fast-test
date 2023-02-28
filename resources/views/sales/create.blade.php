@extends('layout')

<div class="container">
    <div class="row">
        <form action="{{ route('sales.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="input-client_id">Клиент</label>
                <select id="input-client_id" name="client_id">
                    @foreach($clients as $client)
                        <option value="{{ $client->id }}">{{ $client->full_name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="input-apartment_id">Квартира</label>
                <select id="input-apartment_id" name="apartment_id">
                    @foreach($apartments as $apartment)
                        <option value="{{ $apartment->id }}">{{ $apartment->home->name }} -- {{ $apartment->floor }} -- {{ $apartment->area }} -- {{ $apartment->count_of_rooms }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit">Сохранить</button>
        </form>
    </div>
</div>
