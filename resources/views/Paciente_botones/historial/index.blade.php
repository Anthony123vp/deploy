@extends('layoutssistema.navbar')
@section('linkcss')
<link rel="stylesheet" href="/css/citas_paciente.css">
@endsection
@section('content')
    <div class="citas_pendientes">
      <div class="cita">
        <div class="informacion">
          <h3>Cita_Normal</h3>
          <p><b>Medico:</b>Juan Solorzano Isla</p>
          <strong>Miercoles,2 de marzo de 2022</strong>
          <p><b>Consultorio:</b>A512</p>
        </div>
        <div class="botones">
          <a href="{{ route('citas_crear.create') }}" class="resultados">Nueva Cita</a>
          <a href="" class="resultados">Ver Resultados</a>
          <a href="{{ route('citas_editar.edit') }}" class="resultados">Editar</a>
        </div>
      </div>     
    </div>
@endsection