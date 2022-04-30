<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ejercicio 1: Promedios</title>

    <!-- Latest compiled and minified CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
    />

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body>
    <div class="container p-4">
      <h1 class="text-center">Ejercicio 1: Promedio</h1>
      <div class="row p-4">
        <div class="col-4 offset-4">
          <form>
            <div class="form-group">
              <label for="nota1">Nota 1:</label>
              <input
                type="number"
                name="nota1"
                id="nota1"
                class="form-control"
              />
            </div>
            <div class="form-group">
              <label for="nota2">Nota 2:</label>
              <input
                type="number"
                name="nota2"
                id="nota2"
                class="form-control"
              />
            </div>
            <div class="form-group">
              <label for="nota3">Nota 3:</label>
              <input
                type="number"
                name="nota3"
                id="nota3"
                class="form-control"
              />
            </div>
            <button class="btn btn-primary" type="button" onclick="calculate()">
              Calcular
            </button>
          </form>
        </div>
      </div>
    </div>

    <script>
      const calculate = () => {
        let nota1 = document.getElementById("nota1").value;
      let nota2 = document.getElementById("nota2").value;
      let nota3 = document.getElementById("nota3").value;

      $.ajax({
        data: {
          nota1,
          nota2,
          nota3,
        },
        url: "./php/promedios.php",
        async: true,
        type: "GET",
        dataType: "text",
        success: function (datos) {
          alert(datos);
        },
      });
      }
    </script>
  </body>
</html>
