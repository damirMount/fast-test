@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="create-character d-flex justify-content-center">

            <button class="btn btn-danger" id="start">Start battle</button>
        </div>
        <form action="" id="character">
            <div class="row">
                <div class="col-3">
                    <div class="mb-3">
                        <label for="name" class="form-label">Input Character name</label>
                        <input type="text" class="form-control" name="name"  id="name">
                    </div>
                </div>
                <div class="col-3">
                    <div class="mb-3">
                        <label for="health" class="form-label">Health</label>
                        <input type="number" class="form-control" name="health"  id="health">
                    </div>
                </div>
                <div class="col-3">
                    <div class="mb-3">
                        <label for="damage" class="form-label">Damage</label>
                        <input type="number" class="form-control" name="damage" id="damage">
                    </div>
                </div>
                <div class="col-3 d-flex align-items-center" style="padding-top: 15px;">
                    <button type="submit" class="btn btn-success" id="create">Create character</button>
                </div>
            </div>
        </form>

        <div class="d-flex justify-content-between" id="arena">

        </div>
    </div>


    <script>
        let count = 0;
        let allData = [];
        let char1 = '';
        let char2 = '';

        let session = '{{ session()->get('key') }}';

        $('#create').click(function (e) {
            count++;
            e.preventDefault();
            let data = $('#character').serializeArray();

            if(count === 2) {
                $('#character').hide();
                char2 = data[0]['value'];
            } else {
                char1 = data[0]['value'];
            }
            allData.push(data);
            let html = '<div class="card '+ data[0]['value'] +'" style="width: 18rem;" id="character-'+ count +'">' +
                            '<img src="{{ asset('img/cartoon.png') }}" class="card-img-top" alt="...">' +
                                '<div class="card-body">'+
                                    '<h5 class="card-title">Character info</h5>' +
                                        '<ul class="list-group list-group-flush">';

            data.forEach((element) => {
                html +=`<li class="list-group-item">${element.name}: ${element.value}</li>`;
            });

            html += '</ul></div></div>';
            $('#arena').append(html);

            $(':input','#character').val('');
        })

        $('#start').click(function () {
            $.ajax({
                url: '{{ route('battle.start') }}',
                type: 'get',
                data: {
                    chars: allData
                },
                success: function (data) {
                    $('#character-1').after('<div id="result" style="text-align:center;"></div>');
                    $('#result').append(data.result);
                    $('.' + data.winner).css('background-color', 'green');
                    $('.' + data.looser).css('background-color', 'red');

                },
            })
        })


    </script>

@endsection
