@extends("layout.app")
@section("contenido1")
<!-- Cuerpo del documento -->
<main>
  <article id="home">
    <section>
      <div id="seccionPrimera" class="container">
        <div>
          <h1>Soluciones oportunas</h1>
          <p>Agenda tu cita</p>
          <a href="{{route("casos")}}">Casos de estudio</a>
        </div>
      </div>
    </section>
  </article>
</main>



<section>
  <main>
    <article id="home">
      <div id="seccionSegunda" class="container">
        <div class="segunda">
          <h2>Reservi la solucion que buscabas</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse cum ad pariatur veniam. Veniam vel
            veritatis adipisci, fuga rerum soluta autem quisquam harum non! Adipisci nemo et nulla
            consequatur quam.</p>
          <a class="btn" href="{{route("reservi")}}">Conocer más</a>
        </div>
        <img src="{{ asset("images/hand-shake.jpeg")}}" alt="Imagen de dos personas estrechandose las manos" class="ima-manos">
      </div>
</section>
</article>
</main>



<section>
  <div id="seccionTercera" class="container">
    <img src="{{ asset("images/office-people.jpg")}}" alt="Imagen de personas caminando">
    <div>
      <h2>Un equipo de asesores experimentados a su disposicion</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi labore accusamus eveniet eius cum
        assumenda, corrupti, distinctio minus nulla deserunt commodi aliquam nisi illum laborum corporis
        illo repudiandae, sint maxime.</p>
      <!-- <a class="btn" href="equipo.html">Conoce nuestro equipo</a> -->
    </div>
  </div>
</section>


<section id="seccionCuart">
  <h2>Servicios</h2>
  <p>Nuestro equipo de asesores provee soluciones en casos de:</p>
  <div id="seccionCuarta" class="container">
    <div class="col">
      <i class="fa-solid fa-briefcase"></i>
      <h3>Refrigeracion</h3>
      <p>
        voluptatum minus aut dolore, dicta, reprehenderit deleniti optio rem, quaerat
        necessitatibus!</p>
    </div>
    <div class="col">
      <i class="fa-solid fa-hammer"></i>
      <h3>Acometidas</h3>
      <p>
        voluptatum minus aut dolore, dicta, reprehenderit deleniti optio rem, quaerat
        necessitatibus!</p>
    </div>
    <div class="col">
      <i class="fa-solid fa-building"></i>
      <h3>Adecuaciones internas</h3>
      <p>
        voluptatum minus aut dolore, dicta, reprehenderit deleniti optio rem, quaerat
        necessitatibus!</p>
    </div>
    <div class="col">
      <i class="fa-solid fa-screwdriver-wrench"></i>
      <h3>Herramientas</h3>
      <p>
        voluptatum minus aut dolore, dicta, reprehenderit deleniti optio rem, quaerat
        necessitatibus!</p>
    </div>
  </div>
</section>



<section>
  <div id="seccionQuinta" class="container">
    <div>
      <h2>¿Necesitas asesoria? </h2>
      <p>Contactenos ahora mismo para un consulta gratuita</p>
    </div>
    <a class="btn" href="contacto.html">Consultar</a>
  </div>
</section>
</article>
</main>
@endsection