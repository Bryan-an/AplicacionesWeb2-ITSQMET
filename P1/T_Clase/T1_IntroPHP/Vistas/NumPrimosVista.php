<?php include "../header.php";?>

<div class="container p-4">
      <h1 class="text-center">Ejercicio 12: 10 números primos</h1>
      <div class="row p-4">
        <div class="col-4 offset-4">
          <form>
            <div class="form-group">
              <label for="initNumber">Número inicial:</label>
              <input type="number" name="initNumber" id="initNumber" class="form-control" />
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
        let initNumber = document.getElementById("initNumber").value;
        const resultContainer = document.getElementById("result");

        $.ajax({
          data: {
            initNumber
          },
          url: "../Controlador/NumPrimosControlador.php",
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