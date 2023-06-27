@extends('layoutssistema.navbar')
@section('linkcss')
<link rel="stylesheet" href="/css/citas_paciente.css">
@endsection
@section('content')
<div class="citas_pendientes">
  @foreach ($citas as  $cita)
        <div class="cita">
          <div class="informacion">
            <h3>{{ $cita->servicio }}</h3>
            <p><b>Medico:</b>{{$cita->medico}}</p>
            <strong>{{$cita->fecha}},{{$cita->hora_inicio}} - {{ $cita->hora_final}}</strong>
            <p><b>Consultorio:</b>{{$cita->cod_habitacion}}</p>
          </div>
          <div class="botones">
            @if ($cita->servicio=='Examen')
              <a href="" class="resultados">Ver Resultados EXAMEN</a>
            @endif
            @if ($cita->servicio=='Cita_Medica')
              <a href="" class="resultados">Ver Resultados CITA MEDICA</a>
            @endif
            @if ($cita->servicio=='Terapia')
              <a href="" class="resultados">Ver Resultados TERAPIA</a>
            @endif
          </div>
        </div>     
  @endforeach
</div>

@endsection