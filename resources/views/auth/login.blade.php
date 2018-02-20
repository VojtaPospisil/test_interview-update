@extends('layouts.app')

@section('content')
<div class="login container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="login__h3">Login</h1>
            <div class="card-body">
                @include('auth.login_form')
            </div>
        </div>
    </div>
</div>
@endsection
