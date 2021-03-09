  <?php 
    include "templates/header.php";
    include "templates/navbar.php";
  ?>
    <div class="container pt-4">
      <div class="row no-gutters">
        <div class="col-12 hero">
          <img src="img/servicios.jpg" class="img-fluid" />
          <h2 class="text-uppercase d-none d-md-block py-3 px-5">Servicios</h2>
        </div>
      </div>
    </div>

    <div class="container pt-4">
      <div class="row">
        <main class="col-lg-8 contenido-principal">
          <h2 class="d-block d-md-none text-uppercase text-center">
            Servicios
          </h2>

          <div id="servicios">
            <div class="card">
              <div class="card-header" id="servicio1">
                <h2 class="mb-0">
                  <button
                    class="btn btn-link"
                    data-toggle="collapse"
                    data-target="#descripcion1"
                    aria-expanded="true"
                    aria-controls="#descripcion1"
                  >
                    Arreglos & Decoraciones 
                  </button>
                </h2>
              </div>
              <div
                id="descripcion1"
                class="collapse show"
                aria-labelledby="servicio1"
                data-parent="#servicios"
              >
                <div class="card-body">
                  <p>
                    Se realizan todo tipo de arreglos en artículos de cualquier
                    tipo en oro, plata y todo tipo de metales (pendientes,
                    collares, cadenas, pulseras, anillos,candelabros,
                    cuberterias, bandejas, marcos, etc). Empleamos para ello
                    todo tipo de herramientas específicas con el objetivo de dar
                    el mejor acabado garantizado, empleamos soldaduras con
                    soplete, oxhidrico, soldadura por láser, soldadura TIG.
                    Pulimos y limpiamos todo aquello que por el uso o el paso
                    del tiempo estén sucias y hayan perdido el lustre.
                    Presupuestos de arreglo siempre sin compromiso y ajustádos a
                    cada trabajo ofreciendo garantía de precios competitivos.
                    Puedes enviarnos tus arreglos desde cualquier punto del
                    país, nos encargaremos de arreglarlo y devolvertelo de la
                    manera mas rapida y comoda posible, sin salir de casa.
                  </p>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header" id="servicio2">
                <h2 class="mb-0">
                  <button
                    class="btn btn-link"
                    data-toggle="collapse"
                    data-target="#descripcion2"
                    aria-expanded="false"
                    aria-controls="#descripcion2"
                  >
                    Transformaciones de Joyas
                  </button>
                </h2>
              </div>
              <div
                id="descripcion2"
                class="collapse"
                aria-labelledby="servicio2"
                data-parent="#servicios"
              >
                <div class="card-body">
                  <p>
                    Haz que tus viejas o aburridas joyas luzcan modernas como
                    recien compradas o fabricadas. Transforma aquellas que ya no
                    te pones en actuales y modernos complementos que lucir en
                    ocasiones especiales, lucir en el dia a dia o regalar a esa
                    persona especial a modo de recuerdo. Puedes consultarnos, y
                    si deseas acompañarnos personalmente en el proceso
                    supervisando y colaborando en el mismo. Realización de
                    presupuestos sin compromiso. Pulimos y limpiamos todo
                    aquello que por el uso o el paso del tiempo estén sucias y
                    hayan perdido el lustre.
                  </p>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header" id="servicio3">
                <h2 class="mb-0">
                  <button
                    class="btn btn-link"
                    data-toggle="collapse"
                    data-target="#descripcion3"
                    aria-expanded="false"
                    aria-controls="#descripcion3"
                  >
                    Asesoramiento & creación 3D
                </h2>
              </div>
              <div
                id="descripcion3"
                class="collapse"
                aria-labelledby="servicio3"
                data-parent="#servicios"
              >
                <div class="card-body">
                  <p>
                    Que nuestra experiencia te acompañe Más de dos décadas de
                    experiencia hacen que podamos ofrecer a nuestros clientes un
                    servicio de asesoramiento que facilita que la elección de
                    las piezas sea la más adecuada, teniendo en cuenta las
                    preferencias y el estilo de vida de cada uno. Empleamos
                    moderna tecnología en 3D para creación de diseños por
                    ordenador que se reproducen fielmente posteriormente en
                    modelos reales en cera. Te ayudaremos y asesoraremos desde
                    la primera idea hasta la consecución y obtención del
                    producto final, contando con tu colaboración (si así lo
                    deseas) desde principio a fin.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </main>

        <aside class="col-lg-4 pt-4 pt-lg-0">
          <div class="sidebar p-3">
            <h2 class="text-center text-uppercase mt-4">Nuevos Clientes</h2>
            <p class="lead text-center mt-4">
              Recibe 20% de descuento con este cupón
            </p>

            <div class="cupon px-2 py-5 mt-5">
              <p class="text-uppercase text-center mb-0">
                <span class="display-4">20% Descuento</span> <br />
                en todos los servicios
              </p>
            </div>
          </div>
        </aside>
      </div>
    </div>

    
    <?php 
    include "templates/cita.php";
    ?>
    <?php 
    include "templates/footer.php";
    ?>