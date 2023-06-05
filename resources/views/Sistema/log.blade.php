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
        

        <form action="">
            <div class="mb-3">
            <label for="dni" class="form-label">Dni:</label>
            <input type="text" class="form-control" id="dni" name="dni">
            <div id="dni_consult" class="form-text">Ingresa tu dni para validar tus datos.</div>
            </div>
            <div class="mb-3">
                <label for="nombres_" class="form-label">Nombres:</label>
                <input type="text" class="form-control" id="nombres_" readonly>
                <div id="dni_consult" class="form-text">Tus nombres son recogidos de Reniec.</div>
            </div>
            <div class="mb-3">
                <label for="apellidos_" class="form-label">Apellidos:</label>
                <input type="text" class="form-control" id="apellidos_" readonly>
                <div id="dni_consult" class="form-text">Tus apellidos son recogidos de Reniec.</div>
            </div>
            <div class="mb-3">
                <label for="email_" class="form-label">Email:</label>
                <input type="email" autocomplete="off" class="form-control" id="email_" >
                <div id="dni_consult" class="form-text">Ingresa tu email para validarlo en Google Accounts.</div>
            </div>
            <div class="mb-3">
                <label for="password_" class="form-label">Contraseña:</label>
                <input type="password" autocomplete="off" class="form-control" id="password_" >
                <div id="dni_consult" class="form-text"><a style="color: #a7a7a7;" href="">Olvidaste tu contraseña?</a></div>
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