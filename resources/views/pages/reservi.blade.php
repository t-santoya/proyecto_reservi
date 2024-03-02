@extends("layout.app")
@section("contenido1")
<!-- Cuerpo del documento -->
<main>
  <header>
    <div class="container">
      <h1>Reservi</h1>
    </div>
  </header>
</main>



<article id="pages" class="container">
  <section>
    <h2>Historia</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam obcaecati voluptas minima nisi quas! Corrupti
      incidunt dolorum aperiam quibusdam minus quae. Nulla repudiandae officiis ipsum distinctio exercitationem vero
      rem maiores?</p>
    <p>Commodi natus, blanditiis autem dolores dolore alias necessitatibus error velit soluta illum odio praesentium
      tempore omnis sunt. Repudiandae in placeat delectus expedita natus ea, veritatis, eveniet accusantium, earum
      ducimus enim!</p>
    <p>Voluptates sit rem similique nihil eum corporis minima molestiae eligendi cum distinctio maxime quod ipsum
      consectetur possimus fugiat reprehenderit ipsa dolore quo ullam impedit nesciunt, quaerat voluptatem illo
      assumenda? Saepe.</p>

    <h2>Principios</h2>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non, magnam dolor? Beatae consectetur quibusdam,
      temporibus quisquam voluptatem eligendi, excepturi, quis possimus ab repellendus porro laudantium culpa libero
      sequi nobis ut.</p>
    <p>Cumque distinctio ab inventore, voluptas vero, ratione fugiat nihil repudiandae harum tempora quae odit vel
      minima illo ducimus alias impedit placeat autem eligendi dignissimos quam. Nulla qui atque aliquid
      praesentium?</p>
    <p>Voluptatibus cum ex autem explicabo provident repudiandae. Quod, nisi, quae ratione blanditiis soluta odit
      praesentium exercitationem illum assumenda impedit tempore eveniet consequatur pariatur dolor reiciendis ipsa
      et velit sapiente harum?</p>
  </section>
</article>


<article id="pages" class="container">
  <aside>
    <h3>Casos de estudio</h3>
    <ul>
      <li><a href="">Lorem ipsum impedit repellendus explicabo?</a></li>
      <li><a href="">Lorem ipsum impedit repellendus explicabo?</a></li>
      <li><a href="">Lorem ipsum impedit repellendus explicabo?</a></li>
      <li><a href="">Lorem ipsum impedit repellendus explicabo?</a></li>
      <li><a href="">Lorem ipsum impedit repellendus explicabo?</a></li>
    </ul>
    <h3>Redes sociales</h3>
    <div id="socialMedia">
      <a href=""><i class="fa-brands fa-facebook"></i></a>
      <a href=""><i class="fa-brands fa-twitter"></i></a>
      <a href=""><i class="fa-brands fa-linkedin"></i></a>
    </div>
    <h3>Newsletter</h3>
    <div id="boletin">
      <p>Ingrese su direccion de correo electronico para recibir actualizaciones</p>

      <form action="" method="post">
        <label for="correo">Correo electronico</label>
        <input type="email" name="email" id="email">
        <input type="submit" value="Enviar">
      </form>
    </div>
  </aside>
</article>
@endsection