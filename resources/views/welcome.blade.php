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
        <p>Hello guys!@@@@@Nikka</p>
        <p>Hello guys!</p>dima
    <p>Erniz changed this file.</p>
            <h1> Hello from Nikita_k</h1>
            <h1> Hello from AZRET</h1>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function () {
            $.ajax({
                url: "http://host-18/api/clients/store",
                method: 'post',
                data: {
                    'full_name': 'dwadawdwadw',
                    'phone_number': 'dwadawdwadw',
                    'email': 'dwadawdwadw',
                    '_token': '{{csrf_token()}}',
                },
                success: function (result) {
                    console.log(result)
                    // let myVar = JSON.parse(result);
                    // console.log(myVar);
                },
            })

        })
    </script>
@endpush
