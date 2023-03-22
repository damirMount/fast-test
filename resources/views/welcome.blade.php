@extends('layouts.app')
    @section('content')
       <div class="container">
           <p class="champions">Nikita is champion!</p>
           <p class="champions">Erniz is champion!</p>
           <p class="champions">Maksat is champion!</p>
           <p class="champions">Joodar is champion!</p>

           <button class="btn btn-primary" id="blue-btn">Blue</button>
           <button class="btn btn-danger" id="red-btn">Red</button>
           <button class="btn btn-warning" id="orange-btn">Orange</button>
           <button class="btn btn-secondary" id="db-click">click double</button>
           <button class="btn btn-secondary" id="btn-nikita">get Nikita's id</button>
           <button class="btn btn-secondary" id="btn-erniz">get Erniz's id</button>

            <div class="d-flex justify-content-space">
                <div class="w-25 h-25 border border-warning" id="first-div">
                    <p class="champions" id="nikita-id" data-id="3" data-name="Nikita">Nikita is champion!</p>
                    <p class="champions" id="erniz-id" data-id="1"  data-name="Erniz">Erniz is champion!</p>
                    <p class="champions">Maksat is champion!</p>
                    <p class="champions">Joodar is champion!</p>
                </div>

                <div class="w-25 h-25 border border-dark" id="second-div">
                    <p class="champions">Nikita is champion!</p>
                    <p class="champions">Erniz is champion!</p>
                    <p class="champions">Maksat is champion!</p>
                    <p class="champions">Joodar is champion!</p>
                </div>
            </div>

           <span  id="label-test">Test input</span>
           <input type="text" class="input">
  </div>



{{--@push('styles')--}}
    <style>
        .red-text {
            font-size: 24px;
            color: blue;
        }
    </style>
{{--@endpush--}}

{{--@push('scripts')--}}
    <script>

        $('#btn-nikita').click(function () {
            console.log('asdasd');

            let id = $('#nikita-id').data('id');
            let name = $('#nikita-id').data('name');

            alert(name + ' ' + id);
        })


        $('.input').change(function (){
            $('#label-test').addClass('red-text');
        })

        $('#first-div').hover(function (){
            $(this).css('background-color', 'red');
        });

        $('#second-div').hover(function () {
            $(this).hide();
        });

        $('#db-click').dblclick(function (){
            $('.champions').css('display', 'none');
            // $('.champions').hide();
        });

        $('#blue-btn').click(function () {
            $('p').css('color', 'blue');
        });

        $('#red-btn').click(function () {
            $('p').css('color', 'red');
        });

        $('#orange-btn').click(function () {
            $('p').css('color', 'orange');
        });
    </script>
    @endsection

{{--@endpush--}}
