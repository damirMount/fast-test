@extends('layout')

<div class="container">
    <div class="row">
        <form action="{{ route('homes.update', $home) }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="input-name">Наименование</label>
                <input id="input-name" type="text" name="name" value="{{ old('name', $home->name) }}">
            </div>
            <div class="form-group">
                <label for="input-price">Цена за кв./м</label>
                <input id="input-price" type="number" name="price" value="{{ old('price', $home->price) }}">
            </div>
            <div class="form-group">
                <label for="input-year_of_build">Год постройки</label>
                <input id="input-year_of_build" type="number" name="year_of_build" value="{{ old('year_of_build', $home->year_of_build) }}"></div>
            <div class="form-group">
                <label for="input-count_of_floors">Количество этажей</label>
                <input id="input-count_of_floors" type="number" name="count_of_floors" value="{{ old('count_of_floors', $home->count_of_floors) }}"></div>
            <button type="submit">Сохранить</button>
        </form>
    </div>
</div>
