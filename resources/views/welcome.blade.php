@extends('layout')
@section('content')
    <div class="container">
{{--        @foreach($homes as $home)--}}
{{--            @foreach($home->apartments as $apartment)--}}
{{--                <div>--}}
{{--                    {{ $apartment->floor }} -- {{ $apartment->area }} -- {{ $apartment->count_of_rooms }}--}}
{{--                    <br>--}}
{{--                    {{ $apartment->sale->client->full_name }}--}}
{{--                </div>--}}
{{--            @endforeach--}}
{{--        @endforeach--}}
{{--            <div class="container">--}}
{{--                <p class="chempions" id="nikita-id" data-id="3" data-name="Nikita">Nikita is champions!</p>--}}
{{--                <p class="chempions" id="erniz-id" data-id="1" data-name="Erniz">Erniz is champions!</p>--}}
{{--                <p class="chempions">Maksat is champions!</p>--}}
{{--                <p class="chempions">Joodar is champions!</p>--}}

{{--                <button class="btn btn-primary" id="erniz-btn">Erniz</button>--}}
{{--                <button class="btn btn-danger" id="red-btn">Red</button>--}}
{{--                <button class="btn btn-warning" id="yellow-btn">Yellow</button>--}}
{{--                <button class="btn btn-secondary" id="db-click">Double click</button>--}}
{{--                <button class="btn btn-primary" id="blue-btn">Blue</button>--}}
{{--                <button class="btn btn-primary" id="add-div">Add div</button>--}}

{{--                <button class="btn btn-primary" id="left-btn"><-</button>--}}
{{--                <button class="btn btn-primary" id="right-btn">-></button>--}}
{{--                <button class="btn btn-primary" id="down-btn">Blue</button>--}}
{{--                <button class="btn btn-primary" id="up-btn">Add div</button>--}}

{{--            </div>--}}

{{--            <div class="2divs" id="second-div" style="height:300px; width:300px; border:1px solid black"></div>--}}
{{--            <div class="2divs" id="bluediv" style="height:300px; width:300px; border:1px solid black"></div>--}}

    </div>
            <button class="btn btn-primary" id="left-btn">Left</button>
            <button class="btn btn-primary" id="right-btn">Right</button>
            <button class="btn btn-primary" id="down-btn">Down</button>
            <button class="btn btn-primary" id="up-btn">Up</button>

            <div style="height:100px; width:100px; border:1px solid black; background-color: darkgray; display: flex" id="innerdiv"></div>

    <select name="Erniz" id="1">
        <option value="0">--Выберите элемент--</option>
        <option value="1">Первый</option>
        <option value="2">Второй</option>
    </select>


    <form action="javascript:alert( 'success!' );">
        <div>
            <input type="number">
            <input type="submit">
        </div>
    </form>
    <span></span>

    <button class="btn btn-primary" id="addButton">Button</button>
    <div id="forButton"></div>

    <div class="trafficlights">
        <svg height="100" width="100">
            <circle id="greenlight" cx="50" cy="50" r="40" stroke="black" stroke-width="3" fill="#023020" />
        </svg>
    </div>
    <div class="trafficlights">
        <svg height="100" width="100">
            <circle id="yellowlight" cx="50" cy="50" r="40" stroke="black" stroke-width="3" fill="#8B8000" />
        </svg>
    </div>
    <div class="trafficlights">
        <svg height="100" width="100">
            <circle id="redlight" cx="50" cy="50" r="40" stroke="black" stroke-width="3" fill="#8b0000" />
        </svg>
    </div>
    <div class="trafficlights">
    <button id="start">Start</button>
        <button id="stop">Stop</button>
    </div>

    <script>
        $("#start").click(function(){
            function turnOnGreen(){$('#greenlight').css('fill', 'green');}
            function turnOffGreen(){$('#greenlight').css('fill', '#023020');}
            function turnOffGreenSetInterval(){turnOffGreenTimerId = setInterval(turnOffGreen, 6000);}
            turnOnGreen();
            let turnOnGreenTimerId = setInterval(turnOnGreen, 6000);
            setTimeout(turnOffGreen, 2000);
            setTimeout(turnOffGreenSetInterval, 2000);

            function turnOnYellow(){$('#yellowlight').css('fill', 'yellow');}
            function turnOffYellow(){$('#yellowlight').css('fill', '#8B8000');}
            function turnOffYellowSetInterval(){turnOffYellowTimerId = setInterval(turnOffYellow, 6000);}
            function turnOnYellowSetInterval(){turnOnYellowTimerId = setInterval(turnOnYellow, 6000);}
            setTimeout(turnOnYellow, 2000);
            setTimeout(turnOnYellowSetInterval, 2000);
            setTimeout(turnOffYellow, 4000);
            setTimeout(turnOffYellowSetInterval, 4000);

            function turnOnRed(){$('#redlight').css('fill', 'red');}
            function turnOffRed(){$('#redlight').css('fill', '#8b0000');}
            function turnOffRedSetInterval(){turnOffRedTimerId = setInterval(turnOffRed, 6000);}
            function turnOnRedSetInterval(){turnOnRedTimerId = setInterval(turnOnRed, 6000);}
            setTimeout(turnOnRed, 4000);
            setTimeout(turnOnRedSetInterval, 4000);
            setTimeout(turnOffRed, 6000);
            setTimeout(turnOffRedSetInterval, 6000);

            $("#stop").click(function(){
                turnOffGreen();
                clearInterval(turnOnGreenTimerId);
                clearInterval(turnOffGreenTimerId);

                turnOffYellow();
                clearInterval(turnOnYellowTimerId);
                clearInterval(turnOffYellowTimerId);

                turnOffRed();
                clearInterval(turnOnRedTimerId);
                clearInterval(turnOffRedTimerId);
            });
        });

        $("select").change(function(){
            alert("Text marked!");
        });

        $( "form" ).submit(function( event ) {
            if ( $( "input:first" ).val()<=100 && $( "input:first" ).val()>=-100 ) {
                $( "span" ).text($( "input:first" ).val()).show();
                return;
            }
            $( "span" ).text( "Not valid!" ).show().fadeOut( 2000 );
            event.preventDefault();
        });


        $(document).ready(function(){
        $("#addButton").click(function(){
            $("#forButton").append("<button class='btn btn-primary' id='getAlert'>Get alert</button>"); 
        });
        $(document).on("click", "button#getAlert" , function() {
            alert("Text marked!");
        });
    });

    // $(document).ready(function(){
    //     $("button").click(function(){
    //         $("ol").append("<li>list item <a href='javascript:void(0);' class='remove'>×</a></li>"); 
    //     });
    //     $(document).on("click", "a.remove" , function() {
    //         $(this).parent().remove();
    //     });
    // });
        // $(document).ready(function(){
        //     $('#getAlert').click(function(){
        //         alert("Text marked!");
        //     });
        // });


        // $('#nikita-id').click(function(){
        //      id let
        // });
        //
        // $('#erniz-btn').click(function(){
        //     let id = document.getElementById('erniz-id').dataset.id;
        //     let name = document.getElementById('erniz-id').dataset.name;
        //
        //     alert()
        // });

        // $('#add-div').click(function(){
        //     let htmlCode = "<p class='chempions'>Nikita is champions!</p>"+
        //                     "<p class='chempions'>Erniz is champions!</p>"+
        //                     "<p class='chempions'>Maksat is champions!</p>"+
        //                     "<p class='chempions'>Joodar is champions!</p>";

        // $('#second-div').append(htmlCode);
        //     });

        var leftMar = 0;
        var topMar = 0;

        $('#left-btn').click(function(){
            // console.log('sdf');
            leftMar = leftMar - 100;
            $('#innerdiv').css('margin-left', leftMar+'px')
        });

        $('#right-btn').click(function(){
            leftMar = leftMar + 100;
            $('#innerdiv').css('margin-left', leftMar+'px')
        });

        $('#down-btn').click(function(){
            topMar = topMar + 100;
            $('#innerdiv').css('margin-top', topMar+'px')
        });

        $('#up-btn').click(function(){
            topMar = topMar - 100;
            $('#innerdiv').css('margin-top', topMar+'px')
        });

        // $('#db-click').dblclick(function(){
        //     // $('.chempions').css('display', 'none')
        //     $('.chempions').hide()
        // });
        //
        // $('#blue-btn').click(function(){
        //     $('p').css('color', 'blue')
        // });
        // $('#red-btn').click(function(){
        //     $('p').css('color', 'red')
        // });
        // $('#yellow-btn').click(function(){
        //     $('p').css('color', 'yellow')
        // });
        //
        // $('#reddiv').hover(function(){
        //     $(this).css('background-color', 'red')
        // });
        //
        // $('#bluediv').hover(function(){
        //     $(this).css('background-color', 'blue')
        // });

    </script>
@endsection

