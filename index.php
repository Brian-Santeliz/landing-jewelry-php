  <?php 
  $title = "Inicio";
  include "templates/header.php";
  include "templates/navbar.php";
  include "controller/funcion.php";
  ?>
<div class="container">
      <div
        id="slider-principal"
        class="carousel slide mt-4"
        data-ride="carousel"
      >
        <ol class="carousel-indicators">
          <li
            data-target="#slider-principal"
            data-slide-to="0"
            class="active"
          ></li>
          <li data-target="#slider-principal" data-slide-to="1"></li>
          <li data-target="#slider-principal" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active">
            <img src="img/slider_1.jpg" alt="Nuestras Instalaciones" />
            <div class="carousel-caption">
              <h3 class="text-uppercase">Nuevas Sucursales</h3>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/slider_2.jpg" alt="Conoce nuestros servicios" />
            <div class="carousel-caption">
              <h3 class="text-uppercase">Conoce nuestros servicios</h3>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/slider_3.jpg" alt="Promoción" />
            <div class="carousel-caption">
              <h3 class="text-uppercase">
                Apertura de sitio web, 2x1 en todos las joyas de diamante
              </h3>
            </div>
          </div>
        </div>

        <a
          href="#slider-principal"
          class="carousel-control-prev"
          data-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Anterior</span>
        </a>
        <a
          href="#slider-principal"
          class="carousel-control-next"
          data-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Anterior</span>
        </a>
      </div>
    </div>

    <section class="nuevo-sitio py-5">
      <h1 class="text-center text-uppercase mt-4 encabezado">
        <span class="text-lowercase d-block">bienvenido a nuestro </span> sitio
        Web
      </h1>
      <p class="text-center mt-4">
        ¿Búscas algo hermoso para obsequiar pero no sabes que? <br />
        En Nova Joyería tenemos la solución.
      </p>
    </section>

    <div class="container mb-5">
      <div class="row">
        <div class="col-md-4 text-center mb-4">
          <div class="imagen-servicio">
            <img src="img/nosotros_1.jpg" class="img-fluid" />
            <div class="row no-gutters justify-content-center">
              <div class="col-md-10 pt-4 servicio-info">
                <h2 class="text-center text-uppercase encabezado">
                  <span class="text-lowercase d-block">Conoce sobre</span>
                  nosotros
                </h2>
                <a
                  href="nosotros.html"
                  class="btn btn-primary btn-block text-uppercase mt-4 py-3"
                  >Leer más</a
                >
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 text-center mb-4">
          <div class="imagen-servicio">
            <img src="img/servicios_1.jpg" class="img-fluid" />
            <div class="row no-gutters justify-content-center">
              <div class="col-md-10 pt-4 servicio-info">
                <h2 class="text-center text-uppercase encabezado">
                  <span class="text-lowercase d-block">Conoce nuestros</span>
                  servicios
                </h2>
                <a
                  href="servicios.html"
                  class="btn btn-primary btn-block text-uppercase mt-4 py-3"
                  >Leer más</a
                >
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 text-center mb-4">
          <div class="imagen-servicio">
            <img src="img/productos_1.jpg" class="img-fluid" />
            <div class="row no-gutters justify-content-center">
              <div class="col-md-10 pt-4 servicio-info">
                <h2 class="text-center text-uppercase encabezado">
                  <span class="text-lowercase d-block">Mira nuestros</span>
                  productos
                </h2>
                <a
                  href="productos.php"
                  class="btn btn-primary btn-block text-uppercase mt-4 py-3"
                  >Leer más</a
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="horario">
      <div class="container">
        <div class="row">
          <div class="col-md-6 p-4">
            <h2 class="text-center text-uppercase mt-5">Horarios</h2>
            <p class="text-center mt-3 lead">
              Tenemos horarios flexibles y cómodos para ti. ¡Nuestra prioridad
              es atenderte en cualquier momento!
            </p>
            <table class="table table-hover text-center mt-3">
              <thead>
                <tr>
                  <th class="text-center">Día</th>
                  <th class="text-center">De</th>
                  <th class="text-center">Hasta</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Lunes</td>
                  <td>09:00</td>
                  <td>19:00</td>
                </tr>
                <tr>
                  <td>Martes</td>
                  <td>09:00</td>
                  <td>19:00</td>
                </tr>
                <tr>
                  <td>Miércoles</td>
                  <td>09:00</td>
                  <td>19:00</td>
                </tr>
                <tr>
                  <td>Jueves</td>
                  <td>09:00</td>
                  <td>19:00</td>
                </tr>
                <tr>
                  <td>Viernes</td>
                  <td>09:00</td>
                  <td>19:00</td>
                </tr>
                <tr>
                  <td>Sábado</td>
                  <td>Cerrado</td>
                  <td>Cerrado</td>
                </tr>
                <tr>
                  <td>Domingo</td>
                  <td>Cerrado</td>
                  <td>Cerrado</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="col-md-6 bg-horario"></div>
        </div>
      </div>
    </div>

    <section class="productos container py-5">
      <h2 class="encabezado text-center text-uppercase mt-4">
        <span class="text-lowercase d-block">nuestros</span> productos
      </h2>
      <div class="row py-5">
      <?php
        $productos_db = obtener_productos(4);
        while($producto = $productos_db->fetch_assoc() ){
    ?>
        <div class="col-md-3 mb-4">
          <div class="card">
            <a href="producto.php?productoId=<?php echo $producto["id"]; ?>">
              <img class="card-img-top" src="img/<?php echo $producto[imagen_mini] ?>" />
              <div class="card-body">
                <h3 class="card-title text-center text-uppercase">
                 <?php echo $producto["nombre"] ?>
                </h3>
                <p class="card-text text-uppercase">
                <?php echo $producto["descripcion_corta"] ?>
                </p>
                <p class="precio mb-0 lead text-center">
                $<?php echo $producto["precio"] ?>
                </p>
              </div>
            </a>
          </div>
        </div>
        <?php } ?>
      </div>
    </section>

    <?php 
    include "templates/cita.php";
    ?>

    <?php 
    include "templates/footer.php";
    ?>