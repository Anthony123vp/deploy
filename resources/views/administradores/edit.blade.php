@extends('layoutssistema.navbar')
@section('content')

    <link rel="stylesheet" href="{{ asset('css/Recepcionista.css') }}">
    <div class="login-box">
        <p>Nuevo Administrador</p>
        <form action="{{ route('administradores.update', ['id' => $administrador->id_administrador]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class='contenedor_flex'>
                <div class="user-box">
                    <input  value="{{ $administrador->nombres }}"  required="" name="nombres" type="text">
                    <label>Nombres</label>
                </div>
                <div class="user-box">
                    <input  value="{{ $administrador->ape_paterno }}"  required="" name="ape_paterno" type="text">
                    <label>Apellido Paterno</label>
                </div>
            </div>
            <div class='contenedor_flex'>
                <div class="user-box">
                    <input value="{{ $administrador->ape_materno }}" required="" name="ape_materno" type="text">
                    <label>Apellido Materno</label>
                </div>
                <div class="user-box">
                    <input  value="{{ $administrador->dni }}" required="" name="dni" type="number">
                    <label>DNI</label>
                </div>
            </div>
            <div class='contenedor_flex'>
                <div class="user-box">
                    <input value="{{ $administrador->celular }}" required="" name="celular" type="number">
                    <label>Celular</label>
                </div>
                <div class="user-box">
                    <input value="{{ $administrador->f_nacimiento }}" required="" name="f_nacimiento" type="date">
                    <label>Fecha Nacimiento</label>
                </div>
            </div>
            <div class='contenedor_flex'>
                <div class="user-box">
                    <select name="sexo" id="sexo">
                        <option style='#ccc' value="">  SEXO</option>
                        <option value="M" {{ $administrador->sexo == 'M' ? 'selected' : '' }}>Masculino</option>
                        <option value="F" {{ $administrador->sexo == 'F' ? 'selected' : '' }}>Femenino</option>
                        <option value="X" {{ $administrador->sexo == 'X' ? 'selected' : '' }}>Prefiero no decirlo</option>
                    </select>
                </div>
                <div class="user-box">
                <input value="{{ $usuario->email }}" required="" name="email" type="email">
                <label>Email</label>
                </div>
            </div>
            <div class='contenedor_flex'>
                <div class="user-box">
                <input value="{{ $usuario->password }}" required="" name="password" type="password" >
                <label>Password</label>
                </div>
                <div class="user-box">
                <input value="{{ $usuario->password_2 }}" required="" name="password_2" type="password" >
                <label>Repite Password</label>
                </div>
            </div>
            <button class='boton_send' type="submit">
                <div class="svg-wrapper-1">
                    <div class="svg-wrapper">
                    <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z" fill="currentColor"></path>
                    </svg>
                    </div>
                </div>
                <span>Enviar</span>
            </button>
        </form>
    </div>

@endsection