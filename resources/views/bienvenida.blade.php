@extends('layouts.app')
@section('content')
<div class="container d-flex align-items-center justify-content-center" style="min-height: 80vh;">
    <div class="card p-4" style="width: 20rem; margin-top: auto; margin-bottom: auto;">
        <div class="text-center">
        </div>
        <h1 class="text-center">Iniciar Sesión</h1>
        <form action="/login" method="post">
            @csrf
            <div class="form-group">
                <label for="email">Usuario de Inicio de Sesión:</label>
                <br>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Contraseña:</label>
                <br>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="form-group mt-3">
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
                </div>
            </div>
            
        </form>
    </div>
</div>
@endsection


