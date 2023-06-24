@extends("layoutssistema.navbar")
@section("content")



<main class="table">
        <section class="table__header">
            <h1>Especialidades</h1>
            <button class="crear_new" onclick="window.location.href='{{ route('especialidades.create')}}'">
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
                        <th> Nombre Rol </th>
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
                    
                    @foreach ($especialidades as $especialidad)
                    <tr>
                        <td>{{ $id }}</td>
                        <td><button type="button" class='boton_especialidad'>{{ $especialidad->nombre }}</button></td>
                        <td>
                            @if ($especialidad->estado == 1)
                                <!-- <button type="button" style='background-color:#99f6c3;padding:8px 5px 8px 5px; color:#000;'>Activo</button> -->
                                <button class='button_1'> Activo </button>
                                @else
                                <!-- <button type="button" style='background-color:#c94444;padding:8px 5px 8px 5px; color:#fff;'>Inactivo</button> -->
                                <button class='button_2'> Inactivo </button>
                            @endif
                        </td>
                        <td>{{ $especialidad->created_at }}</td>
                        <td>{{ $especialidad->updated_at }}</td>
                        <td>
                            <!-- <a type="button" class="btn btn-light" href="{{ route('especialidades.edit', ['id' => $especialidad->id_especialidad]) }}">Editar</a><br>
                            <a type="button" style="margin-top:10px;" class="btn btn-light delete-especialidad" href="#" data-especialidad-id="{{ $especialidad->id_especialidad }}">Eliminar</a> -->
                            <button class='activar_b' onclick="window.location.href='{{ route('especialidades.edit', ['id' => $especialidad->id_especialidad]) }}'"> EDITAR </button><br>
                            <button class='delete-especialidad eliminar_b' data-especialidad-id="{{ $especialidad->id_especialidad }}"> ELIMINAR </button>
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
        text-align:center;
        }
    </style>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const deleteLinks = document.querySelectorAll('.delete-especialidad');

        deleteLinks.forEach(function(link) {
            link.addEventListener('click', function(event) {
                event.preventDefault();

                const especialidadId = this.getAttribute('data-especialidad-id');
                Swal.fire({
                    title: '¿Estás seguro?',
                    text: 'Esta acción eliminará el especialidad',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Eliminar',
                    cancelButtonText: 'Cancelar'
                }).then((result) => {
                    if (result.isConfirmed) {

                        fetch("{{ route('especialidades.destroy', ['id' => 'ESPECIALIDAD_ID']) }}".replace('ESPECIALIDAD_ID', especialidadId), {
                            method: 'DELETE',
                            headers: {
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                            }
                        }).then(function(response) {
                            if (response.ok) {
                                window.location.href = "{{ route('especialidades.index') }}";
                            } else {
                            }
                        });
                        
                        window.location.href = "{{ route('especialidades.index') }}";

                    }
                });
            });
        });
    });
</script>
@endsection
