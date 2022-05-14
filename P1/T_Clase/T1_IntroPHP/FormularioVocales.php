<?php include "header.php";?>
    <div class="container p-4">
      <h1 class="text-center">Ejercicio 8: Vocales</h1>
      <div class="row p-4">
        <div class="col-4 offset-4">
          <form>
            <div class="form-group">
              <label for="letra">Letra:</label>
              <input
                type="text"
                name="letra"
                id="letra"
                class="form-control"
                required
              />
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
        let letra = document.getElementById("letra").value;
        const resultContainer = document.getElementById("result");

        $.ajax({
          data: {
            letra,
          },
          url: "./php/VocalNoVocal.php",
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
