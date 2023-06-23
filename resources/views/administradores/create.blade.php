@extends('layoutssistema.navbar')
@section('content')

    <div class="main_editar">
    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Crear Administradores</h2>
                    
                    <form action="{{ route('administradores.store')}}" method="POST">
                    @csrf
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Nombres" name="nombres">
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1 js-datepicker" type="text" placeholder="Apellido Paterno" name="ape_paterno">
                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1 js-datepicker" type="text" placeholder="Apellido Materno" name="ape_materno">
                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1 js-datepicker" type="text" placeholder="DNI" name="dni">
                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1 js-datepicker" type="text" placeholder="Celular" name="celular">
                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                </div>
                            </div>
                        </div>

                        <div class="row row-space">
                            <div class="col-3">
                                <div class="input-group">
                                    <input class="input--style-1 js-datepicker" type="date" placeholder="Fecha de Nacimiento" name="f_nacimiento">
                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <select style='border:none;margin-top:11.5px;' class="input--style-1 js-datepicker" name="sexo" id="sexo">
                                        <option style='#ccc' value="">  SEXO</option>
                                        <option value="M">Masculino</option>
                                        <option value="F">Femenino</option>
                                        <option value="X">Prefiero no decirlo</option>
                                    </select>
                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="email" placeholder="    Email" name="email">
                        </div>
                        
                        <div class="row row-space">
                        <div class="col-1">
                            <div class="input-group">
                            <input class="input--style-1 js-datepicker" type="password" placeholder="Password 1" name="password" id="password1">
                            <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                            <img class="toggle-password" src="https://cdn-icons-png.flaticon.com/512/6405/6405909.png" alt="Mostrar contraseña" onmousedown="showPassword('password1')" onmouseup="hidePassword('password1')">
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="input-group">
                            <input class="input--style-1 js-datepicker" type="password" placeholder="Password 2" name="password_2" id="password2">
                            <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                            <img class="toggle-password" src="https://cdn-icons-png.flaticon.com/512/6405/6405909.png" alt="Mostrar contraseña" onmousedown="showPassword('password2')" onmouseup="hidePassword('password2')">
                            </div>
                        </div>
                        </div>

                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit">Enviar</button>
                            <a type="button" style="margin-top:10px;" class="btn btn-light delete-insurance" href=" {{ route('administradores.index') }} " id="delete">Atras</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection
<script>
  var showPasswordTimeout;

  function showPassword(inputId) {
    var input = document.getElementById(inputId);
    input.type = 'text';
  }

  function hidePassword(inputId) {
    var input = document.getElementById(inputId);
    input.type = 'password';
  }

  function startShowPasswordTimer(inputId) {
    showPasswordTimeout = setTimeout(function() {
      showPassword(inputId);
    }, 500);
  }

  function cancelShowPasswordTimer() {
    clearTimeout(showPasswordTimeout);
  }
</script>