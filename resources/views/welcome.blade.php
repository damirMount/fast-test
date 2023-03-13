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
        <p>Hello guys!</p>
            <h1> Hello from Nikita_k</h1>
    </div>
@endsection
