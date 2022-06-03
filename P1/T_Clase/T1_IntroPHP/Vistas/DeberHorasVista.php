<?php include "../header.php";?>

<div class="container p-4">
      <h1 class="text-center">Deber: Horas trabajadas</h1>
      <div class="row p-4">
        <div class="col-4 offset-4">
          <form>
            <div class="form-group">
              <label for="start">Hora de entrada:</label>
              <input type="time" name="start" id="start" class="form-control" />
            </div>
            <div class="form-group">
              <label for="end">Hora de salida:</label>
              <input type="time" name="end" id="end" class="form-control" />
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
        let start = document.getElementById("start").value;
        let end = document.getElementById("end").value;
        const resultContainer = document.getElementById("result");

        $.ajax({
          data: {
            start,
            end
          },
          url: "../Controlador/DeberHorasControlador.php",
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