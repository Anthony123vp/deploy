@extends("layoutssistema.navbar")
@section("content")



<main class="table">
        <section class="table__header">
            <h1>Recepcionistas</h1>
            <!-- <a class="btn" href="{{ route('recepcionistas.create')}}">CREAR</a> -->
            <button class="crear_new" onclick="window.location.href='{{ route('recepcionistas.create')}}'">
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

                    @php
                        $id = 1;
                    @endphp
                    
                    @foreach ($recepcionistas as $recepcionista)
                    <tr>
                        <td>{{ $id }}</td>
                        <td>{{ $recepcionista->nombres }}</td>
                        <td>{{ $recepcionista->ape_paterno }}</td>
                        <td>{{ $recepcionista->ape_materno }}</td>
                        <td>{{ $recepcionista->celular }}</td>
                        <td>{{ $recepcionista->dni }}</td>
                        <td>{{ $recepcionista->f_nacimiento }}</td>
                        <td>{{ $recepcionista->sexo }}</td>
                        <td>
                            @if ($recepcionista->estado == 1)
                                <button class='button_1'> Activo </button>
                                @else
                                <button class='button_2'> Inactivo </button>
                            @endif
                        </td>
                        <td>{{ $recepcionista->created_at }}</td>
                        <td>{{ $recepcionista->updated_at }}</td>
                        <td>
                            <!-- <a type="button" class="btn btn-light" href="{{ route('recepcionistas.edit', ['id' => $recepcionista->id_recepcionista]) }}">Editar</a><br>
                            <a type="button" style="margin-top:10px;" class="btn btn-light delete-recepcionista" href="#" data-recepcionista-id="{{ $recepcionista->id_recepcionista }}">Eliminar</a>ç -->
                            <button class='activar_b' onclick="window.location.href='{{ route('recepcionistas.edit', ['id' => $recepcionista->id_recepcionista]) }}'"> EDITAR </button><br>
                            <button class='delete-recepcionista eliminar_b' data-recepcionista-id="{{ $recepcionista->id_recepcionista }}"> ELIMINAR </button>
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
        const deleteLinks = document.querySelectorAll('.delete-recepcionista');

        deleteLinks.forEach(function(link) {
            link.addEventListener('click', function(event) {
                event.preventDefault();

                const recepcionistaId = this.getAttribute('data-recepcionista-id');
                Swal.fire({
                    title: '¿Estás seguro?',
                    text: 'Esta acción eliminará el recepcionista',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Eliminar',
                    cancelButtonText: 'Cancelar'
                }).then((result) => {
                    if (result.isConfirmed) {

                        fetch("{{ route('recepcionistas.destroy', ['id' => 'RECEPCIONISTA_ID']) }}".replace('RECEPCIONISTA_ID', recepcionistaId), {
                            method: 'DELETE',
                            headers: {
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                            }
                        }).then(function(response) {
                            if (response.ok) {
                                window.location.href = "{{ route('recepcionistas.index') }}";
                            } else {
                            }
                        });
                        
                        window.location.href = "{{ route('recepcionistas.index') }}";

                    }
                });
            });
        });
    });
</script>



@endsection
