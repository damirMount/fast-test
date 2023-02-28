@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                {{ $sale->id }}
            </div>
            <div class="col-12">
                {{ $sale->client->full_name }}
            </div>
            <div class="col-12">
                {{ $sale->apartment->home->name }}
            </div>
            <div class="col-12">
                {{ $sale->price }}
            </div>
        </div>
    </div>
@endsection
