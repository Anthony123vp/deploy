@extends("layoutssistema.navbar")
@section("content")



<main class="table">
        <section class="table__header">
            <h1>Pacientes</h1>
            <button class="crear_new" onclick="window.location.href='{{ route('pacientes.create')}}'">
                CREAR
            </button>
            <div style='padding:20px;margin-top:30px;' class="input-group">
                <input type="search" placeholder="Buscar Datos...">
                <img src="images/search.png" alt="">
            </div>
            <div class="export__file">
                <label for="export-file" class="export__file-btn" title="Export File"></label>
                <input type="checkbox" id="export-file">
                <div class="export__file-options">
                    <label>Export As &nbsp; &#10140;</label>
                    <label for="export-file" id="toPDF">PDF <img src="images/pdf.png" alt=""></label>
                    <label for="export-file" id="toEXCEL">EXCEL <img src="images/excel.png" alt=""></label>
                </div>
            </div>
        </section>
        <section class="table__body">
            <table id='tabla_admin'>
                <thead>
                    <tr>
                        <th> Nº </th>
                        <th> Nombres </th>
                        <th> Apellido Paterno </th>
                        <th> Apellido Materno </th>
                        <th> DNI </th>
                        <th> Celular </th>
                        <th> Fecha de Nacimiento </th>
                        <th> Sexo </th>
                        <th> Seguro </th>
                        <th> Estado </th>
                        <th> Fecha de Creación </th>
                        <th> Fecha de Actualización </th>
                        <th> Acciones </th>
                    </tr>
                </thead>
                <tbody>

                    @php
                        $id = 1;
                    @endphp
                    
                    @foreach ($pacientes as $paciente)
                    <tr>
                        <td>{{ $id }}</td>
                        <td>{{ $paciente->nombres }}</td>
                        <td>{{ $paciente->ape_paterno }}</td>
                        <td>{{ $paciente->ape_materno }}</td>
                        <td>{{ $paciente->dni }}</td>
                        <td>{{ $paciente->celular }}</td>
                        <td>{{ $paciente->f_nacimiento }}</td>
                        <td>{{ $paciente->sexo }}</td>
                        <td><button type="button" class='boton_seguro'>{{ $paciente->insurance->nombre }}</button></td>
                        <td>
                            @if ($paciente->estado == 1)
                                <!-- <button type="button" style='background-color:#99f6c3;padding:8px 5px 8px 5px; color:#000;'>Activo</button> -->
                                <button class='button_1'> Activo </button>
                                @else
                                <!-- <button type="button" style='background-color:#c94444;padding:8px 5px 8px 5px; color:#fff;'>Inactivo</button> -->
                                <button class='button_2'> Inactivo </button>
                            @endif
                        </td>
                        <td>{{ $paciente->created_at }}</td>
                        <td>{{ $paciente->updated_at }}</td>
                        <td>
                            <!-- <a type="button" class="btn btn-light" href="{{ route('pacientes.edit', ['id' => $paciente->id_paciente]) }}">Editar</a><br>
                            <a type="button" style="margin-top:10px;" class="btn btn-light delete-paciente" href="#" data-paciente-id="{{ $paciente->id_paciente }}">Eliminar</a> -->
                            <button class='activar_b' onclick="window.location.href='{{ route('pacientes.edit', ['id' => $paciente->id_paciente]) }}'"> EDITAR </button><br>
                            <button class='delete-paciente eliminar_b' data-paciente-id="{{ $paciente->id_paciente }}"> ELIMINAR </button>

                        </td>
                    </tr>
                    @php
                        $id++;
                    @endphp

                    @endforeach
                    
                </tbody>
            </table>
        </section>
    </main>
<style>
    .boton_seguro {
        background-color:#345B63;
        color:#fff;
        outline: 4px groove #345B63;
        outline-offset: 1px;
    }
</style>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const deleteLinks = document.querySelectorAll('.delete-paciente');

        deleteLinks.forEach(function(link) {
            link.addEventListener('click', function(event) {
                event.preventDefault();

                const pacienteId = this.getAttribute('data-paciente-id');
                Swal.fire({
                    title: '¿Estás seguro?',
                    text: 'Esta acción eliminará el paciente',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Eliminar',
                    cancelButtonText: 'Cancelar'
                }).then((result) => {
                    if (result.isConfirmed) {

                        fetch("{{ route('pacientes.destroy', ['id' => 'PACIENTE_ID']) }}".replace('PACIENTE_ID', pacienteId), {
                            method: 'DELETE',
                            headers: {
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                            }
                        }).then(function(response) {
                            if (response.ok) {
                                window.location.href = "{{ route('pacientes.index') }}";
                            } else {
                            }
                        });
                        
                        window.location.href = "{{ route('pacientes.index') }}";

                    }
                });
            });
        });
    });
</script>



@endsection
