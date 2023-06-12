@extends('layoutssistema.navbar')
@section('content')

<main class="table">
        <section class="table__header">
            <h1>HORARIOS</h1>
            <a class="btn" href="{{ route('Horario.create')}}">CREAR</a>
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
                        <th> Fecha <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Hora Inicio <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Hora Final <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Estado <span class="icon-arrow">&UpArrow;</span></th>
                    </tr>
                </thead>
                <tbody>
                @foreach ( $horarios as $horario )
                    <tr>
                        <td>{{ $loop->iteration}}</td>
                        <td>{{  $horario->fecha}} </td>
                        <td> {{ $horario->hora_inicio}} </td>
                        <td>{{ $horario->hora_final}}</td>
                        <td>
                            {{ $horario->estado}}
                        </td>
                    </tr>
                    
                @endforeach
                
                    
                </tbody>
            </table>
        </section>
    </main>

@endsection