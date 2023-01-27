@extends('layouts.app',['bgBody' => '#f0f0f0'])
@section('css')
<link href="{{ asset('css') }}/style-auth.css" rel="stylesheet">
@endsection
@section('content')
<div class="container shadow " style="width: 30%; margin-top: 8rem">
    @if (session('status'))
    <div class="alert alert-danger mt-2" role="alert">
        {{ session('status') }}
    </div>
    @endif

    <div class="row bg-light">
        <div class="text-center {{ session('status') ? 'mt-1' : 'mt-3'}}">
            <h4> Registro de Usuarios</h4>
        </div>
        <form class="form-auth" method="POST" action="{{ route('register') }}">
            @csrf
            <div class="mb-3">
                <i class="fa fa-user pt-2-5 ps-2" aria-hidden="true"></i>
                <input class="form-auth__input" type="text" value="{{ old('name') }}" required name="name"
                    placeholder="Nombre de Usuario">
                @error('name')
                <span class="error-message mb-5"> {{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <i class="fa fa-envelope pt-2-5 ps-2" aria-hidden="true"></i>
                <input class="form-auth__input" type="email" value="{{ old('email') }}" required name="email"
                    placeholder="e-mail">
                @error('email')
                <span class="error-message"> {{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <i class="fas fa-lock pt-2-5 ps-2    "></i>
                <input class="form-auth__input" type="password" name="password" required placeholder="Password">
            </div>
            <div>
                <i class="fas fa-lock pt-2-5 ps-2"></i>
                <input class="form-auth__input" type="password" name="password_confirmation" required
                    placeholder="Confirmar Password">
                @error('password')
                <span class="error-message mb-5"> {{ $message }}</span>
                @enderror
            </div>

            <div class="d-grid mt-4">
                <button type="submit" class="form-auth__button-submit">Registrarse </button>
            </div>
        </form>

    </div>
</div>
@endsection
