<?php include "header.php";?>
    <div class="container p-4">
      <h1 class="text-center">Ejercicio 7: Votación</h1>
      <div class="row p-4">
        <div class="col-4 offset-4">
          <form>
            <div class="form-group">
              <label for="voto">Voto:</label>
              <select class="form-control" id="voto">
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
              </select>
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
        let voto = document.getElementById("voto").value;
        const resultContainer = document.getElementById("result");

        $.ajax({
          data: {
            voto,
          },
          url: "./php/Votacion.php",
          async: true,
          type: "GET",
          dataType: "text",
          success: function (datos) {
            resultContainer.innerHTML = datos;
          },
        });
      };
    </script>
<?php include "footer.php";?>