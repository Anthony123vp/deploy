@extends("layoutssistema.navbar")
@section("content")



<main class="table">
        <section class="table__header">
            <h1>Seguros</h1>
            <a class="btn" href="{{ route('insurances.create')}}">CREAR</a>
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
                        <th> Nº <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Nombre Seguros <span class="icon-arrow">&UpArrow;</span></th>
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
                    
                    @foreach ($insurances as $insurance)
                    <tr>
                        <td>{{ $id }}</td>
                        <td>{{ $insurance->nombre }}</td>
                        <td>
                            @if ($insurance->estado == 1)
                                <button type="button" style='background-color:#99f6c3;padding:8px 5px 8px 5px; color:#000;'>Activo</button>
                                @else
                                <button type="button" style='background-color:#c94444;padding:8px 5px 8px 5px; color:#fff;'>Inactivo</button>
                            @endif
                        </td>
                        <td>{{ $insurance->created_at }}</td>
                        <td>{{ $insurance->updated_at }}</td>
                        <td>
                            <a type="button" class="btn btn-light" href="{{ route('insurances.edit', ['id' => $insurance->id_insurance]) }}">Editar</a><br>
                            <a type="button" style="margin-top:10px;" class="btn btn-light delete-insurance" href="#" data-insurance-id="{{ $insurance->id_insurance }}">Eliminar</a>

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
