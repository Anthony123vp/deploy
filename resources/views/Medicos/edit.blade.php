@extends('layoutssistema.navbar')
@section('content')

    <div class="main_editar">
    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Editar Medicos</h2>
                    <form action="{{ route('medicos.update', ['id' => $medico->id_medico]) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="input-group">
                            <input class="input--style-1" value="{{ $medico->nombres }}" type="text" placeholder="Nombres" name="nombres">
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1 js-datepicker" value="{{ $medico->ape_paterno }}" type="text" placeholder="Apellido Paterno" name="ape_paterno">
                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1 js-datepicker" value="{{ $medico->ape_materno }}" type="text" placeholder="Apellido Materno" name="ape_materno">
                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1 js-datepicker" value="{{ $medico->dni }}" type="text" placeholder="DNI" name="dni">
                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1 js-datepicker" value="{{ $medico->celular }}" type="text" placeholder="Celular" name="celular">
                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                </div>
                            </div>
                        </div>

                        <div class="row row-space">
                            <div class="col-3">
                                <div class="input-group">
                                    <input class="input--style-1 js-datepicker" value="{{ $medico->f_nacimiento }}" type="date" placeholder="Fecha de Nacimiento" name="f_nacimiento">
                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <select style='border:none;margin-top:11.5px;' class="input--style-1 js-datepicker" name="sexo" id="sexo">
                                        <option style='#ccc' value="">  SEXO</option>
                                        <option value="M" {{ $medico->sexo == 'M' ? 'selected' : '' }}>Masculino</option>
                                        <option value="F" {{ $medico->sexo == 'F' ? 'selected' : '' }}>Femenino</option>
                                        <option value="X" {{ $medico->sexo == 'X' ? 'selected' : '' }}>Prefiero no decirlo</option>
                                    </select>
                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" value="{{ $usuario->email }}" type="email" placeholder="    Email" name="email">
                        </div>

                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1 js-datepicker" value="{{ $usuario->password }}" type="password" placeholder="   Password 1" name="password">
                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1 js-datepicker" value="{{ $usuario->password_2 }}" type="password" placeholder="   Password 2" name="password_2">
                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                                <select class="input--style-1 js-datepicker" name="id_especialidad" id="id_especialidad">
                                    <option value="">ESPECIALIDADES</option>
                                    @foreach ($especialidades as $especialidad)
                                        <option value="{{ $especialidad->id_especialidad }}" {{ $medico->id_especialidad == $especialidad->id_especialidad ? 'selected' : '' }}>{{ $especialidad->nombre }}</option>
                                    @endforeach
                                </select>
                                <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                        </div>
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