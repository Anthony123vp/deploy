<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title><link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <!-- Boxicons CSS -->
  <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />

  <!--Nabvar Flecha PARA ARRIBA-->
  <script src="http://code.jquery.com/jquery-latest.js"></script>

   <!--Nabvar Flecha PARA ARRIBA-->
   <script src="http://code.jquery.com/jquery-latest.js"></script>

   <script src="{{ asset('js/cursor.js') }}"></script>

</head>
<body>

    
  <footer style='padding-top:20px;'>
    <div class="contents-footer">
      <div class="header">
        <h5>Sobre Nosotros</h5>
        <hr>
      </div>
      <div class="body">
        <p>Somos una clinica que busca preservar y cuidar tu integridad mediante nuestros servicios de salud</p>
      </div>
    </div>

    <div class="contents-footer">
      <div class="header">
        <h5>Noticias</h5>
        <hr>
      </div>
      <div class="body">
        <p>MedHost consigue reconocimiento nacional</p>
        <span>Junio 10,2018 / 3 Comentarios</span>
        <br>
        <br>
        <p>Artista internacional busca ayuda en MedHost</p>
        <span>Junio 12,2018 / 3 Comentarios</span>
      </div>
    </div>

    <div class="contents-footer">
      <div class="header">
        <h5>Horarios de Apertura </h5>
        <hr>
      </div>
      <div class="body">
        <p>Lun-Vier: 00 - 11:59pm</p>
        <p>Sabado: 8:00am - 11:59pm</p>
        <p>Domingo: 24 horas</p>
      </div>
    </div>

    <div class="contents-footer">
      <div class="header">
        <h5>Informacion de Contacto</h5>
        <hr>
      </div>
      <div class="body">
        <div class="icon">
          <i class='bx bxs-map' style='color:#99f6c3'></i>
          <p>Av. Arequipa 1148, Lima 15046</p>
        </div>
        <div class="icon">
          <i class='bx bxs-phone' style='color:#99f6c3'></i>
          <p> +51 (025)987-405</p>
        </div>
        <div class="icon">
          <i class='bx bx-envelope' style='color:#99f6c3'></i>
          <p>medhost@medicin.org</p>
        </div>
      </div>

  </footer>


  <div class="footerStatic">
      <img src="Imagenes/LOGO.png" alt=""  height="width="50px">
      <p>© Todos los derechos reservados</p>
      <div class="icons">
        <i class='bx bxl-facebook'></i>
        <i class='bx bxl-twitter' ></i>
        <i class='bx bxl-google-plus' ></i>
        <i class='bx bxl-youtube' ></i>
        <i class='bx bx-plus-medical' ></i>
      </div>
      <div class="flecha">
        <i class='bx bx-chevron-right bx-rotate-270 ir-arriba' style='color:#ffff'></i>
      </div>
  </div>
  @yield("footer")
</body>
</html>