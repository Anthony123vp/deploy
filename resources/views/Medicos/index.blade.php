@extends('layoutssistema.navbar')
@section('content')

<main class="table">
        <section class="table__header">
            <h1>Medicos</h1>
            <div class="input-group">
                <input type="search" placeholder="Search Data...">
                <img src="images/search.png"  alt="">
            </div>
            <div class="export__file">
                <label for="export-file" class="export__file-btn" title="Export File"></label>
                <input type="checkbox" id="export-file">
                <div class="export__file-options">
                    <label>Export As &nbsp; &#10140;</label>
                    <label for="export-file" id="toPDF" onclick="generarPDF(event)">PDF <img src="images/pdf.png" alt=""></label>

                    <label for="export-file" id="toEXCEL">EXCEL <img src="images/excel.png" alt=""></label>
                    
                </div>
            </div>
        </section>
        <section class="table__body">
            <table class="table" id="table">
                <thead>
                    <tr>
                        <th> Id </th>
                        <th>Nombre</th>
                        <th> Apellido Paterno</th>
                        <th> Apellido Materno</th>
                        <th>Celular</th>
                        <th>DNI</th>
                        <th>Fecha Na.</th>
                        <th> Especialidad</th>
                        <th> Estado</th>
                        <th> Tiempo Creado</th>
                        <th> Tiempo Actualizado</th>
                        <th>Actualizar</th>
                    </tr>
                </thead>
                <tbody class="tbody" id="tbody">
                    <tr>
                        <td> 1 </td>
                        <td>Aaron</td>
                        <td>Mendez </td>
                        <td>Senosain</td>
                        <td>Programador Senior</td>
                        <td>1</td>
                        <td>17:25pm</td>
                        <td>0</td>
                        <td>1</td>
                        <td>18:01</td>
                        <td>0</td>
                        <td><button class="edit">Editar</button>
                            <button class="delete">Eliminar</button></td>
                    </tr>
                    
                </tbody>
            </table>
        </section>
    </main>
@endsection