@extends("layoutssistema.navbar")
@section("content")



<main class="table">
        <section class="table__header">
            <h1>USUARIOS</h1>
            <!-- <a class="btn" href="{{ route('usuarios.create')}}">CREAR</a> -->
            <div class="input-group">
                <input type="search" placeholder="Search Data...">
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
            <table>
                <thead>
                    <tr>
                        <th> Nº <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Rol <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Email <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Password 1 <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Password 2 <span class="icon-arrow">&UpArrow;</span></th>
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
                    
                    @foreach ($usuarios as $usuario)
                    <tr>
                        <td>{{ $id }}</td>
                        <!-- <td>{{ $usuario->id_rol }}</td> -->
                        <td> {{ $usuario->rol->nombre_rol }}</td>
                        <td>{{ $usuario->email }}</td>
                        <td>{{ $usuario->password }}</td>
                        <td>{{ $usuario->password_2 }}</td>
                        <td>
                            @if ($usuario->estado == 1)
                                <button type="button" style='background-color:#99f6c3;padding:8px 5px 8px 5px; color:#000;'>Activo</button>
                                @else
                                <button type="button" style='background-color:#c94444;padding:8px 5px 8px 5px; color:#fff;'>Inactivo</button>
                            @endif
                        </td>
                        <td>{{ $usuario->created_at }}</td>
                        <td>{{ $usuario->updated_at }}</td>
                        <td>
                            <!-- <a href="{{ asset('/nuevo_usuario')}}">Crear Usuario</a><br> -->
                            <!-- <a href="{{ route('usuarios.edit', ['id' => $usuario->id_user]) }}">Editar Usuario</a><br>
                            <a href="{{ route('usuarios.edit2', ['id' => $usuario->id_user]) }}">Eliminar Usuario</a><br> -->

                            <!-- <a type="button" class="btn btn-light" href="{{ route('usuarios.edit', ['id' => $usuario->id_user]) }}">Editar</a><br> -->
                            <a type="button" style="margin-top:10px;padding-right:100px;" class="btn btn-light activate-usuario" href="#" data-usuario-id="{{ $usuario->id_user }}">ACTIVAR</a><br>
                            <a type="button" style="margin-top:10px;padding-right:100px;" class="btn btn-light delete-usuario" href="#" data-usuario-id="{{ $usuario->id_user }}">INACTIVAR</a>

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
        const deleteLinks = document.querySelectorAll('.delete-usuario');
        const activateLinks = document.querySelectorAll('.activate-usuario');

        activateLinks.forEach(function(link) {
            link.addEventListener('click', function(event) {
                event.preventDefault();

                const usuarioId = this.getAttribute('data-usuario-id');
                Swal.fire({
                    title: '¿Estás seguro?',
                    text: 'Esta acción activara el usuario',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Eliminar',
                    cancelButtonText: 'Cancelar'
                }).then((result) => {
                    if (result.isConfirmed) {

                        fetch("{{ route('usuarios.activate', ['id' => 'USUARIO_ID']) }}".replace('USUARIO_ID', usuarioId), {
                            method: 'PUT',
                            headers: {
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                            }
                        }).then(function(response) {
                            if (response.ok) {
                                window.location.href = "{{ route('usuarios.index') }}";
                            } else {
                            }
                        });
                        
                        window.location.href = "{{ route('usuarios.index') }}";

                    }
                });
            });
        });
        
        deleteLinks.forEach(function(link) {
            link.addEventListener('click', function(event) {
                event.preventDefault();

                const usuarioId = this.getAttribute('data-usuario-id');
                Swal.fire({
                    title: '¿Estás seguro?',
                    text: 'Esta acción eliminará el usuario',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Eliminar',
                    cancelButtonText: 'Cancelar'
                }).then((result) => {
                    if (result.isConfirmed) {

                        fetch("{{ route('usuarios.destroy', ['id' => 'USUARIO_ID']) }}".replace('USUARIO_ID', usuarioId), {
                            method: 'DELETE',
                            headers: {
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                            }
                        }).then(function(response) {
                            if (response.ok) {
                                window.location.href = "{{ route('usuarios.index') }}";
                            } else {
                            }
                        });
                        
                        window.location.href = "{{ route('usuarios.index') }}";

                    }
                });
            });
        });
    });
</script>

@endsection
