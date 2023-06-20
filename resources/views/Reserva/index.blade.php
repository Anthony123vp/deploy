@extends("layoutssistema.navbar")
@section("content")


<main class="table">
        <section class="table__header">
            <h1>Reservas</h1>
            <a class="btn" href="{{ route('reservas.create')}}">CREAR</a>
            <div class="input-group">
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
                        <th> Nº <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Paciente <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Especialidad <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Servicio <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Medico <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Fecha <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Hora <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Consultorio <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Estado <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Acciones <span class="icon-arrow">&UpArrow;</span></th>
                    </tr>
                </thead>
                <tbody>

        
                   
                    
                    @foreach ($reservas as $reserva)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $reserva->dni }}</td>
                            <td>{{ $reserva->especialidad }}</td>
                            <td>{{ $reserva->servicio}}</td>
                            <td>{{ $reserva->medico }}</td>
                            <td>{{ $reserva->fecha }}</td>
                            <td>{{ $reserva->hora_inicio }}</td>
                            <td>{{ $reserva->cod_habitacion }}</td>
                            <td>
                                @if ($reserva->estado == 1)
                                
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
                    @endforeach
                    
                  
                </tbody>
            </table>
        </section>
    </main>

@endsection
