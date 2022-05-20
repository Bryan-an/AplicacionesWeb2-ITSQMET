<?php include "../header.php";?>

<div class="container p-4">
      <h1 class="text-center">Ejercicio 10: Tabla de multiplicar</h1>
      <div class="row p-4">
        <div class="col-4 offset-4">
          <form>
            <div class="form-group">
              <label for="num">Número:</label>
              <input type="number" name="num" id="num" class="form-control" />
            </div>
            <div class="form-group">
              <label for="numf">Número final:</label>
              <input type="number" name="numf" id="numf" class="form-control" />
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
        let num = document.getElementById("num").value;
        let numf = document.getElementById("numf").value;
        const resultContainer = document.getElementById("result");

        $.ajax({
          data: {
            num,
            numf
          },
          url: "../Controlador/TablaMultiplicarControlador.php",
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