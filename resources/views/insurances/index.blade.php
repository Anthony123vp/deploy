@extends("layoutssistema.navbar")
@section("content")



<main class="table">
        <section class="table__header">
            <h1>Seguros</h1>
            <button class="crear_new" onclick="window.location.href='{{ route('insurances.create')}}'">
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
                    <label for="export-file" id="toEXCEL">EXCEL <img src="images/excel.png" alt=""></label>
                </div>
            </div>
        </section>
        <section class="table__body">
            <table id='tabla_admin'>
                <thead>
                    <tr>
                        <th> Nº </th>
                        <th> Nombre Seguros </th>
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
                    
                    @foreach ($insurances as $insurance)
                    <tr>
                        <td>{{ $id }}</td>
                        <td><button type="button" class='boton_insurances'>{{ $insurance->nombre }}</button></td>
                        <td>
                            @if ($insurance->estado == 1)
                                <!-- <button type="button" style='background-color:#99f6c3;padding:8px 5px 8px 5px; color:#000;'>Activo</button> -->
                                <button class='button_1'> Activo </button>
                                @else
                                <!-- <button type="button" style='background-color:#c94444;padding:8px 5px 8px 5px; color:#fff;'>Inactivo</button> -->
                                <button class='button_2'> Inactivo </button>
                            @endif
                        </td>
                        <td>{{ $insurance->created_at }}</td>
                        <td>{{ $insurance->updated_at }}</td>
                        <td>
                            <!-- <a type="button" class="btn btn-light" href="{{ route('insurances.edit', ['id' => $insurance->id_insurance]) }}">Editar</a><br>
                            <a type="button" style="margin-top:10px;" class="btn btn-light delete-insurance" href="#" data-insurance-id="{{ $insurance->id_insurance }}">Eliminar</a> -->
                            <button class='activar_b' onclick="window.location.href='{{ route('insurances.edit', ['id' => $insurance->id_insurance]) }}'"> EDITAR </button><br>
                            <button class='delete-insurance eliminar_b' data-insurance-id="{{ $insurance->id_insurance }}"> ELIMINAR </button>
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
    <style>
        .boton_insurances {
        background-color:#345B63;
        color:#fff;
        outline: 4px groove #345B63;
        outline-offset: 1px;
        text-align:center;
        }
    </style>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const deleteLinks = document.querySelectorAll('.delete-insurance');

        deleteLinks.forEach(function(link) {
            link.addEventListener('click', function(event) {
                event.preventDefault();

                const insuranceId = this.getAttribute('data-insurance-id');
                Swal.fire({
                    title: '¿Estás seguro?',
                    text: 'Esta acción eliminará el insurance',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Eliminar',
                    cancelButtonText: 'Cancelar'
                }).then((result) => {
                    if (result.isConfirmed) {

                        fetch("{{ route('insurances.destroy', ['id' => 'INSURANCE_ID']) }}".replace('INSURANCE_ID', insuranceId), {
                            method: 'DELETE',
                            headers: {
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                            }
                        }).then(function(response) {
                            if (response.ok) {
                                window.location.href = "{{ route('insurances.index') }}";
                            } else {
                            }
                        });
                        
                        window.location.href = "{{ route('insurances.index') }}";

                    }
                });
            });
        });
    });
</script>
@endsection
