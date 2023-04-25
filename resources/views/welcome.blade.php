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
