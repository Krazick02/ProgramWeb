@extends('plantilla')

@section('title','Index User')


@section('content')

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Lastname</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <th scope="row">{{$user->id}}</th>
            <td>{{$user->name}}</td>
            <td>{{$user->lastname}}</td>
            <td>
                <a href="#" class="btn btn-danger">Delete</a>
                <a href="{{ route('users.show',$user) }}" class="btn btn-info">Details</a>
                <a href="#" class="btn btn-warning">Edit</a>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>
{{$users->links()}}

@endsection
