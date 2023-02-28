@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                {{ $apartment->id }}
            </div>
            <div class="col-12">
                {{ $apartment->area }}
            </div>
            <div class="col-12">
                {{ $apartment->floor }}
            </div>
            <div class="col-12">
                {{ $apartment->count_of_rooms }}
            </div>
            <div class="col-12">
                {{ $apartment->home->name }}
            </div>
        </div>
    </div>
@endsection
