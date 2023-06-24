@extends("layoutssistema.navbar")
@section("content")



<main class="table">
        <section class="table__header">
            <h1>Administradores</h1>
            <button class="crear_new" onclick="window.location.href='{{ route('administradores.create')}}'">
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
                        <th> Nombres </th>
                        <th> Apellido Paterno </th>
                        <th> Apellido Materno </th>
                        <th> DNI </th>
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
                    
                    @foreach ($administradores as $administrador)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $administrador->nombres }}</td>
                        <td>{{ $administrador->ape_paterno }}</td>
                        <td>{{ $administrador->ape_materno }}</td>
                        <td>{{ $administrador->celular }}</td>
                        <td>{{ $administrador->dni }}</td>
                        <td>{{ $administrador->f_nacimiento }}</td>
                        <td>{{ $administrador->sexo }}</td>
                        <td>
                            @if ($administrador->estado == 1)
                                <!-- <button type="button" style='background-color:#99f6c3;padding:8px 5px 8px 5px; color:#000;'>Activo</button> -->
                                <button class='button_1'> Activo </button>
                                @else
                                <!-- <button type="button" style='background-color:#c94444;padding:8px 5px 8px 5px; color:#fff;'>Inactivo</button> -->
                                <button class='button_2'> Inactivo </button>
                            @endif
                        </td>
                        <td>{{ $administrador->created_at }}</td>
                        <td>{{ $administrador->updated_at }}</td>
                        <td>
                            <!-- <a type="button" class="btn btn-light" href="{{ route('administradores.edit', ['id' => $administrador->id_administrador]) }}">Editar</a><br>
                            <a type="button" style="margin-top:10px;" class="btn btn-light delete-administrador" href="#" data-administrador-id="{{ $administrador->id_administrador }}">Eliminar</a> -->
                            <button class='activar_b' onclick="window.location.href='{{ route('administradores.edit', ['id' => $administrador->id_administrador]) }}'"> EDITAR </button><br>
                            <button class='delete-administrador eliminar_b' data-administrador-id="{{ $administrador->id_administrador }}"> ELIMINAR </button>
                        </td>
                    </tr>

                    @endforeach
                    
                </tbody>
            </table>
        </section>
    </main>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const deleteLinks = document.querySelectorAll('.delete-administrador');

        deleteLinks.forEach(function(link) {
            link.addEventListener('click', function(event) {
                event.preventDefault();

                const administradorId = this.getAttribute('data-administrador-id');
                Swal.fire({
                    title: '¿Estás seguro?',
                    text: 'Esta acción eliminará el administrador',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Eliminar',
                    cancelButtonText: 'Cancelar'
                }).then((result) => {
                    if (result.isConfirmed) {

                        fetch("{{ route('administradores.destroy', ['id' => 'ADMINISTRADOR_ID']) }}".replace('ADMINISTRADOR_ID', administradorId), {
                            method: 'DELETE',
                            headers: {
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                            }
                        }).then(function(response) {
                            if (response.ok) {
                                window.location.href = "{{ route('administradores.index') }}";
                            } else {
                            }
                        });
                        
                        window.location.href = "{{ route('administradores.index') }}";

                    }
                });
            });
        });
    });
</script>



@endsection
