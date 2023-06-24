@extends('layoutssistema.navbar')
@section('content')

    <link rel="stylesheet" href="{{ asset('css/Recepcionista.css') }}">
    <div class="login-box">
        <p>Nuevo Administrador</p>
        <form action="{{ route('administradores.store')}}" method="POST">
            @csrf
            <div class='contenedor_flex'>
                <div class="user-box">
                    <input required="" name="nombres" type="text">
                    <label>Nombres</label>
                </div>
                <div class="user-box">
                    <input required="" name="ape_paterno" type="text">
                    <label>Apellido Paterno</label>
                </div>
            </div>
            <div class='contenedor_flex'>
                <div class="user-box">
                    <input required="" name="ape_materno" type="text">
                    <label>Apellido Materno</label>
                </div>
                <div class="user-box">
                    <input required="" name="dni" type="number">
                    <label>DNI</label>
                </div>
            </div>
            <div class='contenedor_flex'>
                <div class="user-box">
                    <input required="" name="celular" type="number">
                    <label>Celular</label>
                </div>
                <div class="user-box">
                    <input required="" name="f_nacimiento" type="date">
                    <label>Fecha Nacimiento</label>
                </div>
            </div>
            <div class='contenedor_flex'>
                <div class="user-box">
                    <select name="sexo" id="sexo">
                        <option style='#ccc' value="">  SEXO</option>
                        <option value="M">Masculino</option>
                        <option value="F">Femenino</option>
                        <option value="X">Prefiero no decirlo</option>
                    </select>
                </div>
                <div class="user-box">
                <input required="" name="email" type="email">
                <label>Email</label>
                </div>
            </div>
            <div class='contenedor_flex'>
                <div class="user-box">
                <input required="" name="password" type="password" >
                <label>Password</label>
                </div>
                <div class="user-box">
                <input required="" name="password_2" type="password" >
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