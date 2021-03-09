<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <title>Nova Joyeria | Joyas de otro mundo</title>
    <link href="css/css.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/styles.css" />
  </head>
  <body>
    <header class="encabezado-sitio container">
      <div class="row justify-content-md-between align-items-center">
        <div class="col-lg-4">
          <a href="index.php"> Nova Joyeria </a>
        </div>
        <div class="col-lg-4">
          <nav class="sociales text-center text-lg-right">
            <ul>
              <li>
                <a href="http://facebook.com">
                  <span class="sr-only"> Facebook</span>
                </a>
              </li>
              <li>
                <a href="http://twitter.com">
                  <span class="sr-only"> Twitter</span>
                </a>
              </li>
              <li>
                <a href="http://instagram.com">
                  <span class="sr-only"> Instagram</span>
                </a>
              </li>
              <li>
                <a href="http://pinterest.com">
                  <span class="sr-only"> Pinterest</span>
                </a>
              </li>
              <li>
                <a href="http://youtube.com">
                  <span class="sr-only"> YouTube</span>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </header>

    <div class="navegacion mt-3 py-1">
      <nav class="nav-principal navbar navbar-expand-md navbar-light bg-faded">
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#nav_principal"
          aria-label="Mostrar Navegacion"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <a href="#" class="navbar-brand d-lg-none">Nova Joyeria</a>
        <div class="container">
          <div class="collapse navbar-collapse w-100" id="nav_principal">
            <ul class="nav nav-justified w-100 flex-column flex-sm-row">
              <li class="nav-item">
                <a href="index.php" class="nav-link">Inicio</a>
              </li>
              <li class="nav-item">
                <a href="nosotros.php" class="nav-link">Nosotros</a>
              </li>
              <li class="nav-item">
                <a href="servicios.php" class="nav-link">Servicios</a>
              </li>
              <li class="nav-item">
                <a href="productos.php" class="nav-link">Productos</a>
              </li>
              <li class="nav-item">
                <a href="contacto.php" class="nav-link">Contacto</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>

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
                  href="nosotros.php"
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
                  href="servicios.php"
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
        <div class="col-md-3 mb-4">
          <div class="card">
            <a href="#">
              <img class="card-img-top" src="img/producto_mini_1.jpg" />
              <div class="card-body">
                <h3 class="card-title text-center text-uppercase">
                  Producto 1
                </h3>
                <p class="card-text text-uppercase">
                  Curabitur egestas sit amet urna nec blandit. Curabitur egesta.
                </p>
                <p class="precio mb-0 lead text-center">$25</p>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-3 mb-4">
          <div class="card">
            <a href="#">
              <img class="card-img-top" src="img/producto_mini_2.jpg" />
              <div class="card-body">
                <h3 class="card-title text-center text-uppercase">
                  Producto 2
                </h3>
                <p class="card-text text-uppercase">
                  Curabitur egestas sit amet urna nec blandit. Curabitur egesta.
                </p>
                <p class="precio mb-0 lead text-center">$25</p>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-3 mb-4">
          <div class="card">
            <a href="#">
              <img class="card-img-top" src="img/producto_mini_3.jpg" />
              <div class="card-body">
                <h3 class="card-title text-center text-uppercase">
                  Producto 3
                </h3>
                <p class="card-text text-uppercase">
                  Curabitur egestas sit amet urna nec blandit. Curabitur egesta.
                </p>
                <p class="precio mb-0 lead text-center">$25</p>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-3 mb-4">
          <div class="card">
            <a href="#">
              <img class="card-img-top" src="img/producto_mini_4.jpg" />
              <div class="card-body">
                <h3 class="card-title text-center text-uppercase">
                  Producto 4
                </h3>
                <p class="card-text text-uppercase">
                  Curabitur egestas sit amet urna nec blandit. Curabitur egesta.
                </p>
                <p class="precio mb-0 lead text-center">$25</p>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>

    <div class="citas container-fluid py-5">
      <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6 text-center">
          <h3 class="text-uppercase">Realiza una cita</h3>
          <p class="mt-5">
            Agenda una cita para que visites nuestras instalaciones, tienes a
            tus disponibilidad 8 sucursales para que escojas la que más cerca
            que este de ti. ¡Ven y visítanos! Te esperamos en Nova Joyería.
          </p>
          <a href="contacto.php" class="btn btn-primary mt-3 text-uppercase"
            >Leer más</a
          >
        </div>
      </div>
    </div>

    