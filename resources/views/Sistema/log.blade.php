<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/log.css">
    <!-- <script src="json3.6.4.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <!-- <script src="log.js"></script> -->
    <title>Document</title>
</head>
<body>
    <nav>
        <img src="Imagenes/Logo2_.png" alt="Logo MedHost">
    </nav>
    <div class="contendor_pcs">
        <div class="contenedor_logo"></div>
        <div class="contenedor_estetoscopio">
            <img src="Imagenes/medicina_logo.png" alt="medicina_logo">
        </div>
        

        <form method='post' action="">
            <div class="mb-3">
            <label for="dni" class="form-label">Dni:</label>
            <input type="text" placeholder='Numero documento' class="form-control" id="dni" name="dni">
            <div id="dni_consult" class="form-text">Ingresa tu dni para validar tus datos.</div>
            </div>
            <div class="mb-3">
                <label for="nombres_" class="form-label">Nombres:</label>
                <input type="text" placeholder='Nombre' class="form-control" id="nombres_">
                <div id="dni_consult" class="form-text">Tus nombres son recogidos de Reniec.</div>
            </div>
            <div class="mb-3">
                <label for="apellidos_paternos" class="form-label">Apellidos Paterno:</label>
                <input type="text" placeholder='Apellido Paterno' class="form-control" id="apellidos_paternos" >
                <div id="dni_consult" class="form-text">Tu apellido paterno es recogidos por Reniec.</div>
            </div>
            <div class="mb-3">
                <label for="apellidos_maternos" class="form-label">Apellidos Materno:</label>
                <input type="text" placeholder='Apellido Materno' class="form-control" id="apellidos_maternos" >
                <div id="dni_consult" class="form-text">Tu apellido materno es recogidos por Reniec.</div>
            </div>
            <div class="mb-3">
                <label for="sexo" class="form-label">Sexo:</label>
                <select class="form-control" name="sexo" id="sexo" >
                    <option value="">Selecciona</option>
                    <option value="M">Masculino</option>
                    <option value="F">Femenino</option>
                    <option value="Oliver">Prefiero no decirlo</option>
                </select>
                <div id="dni_consult" class="form-text">Seleccione Sexo</div>
            </div>
            <div class="mb-3">
                <label for="dia" class="form-label">Dia:</label>
                <input type="text" placeholder='Dia' autocomplete="off" name='day' class="form-control" id="dia" >
                <div id="dni_consult" class="form-text">Ingresa día de nacimiento.</div>
            </div>
            <div class="mb-3">
                <label for="sexo" class="form-label">Mes:</label>
                <select class="form-control" name="month" id="month">
                    <option value="">Mes</option>
                    <option value="01">Enero</option>
                    <option value="02">Febrero</option>
                    <option value="03">Marzo</option>
                    <option value="04">Abril</option>
                    <option value="05">Mayo</option>
                    <option value="06">Junio</option>
                    <option value="07">Julio</option>
                    <option value="08">Agosto</option>
                    <option value="09">Septiembre</option>
                    <option value="10">Octubre</option>
                    <option value="11">Noviembre</option>
                    <option value="12">Diciembre</option>
                </select>
                <div id="dni_consult" class="form-text">Seleccione mes de nacimiento</div>
            </div>
            <div class="mb-3">
                <label for="anio" class="form-label">Año:</label>
                <input type="text" placeholder='Año' autocomplete="off" name='anio' class="form-control" id="anio" >
                <div id="dni_consult" class="form-text">Ingresa año de nacimiento.</div>
            </div>
            <div class="mb-3">
                <label for="email_" class="form-label">Email:</label>
                <input type="email" autocomplete="off" class="form-control" id="email_" >
                <div id="dni_consult" class="form-text">Ingresa tu email para validarlo en Google Accounts.</div>
            </div>
            <div class="mb-3">
                <label for="celular" class="form-label">Celular:</label>
                <input type="number" placeholder='Celular' autocomplete="off" name='celular' class="form-control" id="celular" >
                <div id="dni_consult" class="form-text">Ingresa número de celular.</div>
            </div>
            <div class="mb-3">
                <label for="insurance" class="form-label">Seguro:</label>
                <select class="form-control" name="insurance" id="insurance">
					<option value="">Seguro</option>
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
                <div id="dni_consult" class="form-text">Seleccione seguro al que pertenece</div>
            </div>
            <div class="mb-3">
                <label for="password_" class="form-label">Contraseña:</label>
                <input type="password" autocomplete="off" class="form-control" id="password_" >
                <div id="dni_consult" class="form-text">Ingresar contraseña</div>
            </div>
            <div class="mb-3">
                <label for="password_2" class="form-label">Repetir Contraseña:</label>
<input type="password" autocomplete="off" class="form-control" id="password_2" >                
                <div id="dni_consult" class="form-text">Ingresar nuevamente contraseña</div>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input check_" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Acepto toda politica y condiciones de MedHost</label>
            </div>
            <div class="boton_content">
                <button type="submit" class="btn boton_login">Registrate</button>
            </div>
        </form>
    </div>
    
    
    
</body>
<script>
//     var prove = document.getElementById("dni");
    
//     prove.addEventListener("keyup",function(){
        
//     var prove = document.getElementById("dni");
//     var letras_prove = prove.value;
//     console.log(letras_prove);
//     var count = 1;
//     for (var index = 1; index <= 8; index++) {
//         if(letras_prove[index] == undefined){
//             break;
//         }
//         count = count + 1;
        
//     }
//     console.log(count)

//     if(count == 8){
//         var dni=$("#dni").val();
//         console.log(dni + "Prueba");


//         $.ajax({           
//             type:"POST",
//             url: "reniec_consulta.php",
//             data: 'dni='+dni,
//             dataType: 'json',
//             success: function(data) {
        
//                 console.log(data);
//                 console.log("1");
//                 if(data==1)
//                 {
//                     alert('El DNI tiene que tener 8 digitos');
//                 }
            
            
//                 else{
//                     console.log(data);
//                     $("#nombres_").val(data.nombres);
//                     $("#apellidos_").val(data.apellidoPaterno + " " +  data.apellidoMaterno);
                

                
//                 }
        

//             }
            
//         });
//     }
    
// });
</script>
</html>