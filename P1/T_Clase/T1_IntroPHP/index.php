<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form</title>

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
  <hr>
  <div align="center">
    <h1>Calculadora tres números</h1>
    <form>
      <table>
        <tr>
          <td>
            <label>Num 1:</label>
          </td>
          <td>
            <input type="number" name="" id="n1">
          </td>
        </tr>
        <tr>
          <td>
            <label>Num 2:</label>
          </td>
          <td>
            <input type="number" name="" id="n2">
          </td>
        </tr>
        <tr>
          <td>
            <label>Num 3:</label>
          </td>
          <td>
            <input type="number" name="" id="n3">
          </td>
        </tr>
        <tr>
          <td>
            <label>Operación:</label>
          </td>
          <td>
            <select name="" id="op">
              <option value="sum">Suma</option>
              <option value="res">Resta</option>
              <option value="mul">Multiplicación</option>
              <option value="div">División</option>
            </select>
          </td>
        </tr>
        <tr>
          <td>
          </td>
          <td>
            <button type="button" onclick="calcular()">Calcular</button>
          </td>
        </tr>
      </table>
    </form>
  </div>

  <script>
    function calcular() {
      let n1 = document.getElementById('n1').value;
      let n2 = document.getElementById('n2').value;
      let n3 = document.getElementById('n3').value;
      let op = document.getElementById('op').value;

      $.ajax({
        data: {
          n1: n1,
          n2: n2,
          n3: n3,
          op: op
        },
        url: "./php/calcular.php",
        async: true,
        type: "GET",
        dataType: "text",
        success: function (datos) {
          alert(datos);
        }
      })
    }
  </script>
</body>
</html>
