@extends("layout.app")
@section("contenido1")
<!-- Cuerpo del documento -->
<main>
  <header>
    <div class="container">
      <h1>Areas de practica</h1>
    </div>
  </header>
</main>
@endsection

@section("contenido2")
<article id="pages" class="container">
  <section>
    <div class="row">
      <img src="{{asset("images/lady-justice.jpg")}}" alt="imagen de la fila">
      <h2>Prevencion</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam illum sequi voluptatum tempore,
        ullam nulla eaque commodi non quia quo. Eligendi dolorem, ipsum recusandae id facilis sunt
        asperiores tempore repudiandae!</p>
      <a href="#" class="transparent">Leer más</a>
    </div>
  </section>
</article>
@endsection

@section("contenido3")
<article id="pages" class="container">
  <section>
    <div class="row">
      <img src="{{asset("images/construction-workers.jpeg")}}" alt="imagen de la fila">
      <h2>implementacion</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam illum sequi voluptatum tempore,
        ullam nulla eaque commodi non quia quo. Eligendi dolorem, ipsum recusandae id facilis sunt
        asperiores tempore repudiandae!</p>
      <a href="#" class="transparent">Leer más</a>
    </div>
  </section>
</article>
@endsection

@section("contenido4")
<article id="pages" class="container">
  <section>
    <div class="row">
      <img src="{{asset("images/office-people.jpg")}}" alt="imagen de la fila">
      <h2>Correccion</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam illum sequi voluptatum tempore,
        ullam nulla eaque commodi non quia quo. Eligendi dolorem, ipsum recusandae id facilis sunt
        asperiores tempore repudiandae!</p>
      <a href="#" class="transparent">Leer más</a>
    </div>
  </section>
</article>
@endsection

@section("contenido5")
<article id="pages" class="container">
  <section>
    <div class="row">
      <img src="{{asset("images/house.jpeg" )}}" alt="imagen de la fila">
      <h2>Solucion</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam illum sequi voluptatum tempore,
        ullam nulla eaque commodi non quia quo. Eligendi dolorem, ipsum recusandae id facilis sunt
        asperiores tempore repudiandae!</p>
      <a href="#" class="transparent">Leer más</a>
    </div>
  </section>
</article>
@endsection