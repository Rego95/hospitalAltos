@extends('layouts.plantilla')
@section('title','Contactanos')
@section('content')
<h1>Dejanos tu mensaje</h1>

<form action="{{ route('contactanos.store') }}" method="POST">

    @csrf
    <label>
        Nombre:
        <br>
        <input type="text" name="name">
    </label>
    <br>
    @error('name')
        <p><strong>{{ $message }}</strong></p>
    @enderror
    <label>
        Correo:
        <br>
        <input type="text" name="correo">
    </label>
    <br>
    @error('correo')
        <p><strong>{{ $message }}</strong></p>
    @enderror
    <label>
        Mensaje:
        <textarea name="mensaje" cols="30" rows="10"></textarea>
    </label>
    <br>
    @error('mensaje')
        <p><strong>{{ $message }}</strong></p>
    @enderror
    <button type="submit">Enviar Correo</button>
</form>

@if(session('info'))
    <script>
        alert("{{ session('info') }}")
    </script>
@endif
@endsection