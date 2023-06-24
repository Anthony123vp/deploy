@extends('layoutssistema.navbar')
@section('content')

<main class="table">
        <section class="table__header">
            <h1>Recetas Medicas</h1>
            <a class="btn" href="{{ route('recetas.create') }}">CREAR</a>
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
                    <label for="export-file" id="toEXCEL">EXCEL <img src="images/excel.png" alt=""></label>
                </div>
            </div>
        </section>
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th> Nº <span class="icon-arrow"></th>
                            <th> Paciente <span class="icon-arrow"></th>
                        <th> DNI <span class="icon-arrow"></th>
                        <th> Terapias <span class="icon-arrow"></th>
                        <th> Examenes <span class="icon-arrow"></th>
                        <th> Medicinas <span class="icon-arrow"></th>
                        <th> Comentario <span class="icon-arrow"></th>
                        <th> Estado <span class="icon-arrow"></th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($recetas as $receta)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $receta->paciente }}</td>
                    <td>{{ $receta->dni }}</td>
                    <td>{{ $receta->terapias}}</td>
                    <td>{{ $receta->examenes }}</td>
                    <td>{{ $receta->medicinas }}</td>
                    <td>{{ $receta->comentario}}</td>
                    <td>
                        @if ($receta->estado == 1)
                        
                            <button type="button" style='background-color:#99f6c3;padding:8px 5px 8px 5px; color:#000;'>Activo</button>
                            @else
                            <button type="button" style='background-color:#c94444;padding:8px 5px 8px 5px; color:#fff;'>Inactivo</button>
                        @endif
                    </td>
                    <td>
                        <a type="button" class="btn" href="#">Editar</a><br>
                        <a type="button" class="btn" href="#">Eliminar</a>

                    </td>
                </tr>
                </tr>
            

                @endforeach
                </tbody>
            </table>
        </section>
    </main>
@endsection