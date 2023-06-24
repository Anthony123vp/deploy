@extends("layoutssistema.navbar")
@section("content")



<main class="table">
        <section class="table__header">
            <h1>Servicios de Especialidades</h1>
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
                        <th> Nombre Servicio </th>
                        <th> Nombre Especialidad </th>
                        <th> Fecha de Creación </th>
                        <th> Fecha de Actualización </th>
                    </tr>
                </thead>
                <tbody>

                    @php
                        $id = 1;
                    @endphp
                    
                    @foreach ($servicios_especialidades as $servicio_especialidad)
                    <tr>
                        <td>{{ $id }}</td>
                        <td><button type="button" class='boton_servicio'>{{ $servicio_especialidad->servicio->nombre }}</button></td>
                        <td><button type="button" class='boton_servicio'>{{ $servicio_especialidad->especialidad->nombre }}</button></td>
                        <td>{{ $servicio_especialidad->created_at }}</td>
                        <td>{{ $servicio_especialidad->updated_at }}</td>
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
        .boton_servicio {
        background-color:#345B63;
        color:#fff;
        outline: 4px groove #345B63;
        outline-offset: 1px;
        text-align:center;
        }
</style>

@endsection
