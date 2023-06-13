@extends("layoutssistema.navbar")
@section("content")



<main class="table">
        <section class="table__header">
            <h1>USUARIOS</h1>
            <a class="btn" href="{{ route('usuarios.create')}}">CREAR</a>
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
                        <th> Id <span class="icon-arrow">&UpArrow;</span></th>
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
                        <td>{{ $usuario->email }}</td>
                        <td>{{ $usuario->password_1 }}</td>
                        <td>{{ $usuario->password_2 }}</td>
                        <td>{{ $usuario->estado }}</td>
                        <td>{{ $usuario->created_at }}</td>
                        <td>{{ $usuario->updated_at }}</td>
                        <td>
                            <!-- <a href="{{ asset('/nuevo_usuario')}}">Crear Usuario</a><br> -->
                            <a href="{{ route('usuarios.edit', ['id' => $usuario->id_usuarios]) }}">Editar Usuario</a><br>
                            <a href="{{ route('usuarios.edit2', ['id' => $usuario->id_usuarios]) }}">Eliminar Usuario</a><br>
                        </td>
                    </tr>
                    @php
                        $id++;
                    @endphp

                    @endforeach
                    <!-- <tr>
                        <td> 1 </td>
                        <td> <img src="images/Zinzu Chan Lee.jpg" alt="">Zinzu Chan Lee</td>
                        <td> Seoul </td>
                        <td> 17 Dec, 2022 </td>
                        <td>
                            <p class="status delivered">Delivered</p>
                        </td>
                        <td> <strong> $128.90 </strong></td>
                    </tr> -->
                    
                </tbody>
            </table>
        </section>
    </main>


@endsection
