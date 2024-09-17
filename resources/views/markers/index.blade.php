@extends('markers.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>REST API CRUD</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('markers.create') }}"> Create New marker</a>
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
        @foreach ($marker as $marker)
        <tr>
            <td>{{ $marker->name }}</td>
            <td>{{ $marker->description }}</td>
            <td>{{ $marker->imgURL }}</td>
            <td>{{ $marker->latitude }}</td>
            <td>{{ $marker->longitude }}</td>

            <td>
                <form action="{{ route('markers.destroy',$marker->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('markers.show',$marker->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('markers.edit',$marker->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>



@endsection
