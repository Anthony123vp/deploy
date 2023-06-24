@extends('layoutssistema.navbar')
@section('content')


        
    <link rel="stylesheet" href="{{ asset('css/Recepcionista.css') }}">
    <div class="login-box">
        <p>Nueva Receta</p>
        <form action="{{ route('citas_crear.create')}}" method="POST">
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
                    <input required="" name="consultorio" type="text">
                    <label>Consultorio</label>
                </div>
                <div class="user-box">
                    <input required="" name="discapacidad" type="text">
                    <label>Discapacidad</label>
                </div>
            </div>
            <div class='contenedor_flex'>
                <div class="user-box">
                    <input required="" name="medicamentos" type="text">
                    <label>Medicamentos</label>
                </div>
                <div class="user-box">
                    <input required="" name="terapias" type="text">
                    <label>Terapias</label>
                </div>
            </div>

            <div class='contenedor_flex'>
                <div class="user-box">
                <textarea name="comentario" id="" cols="50" rows="5" placeholder="Se solicita"></textarea>
                    <label  style="top:-30px">Prescripcion</label>
                </div>
                
                <div class="user-box">
                    <input required="" name="diagnostico" type="text">
                    <label>Diagnostico</label>
                </div>
            </div>
            <div class='contenedor_flex'>
                <div class="user-box">
                    <select name="id_medico" id="id_medico">
                        <option value="">Medico</option>
                        @foreach ($medicos as $medico)
                            <option value="{{ $medico->id_medico }}">{{ $medico->nombres }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="user-box">
                    <input required="" name="fecha" type="date">
                    <label  style="top:-25px">Fecha de la receta</label>
                </div>
            </div>
            
            <button class='boton_send' type="submit" style="margin-left: 610px ">
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