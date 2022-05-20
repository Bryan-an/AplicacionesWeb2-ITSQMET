<?php include "../header.php";?>

<div class="container p-4">
      <h1 class="text-center">Ejercicio 11: 10 números pares</h1>
      <div class="row p-4">
        <div class="col-4 offset-4">
          <form>
            <div class="form-group">
              <label for="nI">Número inicial:</label>
              <input type="number" name="nI" id="nI" class="form-control" />
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
        let nI = document.getElementById("nI").value;
        const resultContainer = document.getElementById("result");

        $.ajax({
          data: {
            nI
          },
          url: "../Controlador/NumParesControlador.php",
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