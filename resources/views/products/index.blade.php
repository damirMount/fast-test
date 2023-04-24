@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            @foreach($products as $product)
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img src="{!!  asset('storage/files/' . $product->image) !!}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{!! $product->name !!}</h5>
                            <a href="#" class="btn btn-primary">В корзину</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>


@endsection
