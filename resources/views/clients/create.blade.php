@extends('layout')

<div class="container">
    <div class="row">
        <form action="{{ route('clients.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="input-full_name">ФИО</label>
                <input id="input-full_name" type="text" name="full_name">
            </div>
            <div class="form-group">
                <label for="input-phone_number">Номер телефон</label>
                <input id="input-phone_number" type="text" name="phone_number">
            </div>
            <div class="form-group">
                <label for="input-email">Почта</label>
                <input id="input-email" type="email" name="email"></div>
            <button type="submit">Сохранить</button>
        </form>
    </div>
</div>
