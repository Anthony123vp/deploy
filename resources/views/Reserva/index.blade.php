@extends("layoutssistema.navbar")
@section("content")


<main class="table">
        <section class="table__header">
            <h1>Reservas</h1>
            <button class="crear_new" onclick="window.location.href='{{ route('reservas.create')}}'">
                CREAR
            </button>
            <div class="input-group">
                <input type="search" placeholder="Buscar Datos...">
                <img src="images/search.png" alt="">
            </div>
            <form action="{{ route('reservas.generateInforme') }}" method="POST" id="GenerateHistory">
            @csrf
                <button class="crear_new" type="Submit">
                    <i class='bx bx-history bx-tada' style="font-size:35px"></i>
                </button>
            </form>
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
                                
                                    <!-- <button type="button" style='background-color:#99f6c3;padding:8px 5px 8px 5px; color:#000;'>Activo</button> -->
                                    <button class='button_1'> PENDIENTE </button>
                                    @else
                                    <!-- <button type="button" style='background-color:#c94444;padding:8px 5px 8px 5px; color:#fff;'>Inactivo</button> -->
                                    <button class='button_2'> ATENDIDO </button>
                                @endif
                            </td>
                            <td>
                            @if($reserva->estado==1)
                                <button class='activar_b' onclick=""> EDITAR </button><br>
                                <form action="{{ route('reservas.destroy',$reserva->id_reserva)}}" method="POST" id="eliminarReserva">
                                @method('DELETE') @csrf
                                    <button type="Submit" class='delete-servicio_medhost eliminar_b' data-servicio_medhost-id=""> ELIMINAR </button>
                                </form>
                            @endif
                            </td>
                        </tr>
                    @endforeach
                    
                  
                </tbody>
            </table>
        </section>
    </main>
@endsection
@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const deleteLinks = document.querySelectorAll('#GenerateHistory');

        deleteLinks.forEach(function(link) {
            link.addEventListener('click', function(event) {
                event.preventDefault();

                const recepcionistaId = this.getAttribute('data-recepcionista-id');
                Swal.fire({
                    title: '¿Estas Seguro?',
                    text: 'Esta accion generara el historial del Dia ',
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonText: 'Generar',
                    cancelButtonText: 'Cancelar'
                }).then((result) => {
                    if(result.isConfirmed) {
                        Swal.fire('¡Generado!', 'El informe del dia ha sido generado exitosamente!.','success');
                        this.submit();
                    }
                });
            });
        });
    });

    document.addEventListener('DOMContentLoaded', function() {
        const deleteLinks = document.querySelectorAll('#eliminarReserva');

        deleteLinks.forEach(function(link) {
            link.addEventListener('click', function(event) {
                event.preventDefault();

                const recepcionistaId = this.getAttribute('data-recepcionista-id');
                Swal.fire({
                    title: '¿Estas Seguro?',
                    text: 'Esta accion eliminara la reserva',
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonText: 'Eliminar',
                    cancelButtonText: 'Cancelar'
                }).then((result) => {
                    if(result.isConfirmed) {
                        //Swal.fire('¡Eliminado!', 'La reserva ha sido Eliminada!.','success');
                        this.submit();
                    }
                });
            });
        });
    });

</script>
@endsection
