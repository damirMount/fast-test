@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                {{ $home->id }}
            </div>
            <div class="col-12">
                {{ $home->name }}
            </div>
            <div class="col-12">
                {{ $home->price }}
            </div>
            <div class="col-12">
                {{ $home->year_of_build }}
            </div>
            <div class="col-12">
                {{ $home->count_of_floors }}
            </div>
        </div>
    </div>
@endsection
