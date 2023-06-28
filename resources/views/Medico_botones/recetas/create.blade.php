@extends('layoutssistema.navbar')
@section('content')


        
<link rel="stylesheet" href="{{ asset('css/Recepcionista.css') }}">
<div class="login-box">
    <p>Nueva Receta</p>
    <form action="{{ route('recetas.store')}}" method="POST">
        @csrf
        <div class='contenedor_flex'>
            <div class="user-box">
                <input required="" name="diagnostico" type="text">
                <label>Diagnostico</label>
            </div>
            <div class="user-box">
                <input required="" name="terapia" type="text">
                <label>Terapias</label>
            </div>
        </div>
        <div class='contenedor_flex'>
            <div class="user-box">
                <input required="" name="examenes" type="text">
                <label>Examenes</label>
            </div>
            <div class="user-box">
                <input required="" name="medicinas" type="text">
                <label>Medicinas</label>
            </div>
        </div>
        <div class='contenedor_flex'>
            <div class="user-box">
                <input required="" name="recomendacion" type="text">
                <label>Recomendacion</label>
            </div>
            <div class="user-box">
                <input required="" name="prescripcion" type="text">
                <label>Prescripcion</label>
            </div>
        </div>

        <div class='contenedor_flex'>
            <div class="user-box">
            <textarea name="comentario" id="" cols="50" rows="5" placeholder="Se solicita"></textarea>
                <label  style="top:-30px">Comentario</label>
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
        {{-- <div class='contenedor_flex'>
            <div class="user-box">
                <select name="medico" id="id_medico">
                    <option value="">Medico</option>
                    @foreach ($medicos as $medico)
                        <option value="{{ $medico->id_medico }}">{{ $medico->nombres }}</option>
                    @endforeach
                </select>
            </div> --}}
        </div>
    </form>
</div>
@endsection