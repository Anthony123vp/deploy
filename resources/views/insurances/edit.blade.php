@extends('layoutssistema.navbar')
@section('content')

    <div class="main_editar">
    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Editar Seguro</h2>
                    <form action="{{ route('insurances.update', ['id' => $insurance->id_insurance]) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="input-group">
                            <input class="input--style-1" value="{{ $insurance->nombre }}" type="text" placeholder="Nombre" name="nombre">
                        </div>
                        <div class="col-2">
                            <div class="input-group">
                                <select style='border:none;margin-top:11.5px;' class="input--style-1 js-datepicker" name="estado" id="estado">
                                    <option style='#ccc' value="">  ESTADO</option>
                                    <option value="1" {{ $insurance->estado == '1' ? 'selected' : '' }}>Activar</option>
                                    <option value="0" {{ $insurance->estado == '0' ? 'selected' : '' }}>Inactivar</option>
                                </select>
                                <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                            </div>
                        </div>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection