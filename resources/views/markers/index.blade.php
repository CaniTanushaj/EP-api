@extends('markers.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 10 CRUD Example from scratch - ItSolutionStuff.com</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('markers.create') }}"> Create New Product</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Name</th>
            <th>Details</th>
            <th>Image URL</th>
            <th>Latitude</th>
            <th>Longitude</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($markers as $product)
        <tr>
            <td>{{ $product->name }}</td>
            <td>{{ $product->description }}</td>
            <td>{{ $product->imgURL }}</td>
            <td>{{ $product->latitude }}</td>
            <td>{{ $product->longitude }}</td>

            <td>
                <form action="{{ route('markers.destroy',$product->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('markers.show',$product->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('markers.edit',$product->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $markers->links() !!}

@endsection
