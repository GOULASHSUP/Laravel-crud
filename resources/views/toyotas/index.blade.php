@extends('toyotas.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="pull-left">
                <h2>Toyotas</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-secondary" href="{{ route('toyotas.create') }}"> Create New</a>
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
            <th>ID</th>
            <th>Model</th>
            <th>Engine</th>
            <th>Price</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($toyotas as $toyota)
        <tr>
            <td>{{ $toyota->id }}</td>
            <td>{{ $toyota->model }}</td>
            <td>{{ $toyota->engine }}</td>
            <td>{{ $toyota->price }}</td>
            <td>
                <form action="{{ route('toyotas.destroy',$toyota->id) }}" method="POST">
                    <a class="btn btn-secondary" href="{{ route('toyotas.show',$toyota->id) }}">Show</a>
                    <a class="btn btn-secondary" href="{{ route('toyotas.edit',$toyota->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-secondary">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach

    </table>
    {{ $toyotas->links() }}


@endsection