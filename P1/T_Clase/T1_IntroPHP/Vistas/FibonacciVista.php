<?php include "../header.php";?>

<div class="container p-4">
      <h1 class="text-center">Ejercicio 9: Fibonacci</h1>
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
          <div class="pt-5" id="result"></div>
        </div>
      </div>
    </div>

    <script>
      const calculate = () => {
        let posF = document.getElementById("posF").value;
        const resultContainer = document.getElementById("result");

        $.ajax({
          data: {
            posF,
          },
          url: "../Controlador/FibonacciControlador.php",
          async: true,
          type: "GET",
          dataType: "text",
          success: function (datos) {
            resultContainer.innerHTML = datos;
          },
        });
      };
    </script>

<?php include "../footer.php";?>