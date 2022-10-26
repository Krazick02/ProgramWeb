@extends('plantilla')

@section('title','Create User')


@section('content')

<form action="{{ route('users.store') }}" method="POST">
    @csrf
    <label for="name">Nombre</label>
    <input type="text" name="name" id="name">
    <label for="name">Email</label>
    <input type="email" name="email" id="email">
    <button type="submit">Send</button>

</form>

@endsection
