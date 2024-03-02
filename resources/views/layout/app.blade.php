<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reservi</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Croissant+One&family=Dancing+Script:wght@500&family=Fira+Sans+Condensed:ital,wght@0,200;1,100;1,300&family=Martian+Mono:wght@100&family=Montserrat:ital,wght@0,100;0,200;1,100&family=Noto+Color+Emoji&family=Noto+Sans+NKo+Unjoined&family=Nunito+Sans:opsz,wght@6..12,200&family=Open+Sans:wght@300&family=Oswald:wght@200&family=Roboto+Mono:wght@100&family=Roboto:wght@100&display=swap');
  </style>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link rel="icon" href="{{asset("images/favicon.ico")}}">
  <link rel="stylesheet" href="{{asset("css/style.css")}}">
</head>

<body>
  <!-- Cabecera -->
  <header>
    <nav id="navbar">
      <div id="navigation" class="container">
        <a href="{{route("inicio")}}"><img src="{{asset("images/servicios.png")}}" alt="" class="logo"></a>
        <ul id="main-nav">
          <li><a href="{{route("inicio")}}">Home</a></li>
          <li><a href="{{route("reservi")}}">Reservi</a></li>
          <li><a href="{{route("areas")}}">Areas </a></li>
          <li><a href="{{route("contacto")}}">Contacto</a></li>
          <li><i class="fa-solid fa-phone"></i> 123456789</li>
        </ul>
      </div>

    </nav>
  </header>

  @yield("contenido1")

  <footer>
    <div id="piePagina" class="container">
      <div>
        <h3>Corporativo</h3>
        <ul>
          <li><a href="colaboradores.html">Colaboradores</a></li>
          <li><a href="empleos.html">Trabaja con nosotros</a></li>
          <li><a href="contacto.html">Contacto</a></li>
        </ul>
      </div>
      <div>
        <h3>Legal</h3>
        <ul>
          <li><a href="condiciones.html">Terminos y condiciones</a></li>
          <li><a href="privacidad.html">Politica de privacidad</a></li>
        </ul>
      </div>
      <div>
        <a href="index.html"><img src="{{ asset("images/servicios2.png")}}" alt="logotipo"></a>
        <div id="social">
          <a href=""><i class="fa-brands fa-facebook"></i></a>
          <a href=""><i class="fa-brands fa-twitter"></i></a>
          <a href=""><i class="fa-brands fa-linkedin"></i></a>
        </div>

      </div>
    </div>
    <div id="copyright">
      &copy Derechos reservados
    </div>
  </footer>

</body>

</html>
