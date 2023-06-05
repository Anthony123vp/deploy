@extends("layoutsmedhost.footer")

@section("footer")

@extends("layoutsmedhost.header") 
@section("header")
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
    
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">


  <!--FOOTER CSS-->
  <link rel="stylesheet" href="css/footer.css">

  <!--BODY PAGE-->
  <link rel="stylesheet" href="css/index.css">
  
  <!-- Swiper CSS: Carousel Testimonios -->
  <link rel="stylesheet" href="css/swiper-bundle.min.css" />

  <!-- Boxicons CSS -->
  <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />

  <!--Nabvar Flecha PARA ARRIBA-->
  <script src="http://code.jquery.com/jquery-latest.js"></script>

  <script src="Js/cursor.js"></script>

</head>

<body>
  
  

  <section class="CarouselImagenes">
    <div class="slider">
      <div class="slides">
        <input type="radio" name="radio-btn" id="radio1">
        <input type="radio" name="radio-btn" id="radio2">
        <input type="radio" name="radio-btn" id="radio3">
        <input type="radio" name="radio-btn" id="radio4">
        <!--Radio End-->

        <!--Slaide Img Start-->
        <div class="slide first">
          <div class="body">
            <h1>Tu salud es nuestra prioridad</h1>
            <h1>Cuidando tu vida</h1>
            <hr>
            <p class="Definition">La vida de nuestro paciente es nuestra prioridad por eso siempre estaremos a tu
              disposicion</p>
            <a href="">READ MORE</a>
          </div>
          <div class="body-img">
            <img src="Imagenes/fondopersonajes.png" alt="">
          </div>
        </div>

        <div class="slide">
          <div class="body">
            <h1>Aaron el Mas junior</h1>
            <h1>Cuidando tu vida</h1>
            <hr>
            <p class="Definition">Busco Mejorar y Senior como Dave</p>
            <a href="">READ MORE</a>
          </div>
          <div class="body-img">
            <img src="Imagenes/fondopersonajes.png" alt="">
          </div>
        </div>
        <div class="slide">
          <div class="body">
            <h1>Tu salud es nuestra prioridad</h1>
            <h1>Dave el senior</h1>
            <hr>
            <p class="Definition">Agradezo a Anthony ya que gracias a el pude aprender css</p>
            <a href="">READ MORE</a>
          </div>
          <div class="body-img">
            <img src="Imagenes/fondopersonajes.png" alt="">
          </div>
        </div>
        <div class="slide">
          <div class="body">
            <h1>Tu salud es nuestra prioridad</h1>
            <h1>Cuidando tu vida</h1>
            <hr>
            <p class="Definition">La vida de nuestro paciente es nuestra prioridad por eso siempre estaremos a tu
              disposicion</p>
            <a href="">READ MORE</a>
          </div>
          <div class="body-img">
            <img src="Imagenes/fondopersonajes.png" alt="">
          </div>
        </div>
        <!--Slide img End-->

        <!--Automatic Navigation Start-->
        <div class="navigation-auto">
          <div class="auto-btn1"></div>
          <div class="auto-btn2"></div>
          <div class="auto-btn3"></div>
          <div class="auto-btn4"></div>
        </div>
        <!--Automatic Navigation End-->


        <!--Manul Navigation Start-->
        <div class="navigation-manual">
          <label for="radio1" class="manual-btn"></label>
          <label for="radio2" class="manual-btn"></label>
          <label for="radio3" class="manual-btn"></label>
          <label for="radio4" class="manual-btn"></label>
        </div>
      </div>
    </div>
  </section>




  <!--WHY CHOOSE US-->
  <section class="ChooseUs">
    <div class="imagenes">
      <img class="father" src="Imagenes/doctor.png" alt="">
      <img class="son" src="https://livedemo00.template-help.com/wt_prod-16367//images/home-1-287x380.png" alt=""
        width="287" height="380px">
    </div>
    <div class="infochosse">
      <h1>Why Our Clients <br></h1>
      <div class="title">
        <hr>
        <h1>Choose Us</h1>
      </div>
      <br>
      <p>Our salon aims to deliver the best nail design exprience and top-notch customer service.</p>
      <br>
      <span>We use all-natural, organic body products, hard-to-find polish brands and colors, iPads at every seat, and a
        drink menu featuring fresh-pressed juices and hand-crafted coffees.</span>
      <a class="boton" href="#">READ MORE</a>
    </div>
  </section>

  <section class="SectionThree">
    <div class="grid">
      <div class="caja1">
        <div class="caja-lecture" id="first-lecture">
          <div class="icon-container">
            <i class='bx bxs-capsule'></i>
          </div>
          <div class="description">
            <h3>Medicina</h3><br>
            <p>Mantenemos Medicinas con laboratorios de confiable seguridad y procedencia</p>
          </div>
        </div>
        <div class="caja-lecture">
          <div class="icon-container">
            <i class="fa-solid fa-user-doctor" style="color: #000000;"></i></i>
          </div>
          <div class="description">
            <h3>Profesionales</h3><br>
            <p>Contamos con Profesionales de alta calidad con gran experiencia</p>
          </div>
        </div>
        <div class="caja-lecture">
          <div class="icon-container">
            <i class="fa-solid fa-globe" style="color: #000000;"></i>
          </div>
          <div class="description">
            <h3>Servicios</h3><br>
            <p>Contamos con una gran variedad de servicios a su disposición</p>
          </div>
        </div>
        <div class="caja-lecture" id="last-lecture">
          <div class="icon-container">
            <i class="fa-solid fa-microchip"></i>
          </div>
          <div class="description">
            <h3>Tecnologia</h3><br>
            <p>Contamos con altas herramientas tecnologicas que benefician a nuestros pacientes</p>
          </div>
        </div>
      </div>

      <div class="caja2">
        <img src="https://i.pinimg.com/originals/91/c7/7f/91c77f9d95bf34e4ba7f1c471d5b2bd8.jpg" alt="" width="100%"
          height="626px">
      </div>

    </div>
  </section>

  <section class="SectionFour">
    <div class="four-info">
      <h1>Conozca a nuestros expertos</h1>
      <hr>
      <p>Empleamos a los mejores medicos y especialistas de la industria. Tambien educamos a nuestros propios
        especialistas galardonados a travez de capacitacion constante. Aqui estan los talentos mas destacados de nuestro
        equipo que velaran por tu salud</p>
      <br>
    </div>
    <div class="experts">
      <div class="experts-personality">
        <img src="Imagenes/sandra.jpg" alt="" width="310px" height="280px">
        <div class="info">
          <h2>Ann Nelson</h2>
          <p>Founder,Senior Nail Technician</p>
          <hr width="20px">
          <p>info@demolink.org</p>
        </div>
      </div>
      <div class="experts-personality" id="main-experts">
        <img src="Imagenes/walter.jpg" alt="" width="310px" height="280px">
        <div class="info">
          <h2>Ann Nelson</h2>
          <p>Founder,Senior Nail Technician</p>
          <hr width="20px">
          <p>info@demolink.org</p>
        </div>
      </div>
      <div class="experts-personality">
        <img src="Imagenes/Maria.jpg" alt="" width="310px" height="280px">
        <div class="info">
          <h2>Ann Nelson</h2>
          <p>Founder,Senior Nail Technician</p>
          <hr width="20px">
          <p>info@demolink.org</p>
        </div>
      </div>
    </div>
    <br>
    <a class="boton" href="#">View All Team</a>
  </section>

  <!--Testimonios-->

  <section class="testimonios">
    <div class="testimonial mySwiper">
      <div class="testi-content swiper-wrapper">
        <div class="slide swiper-slide">
          <img src="Imagenes/img1.jpg" alt="" class="image" />
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam,
            saepe provident dolorem a quaerat quo error facere nihil deleniti
            eligendi ipsum adipisci, fugit, architecto amet asperiores
            doloremque deserunt eum nemo.
          </p>

          <i class="bx bxs-quote-alt-left quote-icon"></i>

          <div class="details">
            <span class="name">Marnie Lotter</span>
            <span class="job">Web Developer</span>
          </div>
        </div>
        <div class="slide swiper-slide">
          <img src="Imagenes/img2.jpg" alt="" class="image" />
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam,
            saepe provident dolorem a quaerat quo error facere nihil deleniti
            eligendi ipsum adipisci, fugit, architecto amet asperiores
            doloremque deserunt eum nemo.
          </p>

          <i class="bx bxs-quote-alt-left quote-icon"></i>

          <div class="details">
            <span class="name">Marnie Lotter</span>
            <span class="job">Web Developer</span>
          </div>
        </div>
        <div class="slide swiper-slide">
          <img src="Imagenes/img3.jpg" alt="" class="image" />
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam,
            saepe provident dolorem a quaerat quo error facere nihil deleniti
            eligendi ipsum adipisci, fugit, architecto amet asperiores
            doloremque deserunt eum nemo.
          </p>

          <i class="bx bxs-quote-alt-left quote-icon"></i>

          <div class="details">
            <span class="name">Marnie Lotter</span>
            <span class="job">Web Developer</span>
          </div>
        </div>

        <div class="slide swiper-slide">
          <img src="Imagenes/img5.jpg" alt="" class="image" />
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam,
            saepe provident dolorem a quaerat quo error facere nihil deleniti
            eligendi ipsum adipisci, fugit, architecto amet asperiores
            doloremque deserunt eum nemo.
          </p>

          <i class="bx bxs-quote-alt-left quote-icon"></i>

          <div class="details">
            <span class="name">Marnie Lotter</span>
            <span class="job">Web Developer</span>
          </div>
        </div>
        
        <div class="slide swiper-slide">
          <img src="Imagenes/img6.jpg" alt="" class="image" />
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam,
            saepe provident dolorem a quaerat quo error facere nihil deleniti
            eligendi ipsum adipisci, fugit, architecto amet asperiores
            doloremque deserunt eum nemo.
          </p>

          <i class="bx bxs-quote-alt-left quote-icon"></i>

          <div class="details">
            <span class="name">Marnie Lotter</span>
            <span class="job">Web Developer</span>
          </div>
        </div>

        <div class="slide swiper-slide">
          <img src="Imagenes/img7.jpg" alt="" class="image" />
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam,
            saepe provident dolorem a quaerat quo error facere nihil deleniti
            eligendi ipsum adipisci, fugit, architecto amet asperiores
            doloremque deserunt eum nemo.
          </p>

          <i class="bx bxs-quote-alt-left quote-icon"></i>

          <div class="details">
            <span class="name">Marnie Lotter</span>
            <span class="job">Web Developer</span>
          </div>
        </div>
      </div>
      <div class="swiper-button-next nav-btn"></div>
      <div class="swiper-button-prev nav-btn"></div>
      <div class="swiper-pagination"></div>
    </div>
  </section>
</body>
<!-- Swiper JS -->
<script src="js/swiper-bundle.min.js"></script>
<!-- JavaScript -->
<script src="js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

</html>
@endsection
@endsection