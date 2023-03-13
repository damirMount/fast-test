@extends('layout')
@section('content')
    <div>
        @foreach($homes as $home)
            @foreach($home->apartments as $apartment)
                <div>
                    {{ $apartment->floor }} -- {{ $apartment->area }} -- {{ $apartment->count_of_rooms }}
                    <br>
                    {{ $apartment->sale->client->full_name }}
                </div>
            @endforeach
        @endforeach
    <p>Erniz changed this file.</p>
    </div>
@endsection
