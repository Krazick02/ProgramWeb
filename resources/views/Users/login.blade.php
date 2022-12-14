@extends('plantilla')

@section('title','Create User')


@section('content')

<form action="{{ route('login') }}" method="POST">
    @csrf
    <div class="row text-center">
        <div class="row mb-4">
            <div class="col-lg-6 col-sm-12">
                <div class="form-outline mb-4 text-start">
                    <label class="form-label" for="form3Example3">Email address</label>
                    <input type="email" name="email" id="email" class="form-control" />
                </div>
            </div>
            <div class="col-lg-6 col-sm-12">
                <div class="form-outline mb-4 text-start">
                    <label class="form-label" for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control" />
                </div>
            </div>
        </div>

        <div class="col-sm-12">
            <button type="submit" class="btn btn-primary btn-block mb-4">Sign up</button>
        </div>
    </div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

</form>

@endsection
