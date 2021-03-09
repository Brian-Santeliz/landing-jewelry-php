<?php 
    include "templates/header.php";
    include "templates/navbar.php";
  ?>

    <div class="container pt-4">
      <div class="row no-gutters">
        <div class="col-12 hero">
          <img src="img/nosotros.jpg" class="img-fluid" />
          <h2 class="text-uppercase d-none d-md-block py-3 px-5">Nosotros</h2>
        </div>
      </div>
    </div>

    <div class="container pt-4">
      <div class="row">
        <main class="col-lg-8 contenido-principal">
          <h2 class="d-block d-md-none text-uppercase text-center">Nosotros</h2>
          <p>
            Somos una empresa que nos caracterizamos por nuestras prendas de
            alta calidad. Contamos con una alta gama de joyas que van desde
            anillos de propuesta hasta pequeños broches. Tenemos 8 sucursales
            ubicadas en todo el territorio nacional, donde te espera nuestro
            personal para darte la mejor bienvenida y que goces el placer de
            comprar algo innovador y elegante. ¡Si buscas algo hermoso para
            obsequiar en Nova Joyería lo encontrarás!.
          </p>

          <p>
            Nova Joyería se preocupa por tu salud. Y es por eso que contamos con
            servicio delivery para tu mayor comodidad. Innova con Nova Joyería:
            Además puedes darnos sugerencias de las piezas y ayudarnos a crear
            algunas de ellas, la mejor será publicada en nuestro web site y
            llevará tu nombre.
          </p>

          <h1 class="text-center text-uppercase mt-5 encabezado">
            <span class="text-lowercase d-block">conoce nuestras </span>
            instalaciones
          </h1>
          <div class="imagenes pt-4">
            <a href="#" data-target="#imagen_1" data-toggle="modal">
              <img src="img/seccion-local-mini.jpg" class="img-fluid" />
            </a>
            <a href="#" data-target="#imagen_2" data-toggle="modal">
              <img src="img/local_mini.jpg" class="img-fluid" />
            </a>
            <a href="#" data-target="#imagen_3" data-toggle="modal">
              <img src="img/imagen_mini.jpg" class="img-fluid" />
            </a>

            <div
              class="modal fade"
              id="imagen_1"
              tabindex="-1"
              role="dialog"
              aria-labelledby="Imagen 1"
              aria-hidden="true"
            >
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-body">
                    <img src="img/seccion-local-grande.jpg" class="img-fluid" />
                  </div>
                </div>
              </div>
            </div>
            <div
              class="modal fade"
              id="imagen_2"
              tabindex="-1"
              role="dialog"
              aria-labelledby="Imagen 2"
              aria-hidden="true"
            >
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-body">
                    <img src="img/local_grande.jpg" class="img-fluid" />
                  </div>
                </div>
              </div>
            </div>
            <div
              class="modal fade"
              id="imagen_3"
              tabindex="-1"
              role="dialog"
              aria-labelledby="Imagen 3"
              aria-hidden="true"
            >
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-body">
                    <img src="img/imagen_grande.jpg" class="img-fluid" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </main>

        <aside class="col-lg-4 pt-4 pt-lg-0 align-self-start">
          <div class="sidebar horario">
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
        </aside>
      </div>
    </div>
    <?php 
    include "templates/footer.php";
    ?>