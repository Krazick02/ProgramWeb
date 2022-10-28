@extends('plantilla')

@section('title','Index User')


@section('content')

    <h1>Usuarios en la base de datos Users</h1>
        @foreach ($users as $user)
        {{$user->id}} -> {{$user->name}}  <a href="{{ route('users.show',$user) }}" class="btn btn-primary">Ver</a> <br>
        @endforeach

    {{$users->links()}}
@endsection
