const searchSellers = () => {
  const searchText = document.getElementById("search-text").value;

  $.ajax({
    data: {
      crud: "read",
      searchText,
    },
    url: "../controlador/SellersController.php",
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
      tabla += "<th>NOMBRE";
      tabla += "</th>";
      tabla += "<th>APELLIDO";
      tabla += "</th>";
      tabla += "<th>TELÉFONO";
      tabla += "</th>";
      tabla += "<th>DIRECCIÓN";
      tabla += "</th>";
      tabla += "<th>EMAIL";
      tabla += "</th>";
      tabla += "<th>FECHA DE NACIMIENTO";
      tabla += "</th>";
      tabla += "<th>CÉDULA";
      tabla += "</th>";
      tabla += "<th>CREADO EN";
      tabla += "</th>";
      tabla += "<th>ACTUALIZADO EN";
      tabla += "</th>";
      tabla += "<th>ACCIÓN";
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
        tabla += "<td>" + datoArr[i].phone;
        tabla += "</td>";
        tabla += "<td>" + datoArr[i].address;
        tabla += "</td>";
        tabla += "<td>" + datoArr[i].email;
        tabla += "</td>";
        tabla += "<td>" + datoArr[i].date_of_birth;
        tabla += "</td>";
        tabla += "<td>" + datoArr[i].id_card;
        tabla += "</td>";
        tabla += "<td>" + datoArr[i].created_at;
        tabla += "</td>";
        tabla += "<td>" + datoArr[i].updated_at;
        tabla += "</td>";
        tabla += "<td>";
        tabla += `<button type='button' data-toggle='modal' data-target='#updateModal' class='btn btn-success mr-1' onclick='upDataUpdate("${datoArr[i].id}", "${datoArr[i].name}", "${datoArr[i].last_name}", "${datoArr[i].phone}", "${datoArr[i].address}", "${datoArr[i].email}", "${datoArr[i].date_of_birth}", "${datoArr[i].id_card}")'>Actualizar`;
        tabla += "</button>";
        tabla += `<button type='button' class='btn btn-danger' data-toggle='modal' data-target='#deleteModal' onclick="deleteUpload('${datoArr[i].id}');">`;
        tabla += "Eliminar";
        tabla += "</button>";
        tabla += "</td>";
        tabla += "</tr>";
      }

      tabla += "</tbody>";
      tabla += "</tabla>";

      document.getElementById("tabla").innerHTML = tabla;
    },
  });
};

const upDataUpdate = (
  id,
  name,
  last_name,
  phone,
  address,
  email,
  date_of_birth,
  id_card
) => {
  document.getElementById("idUp").value = id;
  document.getElementById("nameUp").value = name;
  document.getElementById("lastNameUp").value = last_name;
  document.getElementById("phoneUp").value = phone;
  document.getElementById("addressUp").value = address;
  document.getElementById("emailUp").value = email;
  document.getElementById("dateOfBirthUp").value = date_of_birth;
  document.getElementById("idCardUp").value = id_card;
};

const updateSeller = () => {
  let id = document.getElementById("idUp").value;
  let name = document.getElementById("nameUp").value;
  let last_name = document.getElementById("lastNameUp").value;
  let phone = document.getElementById("phoneUp").value;
  let address = document.getElementById("addressUp").value;
  let email = document.getElementById("emailUp").value;
  let date_of_birth = document.getElementById("dateOfBirthUp").value;
  let id_card = document.getElementById("idCardUp").value;
  let updated_at = new Date().toISOString().slice(0, 19).replace("T", " ");

  if (!/^\d{10}$/.test(id_card)) return alert("Número de cédula inválido");

  $.ajax({
    data: {
      crud: "update",
      id,
      name,
      last_name,
      phone,
      address,
      email,
      date_of_birth,
      id_card,
      updated_at,
    },
    url: "../controlador/SellersController.php",
    async: true,
    type: "GET",
    dataType: "text",
    success: function (dato) {
      dato = dato.trim();

      if (dato === "1") {
        alert("Vendedor actualizado");
      } else {
        alert("Vendedor no actualizado");
      }

      document.getElementById("closeUpdateButton").click();
      searchSellers();
    },
  });
};

const deleteUpload = (id) => {
  document.getElementById("idDelete").value = id;
};

const deleteSeller = () => {
  let id = document.getElementById("idDelete").value;

  $.ajax({
    data: {
      crud: "delete",
      id,
    },
    url: "../controlador/SellersController.php",
    async: true,
    type: "GET",
    dataType: "text",
    success: function (dato) {
      dato = dato.trim();

      if (dato === "1") {
        alert("Vendedor eliminado");
      } else {
        alert("Vendedor no eliminado");
      }

      document.getElementById("closeDeleteButton").click();
      searchSellers();
    },
  });
};

const createSeller = () => {
  let name = document.getElementById("nameIn").value;
  let last_name = document.getElementById("lastNameIn").value;
  let phone = document.getElementById("phoneIn").value;
  let address = document.getElementById("addressIn").value;
  let email = document.getElementById("emailIn").value;
  let date_of_birth = document.getElementById("dateOfBirthIn").value;
  let id_card = document.getElementById("idCardIn").value;
  let created_at = new Date().toISOString().slice(0, 19).replace("T", " ");
  let updated_at = new Date().toISOString().slice(0, 19).replace("T", " ");

  if (!/^\d{10}$/.test(id_card)) return alert("Número de cédula inválido");

  $.ajax({
    data: {
      crud: "create",
      name,
      last_name,
      phone,
      address,
      email,
      date_of_birth,
      id_card,
      created_at,
      updated_at,
    },
    url: "../controlador/SellersController.php",
    async: true,
    type: "GET",
    dataType: "text",
    success: function (dato) {
      dato = dato.trim();

      if (dato === "1") {
        alert("Vendedor creado");
      } else {
        alert("Vendedor no creado");
      }

      document.getElementById("closeCreateButton").click();
      searchSellers();
    },
  });
};

// window.addEventListener("load", buscarC);
window.onload = function () {
  searchSellers();
};
