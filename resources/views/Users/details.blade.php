@extends('plantilla')

@section('title','User Details')


@section('content')

    {{$user->name}} <br>
    {{$user->lastname}} <br>
    {{$user->email}} <br>
@endsection
