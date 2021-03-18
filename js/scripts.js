(function () {
  window.addEventListener(
    "load",
    function () {
      const forms = document.getElementsByClassName("needs-validation");
      const formulario = document.getElementById("formulario-contacto");
      const nombre = document.getElementById("nombre");
      const email = document.getElementById("email");
      const mensaje = document.getElementById("mensaje");
      const footer = document.getElementById("footer");
      const fecha = new Date().getFullYear();
      footer.innerHTML = `${fecha}`;
      const validation = Array.prototype.filter.call(forms, function (form) {
        formulario.addEventListener(
          "submit",
          function (event) {
            event.preventDefault();
            if (form.checkValidity() === false) {
              event.stopPropagation();
            } else {
              const data = {
                nombre: nombre.value,
                email: email.value,
                mensaje: mensaje.value,
              };
              $.ajax({
                type: "POST",
                url: "./controller/contacto.php",
                data,
                success: () => {
                  formulario.reset();
                  form.classList.remove("was-validated");
                  Swal.fire(
                    "Recibido",
                    "¡Gracias por contactarnos!",
                    "success"
                  );
                },
              });
            }
            form.classList.add("was-validated");
          },
          false
        );
      });
    },
    false
  );
})();
