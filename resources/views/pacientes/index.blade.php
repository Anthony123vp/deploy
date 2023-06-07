@foreach ($pacientes as $paciente)
    <p>{{ $paciente->nombres }}</p>
    <p>{{ $paciente->apellidos_paternos }}</p>
    <p>pacientes -----</p>
@endforeach