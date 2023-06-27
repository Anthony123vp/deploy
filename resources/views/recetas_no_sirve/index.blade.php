@extends('layoutssistema.navbar')
@section('linkcss')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="/css/citas_paciente.css">
@endsection
@section('content')
<div class="container">
        <h2>Recetas Medicass</h2>
        <br>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create">
                Nuevo
        </button>
        <table class="table">
            <br>
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Receta</th>
                    <th scope="col">Medicinas</th>
                    <th scope="col">Comentario</th>
                </tr>
            </thead>
            <tbody id="tablaDatos">
                @foreach($recetas as $receta)
                <tr>
                    <td scope="row"> {{$receta->id_receta}} </td>
                    <td> {{$receta->terapias}} </td>
                    <td> {{$receta->examenes}} </td>
                    <td> {{$receta->medicinas}} </td>
                    <td> {{$receta->comentario}} </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @include('Receta.create')
@endsection

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>