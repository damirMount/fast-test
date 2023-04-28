@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            @foreach($products as $product)
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img src="{!!  asset('storage/files/' . $product->image) !!}" class="card-img-top image"
                             id="image-{!! $product->id !!}"
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
        // $('.cart').click(function (e) {
        //     e.preventDefault();
        //     let id = $(this).data('id');
        //     let products = [];
        //
        //     if ('products' in sessionStorage){
        //         products.push(JSON.parse(sessionStorage.getItem('products')));
        //         console.log('asd', products)
        //         products.push([$('#image-'+id).data('image'), $('#name-'+id).data('name'), $('#price-'+id).data('price')]);
        //
        //         sessionStorage.setItem('products', JSON.stringify(products));
        //     }
        //     else {
        //         products.push([]);
        //
        //         sessionStorage.setItem('products', JSON.stringify(products));
        //     }
        // });
        $( document ).ready(function() {
            startSession();
        });

        function startSession() {
            if (!sessionStorage.getItem('cart')) {
                let cart = {};
                sessionStorage.setItem('cart', JSON.stringify(cart));
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
                quantity: 1
            }

            let cart = JSON.parse(sessionStorage.getItem('cart'));

            if (typeof cart !== "undefined" && cart.hasOwnProperty(item.id)) {
                cart[item.id].quantity += item.quantity;
            } else {
                cart[item.id] = item;
            }
            sessionStorage.setItem('cart', JSON.stringify(cart));
        });

        function getCart() {
            return JSON.parse(sessionStorage.getItem('cart'));
        }
        //
        // function addToCart(item) {
        //     let cart = JSON.parse(sessionStorage.getItem('cart'));
        //     if (cart.hasOwnProperty(item.id)) {
        //         cart[item.id].quantity += item.quantity;
        //     } else {
        //         cart[item.id] = item;
        //     }
        //     sessionStorage.setItem('cart', JSON.stringify(cart));
        // }

    </script>
@endpush
