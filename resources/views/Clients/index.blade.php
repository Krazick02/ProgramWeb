@extends('plantilla')

@section('title','Index Clients')


@section('content')

    <h1>Usuarios en la base de datos Users</h1>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Lastname</th>
                <th scope="col">Phone number</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clients as $client)
            <tr>
                <th scope="row">{{$client->id}}</th>
                <td>{{$client->name}}</td>
                <td>{{$client->lastname}}</td>
                <td>{{$client->phone_number}}</td>
                <td>
                    <a href="#" class="btn btn-danger">Delete</a>
                    <a href="{{ route('clients.show',$client) }}" class="btn btn-info">Details</a>
                    <a href="#" class="btn btn-warning">Edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>

    </table>

    {{$clients->links()}}
@endsection
