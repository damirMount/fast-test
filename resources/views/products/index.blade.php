@extends('products.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Products</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('products.create') }}">Create a new product</a>
            </div>
            <p></p>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>№</th>
            <th>Name</th>
            <th>Image Link</th>
            <th>Price</th>
        </tr>
        @foreach ($products as $product)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->imgLink }}</td>
                <td>{{ $product->price }}</td>
                <td>
                    <form action="{{ route('products.destroy',$product->id) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Показать</a>

                        <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Изменить</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Удалить</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $products->links() !!}

@endsection
