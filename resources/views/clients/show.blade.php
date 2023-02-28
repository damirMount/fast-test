@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                {{ $client->id }}
            </div>
            <div class="col-12">
                {{ $client->full_name }}
            </div>
            <div class="col-12">
                {{ $client->phone_number }}
            </div>
            <div class="col-12">
                {{ $client->email }}
            </div>
        </div>
    </div>
@endsection
