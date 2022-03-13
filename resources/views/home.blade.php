@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 mt-5 text-center">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        @auth
            <h2>
                Bienvenido 
                <strong>
                    {{ Auth::user()->name }}
                </strong>
                ya estas Logueado 👌...
            </h2>
        @endauth
        </div>

        <div class="col-md-12 mt-5 text-center">
            <img src="{{ asset('img/well.gif') }}" class="img-fluid" alt="Responsive image">
        </div>
    </div>
</div>
@endsection
