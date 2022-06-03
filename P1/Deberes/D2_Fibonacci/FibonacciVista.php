<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Deber</title>
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
      <h1 class="text-center">Automatizar Fibonacci</h1>
      <div class="row p-4">
        <div class="col-4 offset-4">
          <form>
            <div class="form-group">
              <label for="posF">Posición final:</label>
              <input type="number" name="posF" id="posF" class="form-control" />
            </div>
            <button class="btn btn-primary" type="button" onclick="calculate()">
              Calcular
            </button>
          </form>
        </div>
      </div>
      <div class="pt-5 text-center" id="result"></div>
    </div>

    <script>
      const calculate = () => {
        let posF = document.getElementById("posF").value;
        const resultContainer = document.getElementById("result");

        $.ajax({
          data: {
            posF,
          },
          url: "./FibonacciControlador.php",
          async: true,
          type: "GET",
          dataType: "text",
          success: function (datos) {
            resultContainer.innerHTML = datos;
          },
        });
      };
    </script>

</body>
</html>
