<?php include "../header.php";?>
    <div class="container p-4">
      <h1 class="text-center">Ejercicio 4: Mayor y menor</h1>
      <div class="row p-4">
        <div class="col-4 offset-4">
          <form>
            <div class="form-group">
              <label for="n1">Número 1:</label>
              <input type="number" name="n1" id="n1" class="form-control" />
            </div>
            <div class="form-group">
              <label for="n2">Número 2:</label>
              <input type="number" name="n2" id="n2" class="form-control" />
            </div>
            <div class="form-group">
              <label for="n3">Número 3:</label>
              <input type="number" name="n3" id="n3" class="form-control" />
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
        let n1 = document.getElementById("n1").value;
        let n2 = document.getElementById("n2").value;
        let n3 = document.getElementById("n3").value;
        const resultContainer = document.getElementById("result");

        $.ajax({
          data: {
            n1,
            n2,
            n3,
          },
          url: "../Controlador/CalcularMayorMenor.php",
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
