@extends('layoutssistema.navbar')
@section('content')

    <div class="main_editar">
    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Editar Paciente</h2>
                    <form action="{{ route('pacientes.update', ['id' => $paciente->id_paciente]) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="input-group">
                            <input class="input--style-1" value="{{ $paciente->nombres }}" type="text" placeholder="Nombres" name="nombres">
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1 js-datepicker" value="{{ $paciente->ape_paterno }}" type="text" placeholder="Apellido Paterno" name="ape_paterno">
                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1 js-datepicker" value="{{ $paciente->ape_materno }}" type="text" placeholder="Apellido Materno" name="ape_materno">
                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1 js-datepicker" value="{{ $paciente->dni }}" type="text" placeholder="DNI" name="dni">
                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1 js-datepicker" value="{{ $paciente->celular }}" type="text" placeholder="Celular" name="celular">
                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                </div>
                            </div>
                        </div>

                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input style='padding-right:0px;' value="{{ $paciente->f_nacimiento }}" class="input--style-1 js-datepicker" type="date" placeholder="Fecha de Nacimiento" name="f_nacimiento">
                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <select style='border:none;margin-top:11.5px;' class="input--style-1 js-datepicker" name="sexo" id="sexo">
                                        <option style='#ccc' value="">  SEXO</option>
                                        <option value="M" {{ $paciente->sexo == 'M' ? 'selected' : '' }}>Masculino</option>
                                        <option value="F" {{ $paciente->sexo == 'F' ? 'selected' : '' }}>Femenino</option>
                                        <option value="X" {{ $paciente->sexo == 'X' ? 'selected' : '' }}>Prefiero no decirlo</option>
                                    </select>
                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                </div>
                            </div>
                        </div>

                        <div class="input-group">
                            <input class="input--style-1" value="{{ $usuario->email }}" type="email" placeholder="    Email"  name="email">
                        </div>

                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1 js-datepicker" value="{{ $usuario->password }}" type="password" placeholder="   Password 1" name="password_1">
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
                        
                        <div class="row row-space">
                            <div class="col-3">
                                <div class="input-group">
                                    <select style='border:none;margin-top:11.5px;' class="input--style-1 js-datepicker" name="insurance" id="insurance">
                                        <option value="">  SEGURO</option>
                                        <option value="20144438354" {{ $paciente->insurance == '20144438354' ? 'selected' : '' }} >BCRP</option>
                                        <option value="20122794424" {{ $paciente->insurance == '20122794424' ? 'selected' : '' }}>FEBAN</option>
                                        <option value="20508650451" {{ $paciente->insurance == '20508650451' ? 'selected' : '' }}>FOSPEME</option>
                                        <option value="20601978572" {{ $paciente->insurance == '20601978572' ? 'selected' : '' }}>La Positiva EPS</option>
                                        <option value="20100210909" {{ $paciente->insurance == '20100210909' ? 'selected' : '' }}>La Positiva Seguros</option>
                                        <option value="20517182673" {{ $paciente->insurance == '20517182673' ? 'selected' : '' }}>Mapfre EPS</option>
                                        <option value="20418896915" {{ $paciente->insurance == '20418896915' ? 'selected' : '' }}>Mapfre Seguros</option>
                                        <option value="00000000003" {{ $paciente->insurance == '00000000003' ? 'selected' : '' }}>Otros</option>
                                        <option value="20431115825" {{ $paciente->insurance == '20431115825' ? 'selected' : '' }}>Pacifico EPS</option>
                                        <option value="20332970411" {{ $paciente->insurance == '20332970411' ? 'selected' : '' }}>Pacifico Seguros</option>
                                        <option value="20100128218" {{ $paciente->insurance == '20100128218' ? 'selected' : '' }}>PAMF PETROPERU</option>
                                        <option value="00000000002" {{ $paciente->insurance == '00000000002' ? 'selected' : '' }}>Particular</option>
                                        <option value="20100176964" {{ $paciente->insurance == '20100176964' ? 'selected' : '' }}>Plan de Salud Familiar</option>
                                        <option value="20101039910" {{ $paciente->insurance == '20101039910' ? 'selected' : '' }}>Prepaga ONCOSALUD</option>
                                        <option value="20507264108" {{ $paciente->insurance == '20507264108' ? 'selected' : '' }}>Prepagada Clínica EL GOLF</option>
                                        <option value="20414955020" {{ $paciente->insurance == '20414955020' ? 'selected' : '' }}>Rimac Seguros y EPS</option>
                                        <option value="20523470761" {{ $paciente->insurance == '20523470761' ? 'selected' : '' }}>Sanitas Peru EPS</option>
                                        <option value="20139589638" {{ $paciente->insurance == '20139589638' ? 'selected' : '' }}>SEMEFA</option>
                                    </select>
                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                </div>
                            </div>
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