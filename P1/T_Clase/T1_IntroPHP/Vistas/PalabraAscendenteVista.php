<?php include "../header.php";?>

<div class="container p-4">
      <h1 class="text-center">Ejercicio 17: Palabra ascendente</h1>
      <div class="row p-4">
        <div class="col-4 offset-4">
          <form>
            <div class="form-group">
              <label for="palabra">Palabra:</label>
              <input type="text" name="palabra" id="palabra" class="form-control"/>
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
        let palabra = document.getElementById("palabra").value;
        const resultContainer = document.getElementById("result");

        $.ajax({
            data: {
                palabra
            },
            url: "../Controlador/PalabraAscendenteControlador.php",
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