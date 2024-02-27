@extends("layout.app")
@section("contenido3")
<!-- Cuerpo del documento -->
<main>
  <header>
    <div class="container">
      <h1>Contacto</h1>
    </div>
  </header>
</main>
@endsection

@section("contenido4")
<article id="pages" class="container">
  <section>
    <h2>Formulario de contacto</h2>
    <p>Para comunicarse con nosotros rellene el siguiente formulario. <br>Campos marcados con asteriscos
      <span class="asterisco">(*)</span> son requeridos
    </p>

    <form action="" method="post">
      <label for="nombre">Nombre<span class="asterisco">*</span>:</label>
      <input type="text" id="nombre">

      <label for="apellido">Apellido<span class="asterisco">*</span>:</label>
      <input type="text" id="apellido">

      <label for="email">Correo electronico <span class="asterisco">*</span>:</label>
      <input type="email" id="email">

      <label for="telefono">Telefono<span class="asterisco">*</span>:</label>
      <input type="text" id="telefono">

      <label for="movil">Celular<span class="asterisco">*</span>:</label>
      <input type="text" id="movil">

      <label for="comentario">Diganos como podemos ayudarlo <span class="asterisco">*</span>:</label>
      <textarea name="comentario" id="comentario" cols="30" rows="10"></textarea>

      <input type="submit" value="Enviar formulario">
    </form>
  </section>
</article>
@endsection