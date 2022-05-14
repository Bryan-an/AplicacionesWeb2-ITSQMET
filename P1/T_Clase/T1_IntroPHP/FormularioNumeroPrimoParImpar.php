<?php include "header.php";?>
    <div class="container p-4">
      <h1 class="text-center">Ejercicio 5: Núemero primo, par, impar</h1>
      <div class="row p-4">
        <div class="col-4 offset-4">
          <form>
            <div class="form-group">
              <label for="number">Ingrese un número:</label>
              <input
                type="number"
                name="number"
                id="number"
                class="form-control"
              />
            </div>
            <div class="d-flex justify-content-around">
              <button
                class="btn btn-primary"
                type="button"
                onclick="isEvenOrOdd()"
              >
                Par o impar
              </button>
              <button class="btn btn-primary" type="button" onclick="isPrime()">
                Número primo
              </button>
            </div>
          </form>
          <div class="pt-5" id="result"></div>
        </div>
      </div>
    </div>

    <script>
      const isEvenOrOdd = () => {
        let number = document.getElementById("number").value;

        calculate({
          n: number,
        });
      };

      const isPrime = () => {
        let number = document.getElementById("number").value;

        calculate({
          n1: number,
        });
      };

      const calculate = (data) => {
        const resultContainer = document.getElementById("result");

        $.ajax({
          data,
          url: "./php/ParImpar.php",
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
