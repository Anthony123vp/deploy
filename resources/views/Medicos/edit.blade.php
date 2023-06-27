@extends('layoutssistema.navbar')
@section('content')


        
    <link rel="stylesheet" href="{{ asset('css/Recepcionista.css') }}">
    <div class="login-box">
        <p>Editar Medico</p>
        <form action="{{ route('medicos.update', ['id' => $medico->id_medico]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class='contenedor_flex'>
                <div class="user-box">
                    <input  value="{{ $medico->nombres }}"  required="" name="nombres" type="text">
                    <label>Nombres</label>
                </div>
                <div class="user-box">
                    <input  value="{{ $medico->ape_paterno }}"  required="" name="ape_paterno" type="text">
                    <label>Apellido Paterno</label>
                </div>
            </div>
            <div class='contenedor_flex'>
                <div class="user-box">
                    <input value="{{ $medico->ape_materno }}" required="" name="ape_materno" type="text">
                    <label>Apellido Materno</label>
                </div>
                <div class="user-box">
                    <input  value="{{ $medico->dni }}" required="" name="dni" type="number">
                    <label>DNI</label>
                </div>
            </div>
            <div class='contenedor_flex'>
                <div class="user-box">
                    <input value="{{ $medico->celular }}" required="" name="celular" type="number">
                    <label>Celular</label>
                </div>
                <div class="user-box">
                    <input value="{{ $medico->f_nacimiento }}" required="" name="f_nacimiento" type="date">
                    <label>Fecha Nacimiento</label>
                </div>
            </div>
            <div class='contenedor_flex'>
                <div class="user-box">
                    <select name="sexo" id="sexo">
                        <option style='#ccc' value="">  SEXO</option>
                        <option value="M" {{ $medico->sexo == 'M' ? 'selected' : '' }}>Masculino</option>
                        <option value="F" {{ $medico->sexo == 'F' ? 'selected' : '' }}>Femenino</option>
                        <option value="X" {{ $medico->sexo == 'X' ? 'selected' : '' }}>Prefiero no decirlo</option>
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
            <div class='contenedor_flex'>
                <div class="user-box">
                    <select name="id_especialidad" id="id_especialidad">
                        <option value="">ESPECIALIDADES</option>
                        @foreach ($especialidades as $especialidad)
                            <option value="{{ $especialidad->id_especialidad }}" {{ $medico->id_especialidad == $especialidad->id_especialidad ? 'selected' : '' }}>{{ $especialidad->nombre }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="user-box">
                    <select name="id_consultorio" id="id_consultorio">
                        <option value="">CONSULTORIO</option>
                    </select>
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

@section('scripts')
<script>
    const id_especialidad = document.getElementById('id_especialidad');
    const id_consultorio = document.getElementById('id_consultorio');
    let medico = {!! json_encode($medico, JSON_HEX_TAG) !!};

    window.onload = async () => {
        const response = await fetch(`/api/Consultorios/${id_especialidad.value}/especialidad`);
		const data = await response.json();
		let option = ``;
		data.forEach(element=>{
				if(element.id_consultorio==medico["id_consultorio"]){
			        option= option + `<option selected value="${element.id_consultorio}">${element.cod_habitacion}</option>`;
				}else{
			        option= option + `<option value="${element.id_consultorio}">${element.cod_habitacion}</option>`;
				}
			});
		id_consultorio.innerHTML = option;
    }    


    id_especialidad.addEventListener('change',async(e)=>{
        const response = await fetch(`/api/Consultorios/${e.target.value}/especialidad`);
		const data = await response.json();
		let option = ``;
		data.forEach(element=>{
				if(element.id_consultorio==medico["id_consultorio"]){
			        option= option + `<option selected value="${element.id_consultorio}">${element.cod_habitacion}</option>`;
				}else{
			        option= option + `<option value="${element.id_consultorio}">${element.cod_habitacion}</option>`;
				}
			});
		id_consultorio.innerHTML = option;
    });
</script>
@endsection