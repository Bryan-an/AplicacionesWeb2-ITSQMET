<?php include "../header.php";?>

<div class="container p-4">
      <h1 class="text-center">Ejercicio 16: Claves</h1>
      <div class="row p-4">
        <div class="col-4 offset-4">
          <form>
            <div class="form-group">
              <label for="claveO">Clave:</label>
              <input type="password" name="claveO" id="claveO" class="form-control"/>
            </div>
            <div class="form-group">
              <label for="claveC">Confirme la clave:</label>
              <input type="password" name="claveC" id="claveC" class="form-control"/>
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
        let claveO = document.getElementById("claveO").value;
        let claveC = document.getElementById("claveC").value;
        const resultContainer = document.getElementById("result");

        $.ajax({
            data: {
                claveO,
                claveC
            },
            url: "../Controlador/ClavesControlador.php",
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