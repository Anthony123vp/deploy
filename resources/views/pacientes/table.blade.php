@extends('layoutssistema.navbar')
@section('content')

<main class="table">
        <section class="table__header">
            <h1>Pacientes</h1>
            <div class="input-group">
                <input type="search" id="search-input" placeholder="Search Data...">
                <img src="images/search.png" alt="">
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
                        <th>Apellido Paterno</th>
                        <th> Apellido Materno</th>
                        <th> Celular</th>
                        <th> DNI</th>
                        <th>Fecha Na.</th>
                        <th>Seguro</th>
                        <th> Estado</th>
                        <th> Tiempo Creado</th>
                        <th> Tiempo Actualizado</th>
                        <th>Actualizar</th>
                    </tr>
                </thead>
                <tbody class="tbody" id="tbody">
                    <tr>
                        <td> 1 </td>
                        <td> <img src="images/Zinzu Chan Lee.jpg" alt="">Zinzu Chan Lee</td>
                        <td> Odontologia </td>
                        <td>Oliver Aaron Mendez Senosain</td>
                        <td> 17 Dec, 2022 </td>
                        <td>4:00pm</td>
                        <td>Dientes relucientes</td>
                        <td>$/.500</td>
                        <td>1</td>
                        <td>17:25pm</td>
                        <td>0</td>
<td><button class="edit"><a href=" {{route('editmedico')}}">Editar</a></button>
                            <button class="delete">Eliminar</button></td>
                    </tr>
                    
                </tbody>
            </table>
        </section>
    </main>
    <script src="https://unpkg.com/xlsx/dist/xlsx.full.min.js"></script>
@endsection