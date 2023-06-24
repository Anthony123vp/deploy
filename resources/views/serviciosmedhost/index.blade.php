@extends("layoutssistema.navbar")
@section("content")
<main class="table">
        <section class="table__header">
            <h1>Servicios Exactos</h1>
            <!-- <a class="btn" href="{{ route('serviciosmedhost.create')}}">CREAR</a> -->
            <button class="crear_new" onclick="window.location.href='{{ route('serviciosmedhost.create')}}'">
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
                    <label for="export-file" id="toJSON">JSON <img src="images/json.png" alt=""></label>
                    <label for="export-file" id="toCSV">CSV <img src="images/csv.png" alt=""></label>
                    <label for="export-file" id="toEXCEL">EXCEL <img src="images/excel.png" alt=""></label>
                </div>
            </div>
        </section>
        <section class="table__body">
            <table id='tabla_admin'>
                <thead>
                    <tr>
                        <th> Nº </th>
                        <th> Servicio </th>
                        <th> Especialidad </th>
                        <th> Servicio Exacto </th>
                        <th> Precio </th>
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
                    
                    @foreach ($servicios_medhost as $servicio_medhost)
                    <tr>
                        <td>{{ $id }}</td>
                        <td> 
                            @if ($servicio_medhost->servicio_especialidad->id_servicio == 1)
                                Cita Médica
                            @elseif ($servicio_medhost->servicio_especialidad->id_servicio == 2)
                                Exámen
                            @elseif ($servicio_medhost->servicio_especialidad->id_servicio == 3)
                                Terapia
                            @endif
                        </td>
                        <td>{{ $servicio_medhost->servicio_especialidad->especialidad->nombre }}</td>
                        <td>{{ $servicio_medhost->nombre }}</td>
                        <td>S/. {{ $servicio_medhost->precio }} </td>
                        <td>
                            @if ($servicio_medhost->estado == 1)
                                <!-- <button type="button" style='background-color:#99f6c3;padding:8px 5px 8px 5px; color:#000;'>Activo</button> -->
                                <button class='button_1'> Activo </button>
                                @else
                                <!-- <button type="button" style='background-color:#c94444;padding:8px 5px 8px 5px; color:#fff;'>Inactivo</button> -->
                                <button class='button_2'> Inactivo </button>
                            @endif
                        </td>
                        <td>{{ $servicio_medhost->created_at }}</td>
                        <td>{{ $servicio_medhost->updated_at }}</td>
                        <td>
                            <!-- <a type="button" class="btn btn-light" href="{{ route('serviciosmedhost.edit', ['id' => $servicio_medhost->id_servicio_medhost]) }}">EDITAR</a><br> -->
                            <!-- <a type="button" style="margin-top:10px;" class="btn btn-light delete-servicio_medhost" href="#" data-servicio_medhost-id="{{ $servicio_medhost->id_servicio_medhost }}">Eliminar</a> -->
                            <button class='activar_b' onclick="window.location.href='{{ route('serviciosmedhost.edit', ['id' => $servicio_medhost->id_servicio_medhost]) }}'"> EDITAR </button><br>
                            <button class='delete-servicio_medhost eliminar_b' data-servicio_medhost-id="{{ $servicio_medhost->id_servicio_medhost }}"> ELIMINAR </button>
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
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const deleteLinks = document.querySelectorAll('.delete-servicio_medhost');

        deleteLinks.forEach(function(link) {
            link.addEventListener('click', function(event) {
                event.preventDefault();

                const servicio_medhostId = this.getAttribute('data-servicio_medhost-id');
                Swal.fire({
                    title: '¿Estás seguro?',
                    text: 'Esta acción eliminará el Servicio exacto',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Eliminar',
                    cancelButtonText: 'Cancelar'
                }).then((result) => {
                    if (result.isConfirmed) {

                        fetch("{{ route('serviciosmedhost.destroy', ['id' => 'SERVICIOEXACTO_ID']) }}".replace('SERVICIOEXACTO_ID', servicio_medhostId), {
                            method: 'DELETE',
                            headers: {
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                            }
                        }).then(function(response) {
                            if (response.ok) {
                                window.location.href = "{{ route('serviciosmedhost.index') }}";
                            } else {
                            }
                        });
                        
                        window.location.href = "{{ route('serviciosmedhost.index') }}";

                    }
                });
            });
        });
    });
</script>



@endsection
