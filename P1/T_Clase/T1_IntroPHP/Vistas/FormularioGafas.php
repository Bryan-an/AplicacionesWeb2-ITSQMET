<?php include "../header.php";?>
    <div class="container p-4">
      <h1 class="text-center">Ejercicio 2: Venta de gafas de sol</h1>
      <div class="row p-4">
        <div class="col-4 offset-4">
          <form>
            <div class="form-group">
              <label for="cant">Cantidad:</label>
              <input type="number" name="cant" id="cant" class="form-control" />
            </div>
            <div class="form-group">
              <label for="prec">Precio:</label>
              <input type="number" name="prec" id="prec" class="form-control" />
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
        let quantity = document.getElementById("cant").value;
        let price = document.getElementById("prec").value;
        const resultContainer = document.getElementById("result");

        $.ajax({
          data: {
            cant: quantity,
            prec: price,
          },
          url: "../Controlador/VentaGafas.php",
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
