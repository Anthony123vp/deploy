@extends("layoutssistema.navbar")
@section("content")



<main class="table">
        <section class="table__header">
            <h1>Recepcionistas</h1>
            <a class="btn" href="{{ route('recepcionistas.create')}}">CREAR</a>
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
                        <th> Nº <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Nombres <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Apellido Paterno <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Apellido Materno <span class="icon-arrow">&UpArrow;</span></th>
                        <th> DNI <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Celular <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Fecha de Nacimiento <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Sexo <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Estado <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Fecha de Creación <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Fecha de Actualización <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Acciones <span class="icon-arrow">&UpArrow;</span></th>
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
                                <button type="button" style='background-color:#99f6c3;padding:8px 5px 8px 5px; color:#000;'>Activo</button>
                                @else
                                <button type="button" style='background-color:#c94444;padding:8px 5px 8px 5px; color:#fff;'>Inactivo</button>
                            @endif
                        </td>
                        <td>{{ $recepcionista->created_at }}</td>
                        <td>{{ $recepcionista->updated_at }}</td>
                        <td>
                            <a type="button" class="btn btn-light" href="{{ route('recepcionistas.edit', ['id' => $recepcionista->id_recepcionista]) }}">Editar</a><br>
                            <a type="button" style="margin-top:10px;" class="btn btn-light delete-recepcionista" href="#" data-recepcionista-id="{{ $recepcionista->id_recepcionista }}">Eliminar</a>

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
