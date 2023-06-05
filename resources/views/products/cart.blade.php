@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-8">
                <div class="product d-flex justify-content-space">
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
    <script>
        $( document ).ready(function() {
            getCart();
        });



        function getCart() {
            let products = JSON.parse(sessionStorage.getItem('cart'));
            forea
        }
    </script>
@endpush
