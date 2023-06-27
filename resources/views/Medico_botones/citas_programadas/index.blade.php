@extends('layoutssistema.navbar')
@section('linkcss')
<link rel="stylesheet" href="/css/citas_paciente.css">
@endsection
@section('content')
    <div class="citas_pendientes">

    @foreach ($citas as $cita)
    <div class="cita">
        <div class="informacion">
          <h3>{{ $cita->servicio}}:<b>{{$cita->serv_exacto}}</b></h3>
          <p><b>Paciente:</b>{{$cita->paciente}}</p>
          <strong>{{$cita->fecha}} : {{$cita->hora_inicio}}</strong>
          <p><b>Consultorio:</b>{{$cita->cod_habitacion}}</p>
        </div>
        <div class="botones">
          <!-- <a href="" class="atender">ATENDER</a> -->
          <button class='activar_b' onclick="window.location.href='{{ route('citas_programadas.edit', ['id' => $cita->id_paciente, 'id2' => $cita->id_reserva]) }}'"> ATENDER </button><br>
        </div>
    </div>   
    @endforeach

    </div>
@endsection