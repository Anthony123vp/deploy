@extends('layoutssistema.navbar')
@section('linkcss')
<link rel="stylesheet" href="/css/citas_paciente.css">
@endsection
@section('content')
    <div class="citas_pendientes">

    @foreach ($citas as $cita)
    <div class="cita">
        <div class="informacion">
          <h3>{{$cita->especialidad}}:{{ $cita->servicio}}</h3>
          <p><b>Medico:</b>{{$cita->medico}}</p>
          <strong>{{$cita->fecha}} : {{$cita->hora_inicio}}</strong>
          <p><b>Consultorio:</b>A512</p>
        </div>
        <div class="botones">
          <div class="estado">PENDIENTE</div>
        </div>
    </div>   
    @endforeach

    </div>
@endsection