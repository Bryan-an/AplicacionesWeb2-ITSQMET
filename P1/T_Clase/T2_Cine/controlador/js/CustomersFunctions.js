const buscarC = () => {
  const b = document.getElementById("buscar").value;

  $.ajax({
    data: {
      crud: "read",
      buscar: b,
    },
    url: "../controlador/CustomersController.php",
    async: true,
    type: "GET",
    dataType: "json",
    success: function (dato) {
      // alert(dato);
      const datoArr = eval(dato);
      let tabla = "<table class='table table-hover'>";
      tabla += "<thead class='thead-dark'>";
      tabla += "<tr>";
      tabla += "<th>ID";
      tabla += "</th>";
      tabla += "<th>NAME";
      tabla += "</th>";
      tabla += "<th>LAST NAME";
      tabla += "</th>";
      tabla += "<th>ID CARD";
      tabla += "</th>";
      tabla += "<th>EMAIL";
      tabla += "</th>";
      tabla += "<th>DATE OF BIRTH";
      tabla += "</th>";
      tabla += "<th>CREATED AT";
      tabla += "</th>";
      tabla += "<th>UPDATED AT";
      tabla += "</th>";
      tabla += "<th>ACTION";
      tabla += "</th>";
      tabla += "</tr>";
      tabla += "</thead>";
      tabla += "<tbody>";

      for (let i = 0; i < datoArr.length; i++) {
        tabla += "<tr>";
        tabla += "<td>" + datoArr[i].id;
        tabla += "</td>";
        tabla += "<td>" + datoArr[i].name;
        tabla += "</td>";
        tabla += "<td>" + datoArr[i].last_name;
        tabla += "</td>";
        tabla += "<td>" + datoArr[i].id_card;
        tabla += "</td>";
        tabla += "<td>" + datoArr[i].email;
        tabla += "</td>";
        tabla += "<td>" + datoArr[i].date_of_birth;
        tabla += "</td>";
        tabla += "<td>" + datoArr[i].created_at;
        tabla += "</td>";
        tabla += "<td>" + datoArr[i].updated_at;
        tabla += "</td>";
        tabla += "<td>";
        tabla += `<button type='button' data-toggle='modal' data-target='#updateModal' class='btn btn-success' onclick='upDataUpdate("${datoArr[i].id}", "${datoArr[i].name}", "${datoArr[i].last_name}", "${datoArr[i].id_card}", "${datoArr[i].email}", "${datoArr[i].date_of_birth}")'>Update`;
        tabla += "</button><br>";
        tabla += "</td>";
        tabla += "</tr>";
      }

      tabla += "</tbody>";
      tabla += "</tabla>";

      document.getElementById("tabla").innerHTML = tabla;
    },
  });
};

const upDataUpdate = (id, n, ln, ic, e, dob) => {
  document.getElementById("idUp").value = id;
  document.getElementById("nUp").value = n;
  document.getElementById("lnUp").value = ln;
  document.getElementById("icUp").value = ic;
  document.getElementById("eUp").value = e;
  document.getElementById("dobUp").value = dob;
};

const updateCustomers = () => {
  let id = document.getElementById("idUp").value;
  let n = document.getElementById("nUp").value;
  let ln = document.getElementById("lnUp").value;
  let ic = document.getElementById("icUp").value;
  let e = document.getElementById("eUp").value;
  let dob = document.getElementById("dobUp").value;
  let ua = new Date().toISOString().slice(0, 19).replace("T", " ");

  $.ajax({
    data: {
      crud: "update",
      id,
      n,
      ln,
      ic,
      e,
      dob,
      ua,
    },
    url: "../controlador/CustomersController.php",
    async: true,
    type: "GET",
    dataType: "text",
    success: function (dato) {
      alert(dato);
    },
  });
};
