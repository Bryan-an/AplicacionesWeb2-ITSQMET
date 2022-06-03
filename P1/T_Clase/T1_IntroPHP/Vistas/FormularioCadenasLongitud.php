<?php include "../header.php";?>
    <div class="container p-4">
      <h1 class="text-center">Ejercicio 6: Longitud de cadenas</h1>
      <div class="row p-4">
        <div class="col-4 offset-4">
          <form>
            <div class="form-group">
              <label for="str1">Cadena 1:</label>
              <input type="text" name="str1" id="str1" class="form-control" />
            </div>
            <div class="form-group">
              <label for="str2">Cadena 2:</label>
              <input type="text" name="str2" id="str2" class="form-control" />
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
        let str1 = document.getElementById("str1").value;
        let str2 = document.getElementById("str2").value;
        const resultContainer = document.getElementById("result");

        $.ajax({
          data: {
            str1,
            str2,
          },
          url: "../Controlador/LongitudCadenas.php",
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