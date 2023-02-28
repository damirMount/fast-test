@extends('layout')

<div class="container">
    <div class="row">
        <form action="{{ route('apartments.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="input-area">Плошадь</label>
                <input id="input-area" type="text" name="area">
            </div>
            <div class="form-group">
                <label for="input-floor">Этаж</label>
                <input id="input-floor" type="number" name="floor">
            </div>
            <div class="form-group">
                <label for="input-count_of_rooms">Количество комнат</label>
                <input id="input-count_of_rooms" type="number" name="count_of_rooms"></div>
            <div class="form-group">
                <label for="input-home_id">Дом</label>
                <select id="input-home_id" name="home_id">
                    @foreach($homes as $home)
                        <option value="{{ $home->id }}">{{ $home->name }}</option>
                    @endforeach
                </select>

            </div>
            <button type="submit">Сохранить</button>
        </form>
    </div>
</div>
