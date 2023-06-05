@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            @foreach($products as $product)
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img src="{!!  asset('storage/files/' . $product->image) !!}" class="card-img-top image"
                             id="image-{{ $product->id }}"
                             data-image="{!! $product->image !!}"
                             alt="...">
                        <div class="card-body">
                            <h5 class="card-title product" id="name-{!! $product->id !!}" data-name="{!! $product->name !!}">{!! $product->name !!}</h5>
                            <h6 class="card-title product" id="price-{!! $product->id !!}" data-price="{!! $product->price !!}">{!! $product->price !!}</h6>
                            <button class="btn btn-primary cart" data-id="{!! $product->id !!}">В корзину</button>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>


@endsection

@push('scripts')
    <script>
        $( document ).ready(function() {
            startSession();
        });

        function startSession() {
            if (!sessionStorage.getItem('cart')) {
                let cart = {};
                let total = {
                        quantity: 0,
                        sum: 0
                    };
                sessionStorage.setItem('cart', JSON.stringify(cart));
                sessionStorage.setItem('total', JSON.stringify(total));
            }
        }

        $('.cart').click(function () {
            let id = $(this).data('id');
            let image = $('#image-' + id).data('image');
            let name = $('#name-' + id).data('name');
            let price = $('#price-' + id).data('price');

            item = {
                id: id,
                name: name,
                image: image,
                price: price,
                quantity: 1,
            }

            let cart = JSON.parse(sessionStorage.getItem('cart'));
            let total = JSON.parse(sessionStorage.getItem('total'));

            if (typeof cart !== "undefined" && cart.hasOwnProperty(item.id)) {
                cart[item.id].quantity += item.quantity;
                total['quantity'] += item.quantity;
            } else {
                cart[item.id] = item;
                total['quantity'] += 1;
            }
            sessionStorage.setItem('cart', JSON.stringify(cart));
            sessionStorage.setItem('total', JSON.stringify(total));
            getTotalQuantity();
        });


        function getTotalQuantity() {
            let total = JSON.parse(sessionStorage.getItem('total'));
            $('#cart').html(`<div id="cart">${total.quantity}</div>`);
        }

    </script>
@endpush
