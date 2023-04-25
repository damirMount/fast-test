@extends('layout')
@section('content')
    <form action="{{ route('submit') }}" method="post" enctype="multipart/form-data">
        <input type="file" name="qwerties[]" multiple>
        @csrf
        <input type="submit" value="btn">
        <select name="test[]" id="" multiple>
            <option value="1">Образование</option>
            <option value="2">Политика</option>
            <option value="3">Спорт</option>
            <option value="4">ТАнца</option>
            <option value="5">Спорт</option>
            <option value="6">Спорт</option>
        </select>
    </form>
@endsection

@push('scripts')

@endpush
