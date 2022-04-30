<?php
// phpinfo(); Mostrar la información de la versión de PHP

// Variables y constantes
$saludo = "mundo!";

// incrustar desde el php elementos HTML
echo "<h1>Hola, $saludo</h1>"; // Con las dobles comillas se puede incrustar variables dentro de la cadena
echo "<br>";
echo '<h2>Hola, ' . $saludo . '</h2>'; // Con las comillas simples se concatena variables con el punto

// echo "<script>alert('Hola, $saludo');</script>";  // Se puede incrustar JavaScript

// tablas y acumuladores
$table_datos_personales = "<table border='2'>";
$table_datos_personales .= "<thead>"; // el .= es un acumulador para cadenas de texto, similar a += en otros lenguajes
$table_datos_personales .= "<tr>";
$table_datos_personales .= "<th>Cédula";
$table_datos_personales .= "</th>";
$table_datos_personales .= "<th>Nombres";
$table_datos_personales .= "</th>";
$table_datos_personales .= "<th>Apellidos";
$table_datos_personales .= "</th>";
$table_datos_personales .= "<th>Correo";
$table_datos_personales .= "</th>";
$table_datos_personales .= "</tr>";
$table_datos_personales .= "</thead>";
$table_datos_personales .= "<tbody>";
$table_datos_personales .= "<tr>";
$table_datos_personales .= "<td>1721009692";
$table_datos_personales .= "</td>";
$table_datos_personales .= "<td>David E";
$table_datos_personales .= "</td>";
$table_datos_personales .= "<td>Galarza G";
$table_datos_personales .= "</td>";
$table_datos_personales .= "<td>dgalarza@itsmet.edu.ec";
$table_datos_personales .= "</td>";
$table_datos_personales .= "</tr>";
$table_datos_personales .= "<tr>";
$table_datos_personales .= "<td>1721009693";
$table_datos_personales .= "</td>";
$table_datos_personales .= "<td>Carlos A";
$table_datos_personales .= "</td>";
$table_datos_personales .= "<td>Fernandez M";
$table_datos_personales .= "</td>";
$table_datos_personales .= "<td>carlos@email.com";
$table_datos_personales .= "</td>";
$table_datos_personales .= "</tr>";
$table_datos_personales .= "</tbody>";
$table_datos_personales .= "</table>";

echo $table_datos_personales;

// formularios y acumuladores

$form_vehicular = "<form>"; // Se puede utilizar snake-case o camel-case para el nombre de las variables
$form_vehicular .= "<table>";
$form_vehicular .= "<tr>";
$form_vehicular .= "<td>";
$form_vehicular .= "<label>";
$form_vehicular .= "Placa:";
$form_vehicular .= "</label>";
$form_vehicular .= "</td>";
$form_vehicular .= "<td>";
$form_vehicular .= "<input type='text' id='placa'/>";
$form_vehicular .= "</td>";
$form_vehicular .= "</tr>";
$form_vehicular .= "<tr>";
$form_vehicular .= "<td>";
$form_vehicular .= "<label>";
$form_vehicular .= "Marca:";
$form_vehicular .= "</label>";
$form_vehicular .= "</td>";
$form_vehicular .= "<td>";
$form_vehicular .= "<input type='text' id='marca'/>";
$form_vehicular .= "</td>";
$form_vehicular .= "</tr>";
$form_vehicular .= "<tr>";
$form_vehicular .= "<td>";
$form_vehicular .= "<label>";
$form_vehicular .= "Modelo:";
$form_vehicular .= "</label>";
$form_vehicular .= "</td>";
$form_vehicular .= "<td>";
$form_vehicular .= "<input type='text' id='modelo'/>";
$form_vehicular .= "</td>";
$form_vehicular .= "</tr>";
$form_vehicular .= "<tr>";
$form_vehicular .= "<td>";
$form_vehicular .= "<label>";
$form_vehicular .= "Color:";
$form_vehicular .= "</label>";
$form_vehicular .= "</td>";
$form_vehicular .= "<td>";
$form_vehicular .= "<input type='text' id='color'/>";
$form_vehicular .= "</td>";
$form_vehicular .= "</tr>";
$form_vehicular .= "<tr>";
$form_vehicular .= "<td>";
$form_vehicular .= "</td>";
$form_vehicular .= "<td>";
$form_vehicular .= "<input type='button' value='Guardar' onclick='capturarDatos()'/>";
$form_vehicular .= "</td>";
$form_vehicular .= "</tr>";
$form_vehicular .= "</table>";
$form_vehicular .= "</form>";

$script =
    "<script>
  const licensePlateInput = document.getElementById('placa');
  const trademarkInput = document.getElementById('marca');
  const modelInput = document.getElementById('modelo');
  const colorInput = document.getElementById('color');

  const capturarDatos = () => {
    console.log(`Placa: \${licensePlateInput.value}`);
    console.log(`Marca: \${trademarkInput.value}`);
    console.log(`Modelo: \${modelInput.value}`);
    console.log(`Color: \${colorInput.value}`);
  }
</script>";

echo $form_vehicular;
echo $script;
