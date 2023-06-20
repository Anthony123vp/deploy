<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> MedHost | Sistema</title>
    
    <link rel="stylesheet" href="/css/sistema.css">
    <link href="/css/editar.css" rel="stylesheet" media="all">
    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    @yield('linkcss')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

  </head>
<body>
<div class="sidebar close">
    <div class="logo-details">
    <img src="/Imagenes/LOGO.png" alt="">
    </div>
    <ul class="nav-links">
    
    <li>
          <a href="{{route('Dashboard')}}">
            <i class='bx bxs-home' ></i>
            <span class="link_name">Dashboard</span>
          </a>
          <ul class="sub-menu blank">
            <li><a class="link_name" href="{{route('citas_programadas.index')}}">Dashboard</a></li>
          </ul>
        </li>

    @auth
      <!--Medico-->
      @if(Auth::user()->id_rol===4)
        <li>
          <a href="{{route('citas_programadas.index')}}">
            <i class='bx bx-calendar-plus'></i>
            <span class="link_name">Citas</span>
          </a>
          <ul class="sub-menu blank">
            <li><a class="link_name" href="{{route('citas_programadas.index')}}">Citas</a></li>
          </ul>
        </li>

        <li>
          <a href="{{route('Horario.index')}}">
            <i class='bx bx-time' ></i>
            <span class="link_name">Horarios</span>
          </a>
          <ul class="sub-menu blank">
            <li><a class="link_name" href="{{route('Horario.index')}}">Horarios</a></li>
          </ul>
        </li>
      @endif
      <!--Medico-->
    @endauth

    @auth
      <!--Recepcionista-->
      @if(Auth::user()->id_rol===3)
       <li>
          <a href="{{route('reservas.index')}}">
            <i class='bx bx-calendar-plus'></i>
            <span class="link_name">Citas</span>
          </a>
          <ul class="sub-menu blank">
            <li><a class="link_name" href="{{route('reservas.index')}}">Citas</a></li>
          </ul>
        </li>
      
        <li>
          <a href="{{route('pacientes.index')}}">
            <i class='bx bxs-face'></i>
            <span class="link_name">Paciente</span>
          </a>
          <ul class="sub-menu blank">
            <li><a class="link_name" href="{{route('pacientes.index')}}">Paciente</a></li>
          </ul>
        </li>
      <!--Recepcionista-->
      @endif
    @endauth

    @auth
      <!--Paciente-->
    @if(Auth::user()->id_rol===1)
        <li>
          <a href="{{ route('historial.index') }}">
            <i class='bx bx-plus-medical' ></i>
            <span class="link_name">Historial Medico</span>
          </a>
          <ul class="sub-menu blank">
            <li><a class="link_name" href="{{ route('historial.index') }}">Historial Medico</a></li>
          </ul>
        </li>
      
        <li>
          <a href="{{ route('citas_pendiente.index') }}">
            <i class='bx bxs-calendar-plus' ></i>
            <span class="link_name">Citas</span>
          </a>
          <ul class="sub-menu blank">
            <li><a class="link_name" href="{{ route('citas_pendiente.index') }}">Citas</a></li>
          </ul>
        </li>
      <!--End Paciente-->
    @endif
    @endauth

    @auth
    @if(Auth::user()->id_rol===2)
     <!--Administrador-->
       <li>
          <a href="{{route('medicos.index')}}">
            <i class='bx bx-line-chart' ></i>
            <span class="link_name">Medicos</span>
          </a>
          <ul class="sub-menu blank">
            <li><a class="link_name" href="{{route('medicos.index')}}">Medicos</a></li>
          </ul>
        </li>
      
        <li>
          <a href="{{route('recepcionistas.index')}}">
            <i class='bx bx-line-chart' ></i>
            <span class="link_name">Recepcionistas</span>
          </a>
          <ul class="sub-menu blank">
            <li><a class="link_name" href="{{route('recepcionistas.index')}}">Recepcionistas</a></li>
          </ul>
        </li>
        <li>
          <a href="{{route('usuarios.index')}}">
            <i class='bx bxs-user'></i>
            <span class="link_name">Usuarios</span>
          </a>
          <ul class="sub-menu blank">
            <li><a class="link_name" href="{{route('usuarios.index')}}">Usuarios</a></li>
          </ul>
        </li>
      <!--End Administrator-->
    @endif
    @endauth
    @guest
      <!--SUPERUSUARIO-->
      <li>
          <a href="{{route('administradores.index')}}">
            <i class='bx bx-line-chart' ></i>
            <span class="link_name">Administrador</span>
          </a>
          <ul class="sub-menu blank">
            <li><a class="link_name" href="{{route('administradores.index')}}">Administrador</a></li>
          </ul>
        </li>
      
        <li>
          <a href="{{route('usuarios.index')}}">
            <i class='bx bx-line-chart' ></i>
            <span class="link_name">Usuarios</span>
          </a>
          <ul class="sub-menu blank">
            <li><a class="link_name" href="{{route('usuarios.index')}}">Usuarios</a></li>
          </ul>
        </li>
      <!--END SUPERUSUARIO-->
    @endguest

    @auth
        <form method="POST" action="{{ route('Logout')}}">
        @csrf
        <div class="profile-details">
          <div class="profile-content">
            <button type="submit"><img src="/images/botonsalir.png" alt="profileImg"></button>
          </div>
          <div class="name-job">
            <div class="profile_name">Logout</div>
            <div class="job">Medhost</div>
          </div>
        </div>
        </form>
        @endauth  
    </ul>
</div>
<section class="home-section">
  <div class="home-content">
    <i class='bx bx-menu' ></i>
    <span class="text">MedHost</span>
  </div>
  <div class="content">
    @yield('content')
    @yield("navbar_usuarios")
  </div>
  
</section>

<script src="/Js/sistema.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.debug.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.6/jspdf.plugin.autotable.js"></script>

<script>
    function generarPDF(event) {
  event.preventDefault();
  const tBody = document.querySelector('#tbody');
  if (tBody.childElementCount === 0) {
    alert("No se puede generar el PDF ya que no hay registros en la tabla.");
    return;
  }

  const doc = new jsPDF();
  const table = document.querySelector('table');

  // Definir las opciones de estilo para la tabla
  const options = {
    styles: {
      fillColor: [0, 176, 80]
    }

  };

  // Generar la tabla usando autoTable con las opciones de estilo
  doc.autoTable({ html: table, ...options });

  doc.save('Reporte.pdf');
}
</script>
@yield('scripts')
</body>
</html>
