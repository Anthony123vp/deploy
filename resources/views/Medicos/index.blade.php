@extends("layoutssistema.navbar")
@section("content")



<main class="table">
        <section class="table__header">
            <h1>Medicos</h1>
            <button class="crear_new" onclick="window.location.href='{{ route('medicos.create')}}'">
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
                        <th> Especialidad </th>
                        <th> Celular </th>
                        <th> Fecha de Nacimiento </th>
                        <th> Sexo </th>
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
                    
                    @foreach ($medicos as $medico)
                    <tr>
                        <td>{{ $id }}</td>
                        <td>{{ $medico->nombres }}</td>
                        <td>{{ $medico->ape_paterno }}</td>
                        <td>{{ $medico->ape_materno }}</td>
                        <td>{{ $medico->dni }}</td>
                        <td><button type="button" class='boton_especialidad'>{{ $medico->especialidad->nombre }}</button></td>
                        <td>{{ $medico->celular }}</td>
                        <td>{{ $medico->f_nacimiento }}</td>
                        <td>{{ $medico->sexo }}</td>
                        <td>
                            @if ($medico->estado == 1)
                                <!-- <button type="button" style='background-color:#99f6c3;padding:8px 5px 8px 5px; color:#000;'>Activo</button> -->
                                <button class='button_1'> Activo </button>
                                @else
                                <!-- <button type="button" style='background-color:#c94444;padding:8px 5px 8px 5px; color:#fff;'>Inactivo</button> -->
                                <button class='button_2'> Inactivo </button>
                            @endif
                        </td>
                        <td>{{ $medico->created_at }}</td>
                        <td>{{ $medico->updated_at }}</td>
                        <td>
                            <!-- <a type="button" class="btn btn-light" href="{{ route('medicos.edit', ['id' => $medico->id_medico]) }}">Editar</a><br>
                            <a type="button" style="margin-top:10px;" class="btn btn-light delete-medico" href="#" data-medico-id="{{ $medico->id_medico }}">Eliminar</a> -->
                            <button class='activar_b' onclick="window.location.href='{{ route('medicos.edit', ['id' => $medico->id_medico]) }}'"> EDITAR </button><br>
                            <button class='delete-medico eliminar_b' data-medico-id="{{ $medico->id_medico }}"> ELIMINAR </button>
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
    .boton_especialidad {
        background-color:#345B63;
        color:#fff;
        outline: 4px groove #345B63;
        outline-offset: 1px;
    }
</style>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const deleteLinks = document.querySelectorAll('.delete-medico');

        deleteLinks.forEach(function(link) {
            link.addEventListener('click', function(event) {
                event.preventDefault();

                const medicoId = this.getAttribute('data-medico-id');
                Swal.fire({
                    title: '¿Estás seguro?',
                    text: 'Esta acción eliminará el medico',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Eliminar',
                    cancelButtonText: 'Cancelar'
                }).then((result) => {
                    if (result.isConfirmed) {

                        fetch("{{ route('medicos.destroy', ['id' => 'MEDICO_ID']) }}".replace('MEDICO_ID', medicoId), {
                            method: 'DELETE',
                            headers: {
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                            }
                        }).then(function(response) {
                            if (response.ok) {
                                window.location.href = "{{ route('medicos.index') }}";
                            } else {
                            }
                        });
                        
                        window.location.href = "{{ route('medicos.index') }}";

                    }
                });
            });
        });
    });
</script>



@endsection
