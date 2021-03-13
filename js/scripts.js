(function () {
  window.addEventListener(
    "load",
    function () {
      const forms = document.getElementsByClassName("needs-validation");
      const formulario = document.getElementById("formulario-contacto");
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
              //cambiar por jquery
              const ajax = new XMLHttpRequest();
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
