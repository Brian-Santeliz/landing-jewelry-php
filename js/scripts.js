(function () {
  window.addEventListener(
    "load",
    function () {
      const forms = document.getElementsByClassName("needs-validation");
      const footer = document.getElementById("footer");
      const fecha = new Date().getFullYear();
      footer.innerHTML = `${fecha}`;
      const validation = Array.prototype.filter.call(forms, function (form) {
        form.addEventListener(
          "submit",
          function (event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
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
