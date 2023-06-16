<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login and Signup</title>
  <link rel="stylesheet" href="css/log_sign.css">
</head>

<body>
  <div class="container">
    <div class="backbox">
      <div class="loginMsg">
        <div class="textcontent">
          <p class="title">¿No tienes una cuenta?</p>
          <p>Registrate e inicia una gran <br> experiencia en Medhost.</p>
          <button id="switch1">REGISTRARME</button>
        </div>
      </div>
      <div class="signupMsg visibility">
        <div class="textcontent">
          <p class="title">¿Ya tienes una cuenta?</p>
          <p>Inicia sesión y disfruta de nuestros servicios.</p>
          <button id="switch2">INICIAR SESIÓN</button>
        </div>
      </div>
    </div>
    
    <div class="frontbox">
      <div class="login">
          <h2>INICIAR SESIÓN</h2>
          <div  class="inputbox">
                <input type="text" name="email" placeholder="  EMAIL">
                <input type="password" name="password" placeholder="  PASSWORD">
              
            </div>
            <p>FORGET PASSWORD?</p>
        <button>LOG IN</button>
      </div>

      <div class="signup hide">
          <h2>REGISTRO PACIENTE</h2>
          <div class="inputbox">
            <form action="{{ route('pacientes.store')}}" method="POST">
              @csrf
              <div style='width:100%;display:flex;'>
                  <input style='margin-right:5px;' type="text" placeholder='  NUMERO DOCUMENTO' id="dni" name="dni">
                  <input type="text" name='nombres' placeholder='  NOMBRE'  id="nombres_">
              </div>
              <div style='width:100%;display:flex;'>
                  <input type="text" placeholder='  APELLIDO PATERNO' name='ape_paterno' id="ape_paterno" >
                  <input style='margin-left:5px;' type="text" name='ape_materno' placeholder='  APELLIDO MATERNO' id="ape_materno" >
              </div>
              <div style='width:100%;display:flex;'>
                  <select name="sexo" id="sexo" >
                        <option style='#ccc' value="">  SELECCIONE</option>
                        <option value="M">Masculino</option>
                        <option value="F">Femenino</option>
                        <option value="X">Prefiero no decirlo</option>
                    </select>
                    <input style='margin-left:5px;' type="date" placeholder='Dia' autocomplete="off" name='f_nacimiento' id="f_nacimiento" >
              </div>
            
              <div style='width:100%;display:flex;'>
                  <input type="text" name="email" placeholder="  EMAIL">
                  <input style='margin-left:5px;' type="number" placeholder='  CELULAR' autocomplete="off" name='celular' id="celular" >
              </div>
              <select name="insurance" id="insurance">
                  <option value="">  SEGURO</option>
                  <option value="20144438354">BCRP</option>
                  <option value="20122794424">FEBAN</option>
                  <option value="20508650451">FOSPEME</option>
                  <option value="20601978572">La Positiva EPS</option>
                  <option value="20100210909">La Positiva Seguros</option>
                  <option value="20517182673">Mapfre EPS</option>
                  <option value="20418896915">Mapfre Seguros</option>
                  <option value="00000000003">Otros</option>
                  <option value="20431115825">Pacifico EPS</option>
                  <option value="20332970411">Pacifico Seguros</option>
                  <option value="20100128218">PAMF PETROPERU</option>
                  <option value="00000000002">Particular</option>
                  <option value="20100176964">Plan de Salud Familiar</option>
                  <option value="20101039910">Prepaga ONCOSALUD</option>
                  <option value="20507264108">Prepagada Clínica EL GOLF</option>
                  <option value="20414955020">Rimac Seguros y EPS</option>
                  <option value="20523470761">Sanitas Peru EPS</option>
                  <option value="20139589638">SEMEFA</option>
              </select>
            
              <div style='width:100%;display:flex;'>
                  <input type="password" placeholder='  CONTRASEÑA' name='password' autocomplete="off" id="password" >
                  <input style='margin-left:5px;' type="password" placeholder='  REPITE CONTRASEÑA' name='password_2' autocomplete="off" id="password_2" >
              </div>
              <button class='boton_registrar_paciente' type="submit">REGISTRARME</button>
              </form>
            
            </div>
        </div>
    </div>
</div>
</body>

</html>
<script src="Js/log_sign.js"></script>