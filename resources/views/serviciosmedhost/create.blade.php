@extends("layoutssistema.navbar")
@section("content")
<link rel="stylesheet" href="{{ asset('css/serviciosmedhost.css') }}">
<!-- <main class='table'> -->
<div class="login-box">
    <p>Nuevo Servicio Exacto</p>
    <form action="{{ route('serviciosmedhost.store')}}" method="POST">
        @csrf
        <div class="user-box">
        <select name="id_servicio" id="id_servicio">
            <option value="">Servicio</option>
            @foreach ($servicios as $servicio)
                <option value="{{ $servicio->id_servicio }}">{{ $servicio->nombre }}</option>
            @endforeach
        </select>
        </div>
        <div class="user-box">
        <select name="id_especialidad" id="id_especialidad">
            <option value="">Especialidad</option>
            @foreach ($especialidades as $especialidad)
                <option value="{{ $especialidad->id_especialidad }}">{{ $especialidad->nombre }}</option>
            @endforeach
        </select>
        </div>
        <div class="user-box">
        <input required="" name="nombre" type="text">
        <label>Nombre Servicio Exacto</label>
        </div>
        <div class="user-box">
        <input required="" name="precio" type="number" step='any'>
        <label>Precio Servicio Exacto</label>
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
<!-- </main> -->
<style>
  

</style>

@endsection
