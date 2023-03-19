@extends('agents.layout')
@section('content')

    <div class="section index">
    
        <h1>Admin</h1>
        <hr>
        <div class="top-row">
            <div class="button pull-left">
                <a class="btn btn-info" href="{{ route('home.index') }}"> Home</a>
            </div>
            <div class="button pull-left">
                <a class="btn btn-success" href="{{ route('agents.create') }}"> Add new agent</a>
            </div>
    
        </div>
        <br>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        @if($agents->isEmpty())
            <p>No agents found.</p>
            @else
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Image</th>
                            <th>Bio</th>
                            <th width="280px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($agents as $agent)
                            <tr>
                                <td>{{ $agent->id }}</td>
                                <td>{{ $agent->name }}</td>
                                <td>{{ $agent->phone }}</td>
                                <td>{{ $agent->email }}</td>
                                <td>{{ $agent->image }}</td>
                                <td>{{ $agent->bio }}</td>
                                <td>
                                    <form action="{{ route('agents.destroy', $agent->id) }}" method="POST">
                                        <a class="btn btn-primary" href="{{ route('agents.edit', $agent->id) }}">Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $agents->links() }}
        @endif
    </div>

@endsection