@extends('layout')

<div class="d-flex justify-content-evenly container">
    @section('content')
    <div class="index">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Year of build</th>
                <th scope="col">Count of floors</th>
            </tr>
            </thead>
            <tbody>
            @foreach($homes as $home)
            <tr>
                <td>{{$home->id}}</td>
                <td>{{$home->name}}</td>
                <td>{{$home->price}}</td>
                <td>{{$home->year_of_build}}</td>
                <td>{{$home->count_of_floors}}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    @endsection
    <div class="row">
        <form action="{{ route('homes.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="input-name">Наименование</label>
                <input id="input-name" type="text" name="name">
            </div>
            <div class="form-group">
                <label for="input-price">Цена за кв./м</label>
                <input id="input-price" type="number" name="price">
            </div>
            <div class="form-group">
                <label for="input-year_of_build">Год постройки</label>
                <input id="input-year_of_build" type="number" name="year_of_build"></div>
            <div class="form-group">
                <label for="input-count_of_floors">Количество этажей</label>
                <input id="input-count_of_floors" type="number" name="count_of_floors"></div>
            <button type="submit">Добавить</button>
        </form>
    </div>
</div>
