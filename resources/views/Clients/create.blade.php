@extends('plantilla')

@section('title','Create Client')


@section('content')
<form action="{{ route('clients.store') }}" method="POST">
    @csrf
    <div class="row text-center">

        <div class="row mb-4">
            <div class="col-lg-6  col-sm-12">
                <div class="form-outline text-start">
                    <label class="form-label" for="name">First name</label>
                    <input type="text" name="name" id="name" class="form-control" />
                </div>
            </div>

            <div class="col-lg-6  col-sm-12">
                <div class="form-outline text-start">
                    <label class="form-label" for="lastname">Last name</label>
                    <input type="text" name="lastname" id="lastname" class="form-control" />
                </div>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-lg-6 col-sm-12">
                <div class="form-outline mb-4 text-start">
                    <label class="form-label" for="form3Example3">Email address</label>
                    <input type="email" name="email" id="email" class="form-control" />
                </div>
            </div>
            <div class="col-lg-6 col-sm-12">
                <div class="form-outline mb-4 text-start">
                    <label class="form-label" for="form3Example4">Phone number</label>
                    <input type="phone_number" name="phone_number" id="phone_number" class="form-control" />
                </div>
            </div>
        </div>

        <div class="col-sm-12">
            <button type="submit" class="btn btn-primary btn-block mb-4">Sign up</button>
        </div>
    </div>

</form>
@endsection
