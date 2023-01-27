@extends('layouts.app',['bgBody' => '#f0f0f0'])
@section('css')
<link href="{{ asset('css') }}/style-auth.css" rel="stylesheet">
@endsection
@section('content')
<div class="container shadow " style="width: 30%; margin-top: 10rem">
    @if (session('status'))
    <div class="alert alert-danger mt-2" role="alert">
        {{ session('status') }}
    </div>
    @endif
    <div class="row bg-light">
        <div class="text-center {{ session('status') ? 'mt-1' : 'mt-3'}} ">
            <h4> Inicio de Sesion</h4>
        </div>
        <form class="form-auth" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-2">
                <i class="fa-solid fa-envelope pt-2-5 ps-2"></i>
                <input class="form-auth__input" type="email" value="{{ old('email') }}" required name="email"
                    placeholder="e-mail">
            </div>
            <div class="mb-2">
                <i class="fas fa-lock pt-2-5 ps-2"></i>
                <input class="form-auth__input" type="password" name="password" required placeholder="password">
            </div>
            <div class="d-grid">
                <button class="form-auth__button-submit" type="submit">Iniciar Sesion </button>
            </div>
            <div class="row mt-2 my-2 justify-content-start ">
                <a href="" style="font-size: small"> Olvidaste la Clave?. Recuperala
                </a>
            </div>
        </form>

    </div>
</div>
@endsection
