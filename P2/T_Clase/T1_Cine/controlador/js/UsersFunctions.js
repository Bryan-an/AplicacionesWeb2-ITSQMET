let passwordToUpdate = "";

const searchUsers = () => {
  const searchText = document.getElementById("search-text").value;

  $.ajax({
    data: {
      crud: "read",
      buscar: searchText,
    },
    url: "../controlador/UsuariosControlador.php",
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
      tabla += "<th>USUARIO";
      tabla += "</th>";
      tabla += "<th>CONTRASEÑA";
      tabla += "</th>";
      tabla += "<th>ROLE";
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
        tabla += "<td>" + datoArr[i].user;
        tabla += "</td>";
        tabla += "<td>" + datoArr[i].password;
        tabla += "</td>";
        tabla += "<td>" + datoArr[i].role;
        tabla += "</td>";
        tabla += "<td>";
        tabla += `<button type='button' data-toggle='modal' data-target='#updateModal' class='btn btn-success mr-1' onclick='upDataUpdate("${datoArr[i].id}", "${datoArr[i].user}", "${datoArr[i].password}", "${datoArr[i].role}")'>Actualizar`;
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

const upDataUpdate = (id, user, password, role) => {
  document.getElementById("idUp").value = id;
  document.getElementById("userUp").value = user;
  document.getElementById("passwordUp").value = password;
  document.getElementById("roleUp").value = role;

  passwordToUpdate = password;
};

const updateUser = () => {
  let id = document.getElementById("idUp").value;
  let txtUser = document.getElementById("userUp").value;
  let txtPassword = document.getElementById("passwordUp").value;
  let txtRole = document.getElementById("roleUp").value;

  const data =
    passwordToUpdate === txtPassword
      ? {
          crud: "update",
          id,
          txtUser,
          txtRole,
        }
      : {
          crud: "update",
          id,
          txtUser,
          txtPassword,
          txtRole,
        };

  $.ajax({
    data,
    url: "../controlador/UsuariosControlador.php",
    async: true,
    type: "GET",
    dataType: "text",
    success: function (dato) {
      dato = dato.trim();

      if (dato === "1") {
        alert("Usuario actualizado");
      } else {
        alert("Usuario no actualizado");
      }

      document.getElementById("closeUpdateButton").click();
      searchUsers();
    },
  });
};

const deleteUpload = (id) => {
  document.getElementById("idDelete").value = id;
};

const deleteUser = () => {
  let id = document.getElementById("idDelete").value;

  $.ajax({
    data: {
      crud: "delete",
      id,
    },
    url: "../controlador/UsuariosControlador.php",
    async: true,
    type: "GET",
    dataType: "text",
    success: function (dato) {
      dato = dato.trim();

      if (dato === "1") {
        alert("Usuario eliminado");
      } else {
        alert("Usuario no eliminado");
      }

      document.getElementById("closeDeleteButton").click();
      searchUsers();
    },
  });
};

const createUser = () => {
  let txtUser = document.getElementById("userIn").value;
  let txtPassword = document.getElementById("passwordIn").value;
  let txtRole = document.getElementById("roleIn").value;

  $.ajax({
    data: {
      crud: "create",
      txtUser,
      txtPassword,
      txtRole,
    },
    url: "../controlador/UsuariosControlador.php",
    async: true,
    type: "GET",
    dataType: "text",
    success: function (dato) {
      dato = dato.trim();

      if (dato === "1") {
        alert("Usuario creado");
      } else {
        alert("Usuario no creado");
      }

      document.getElementById("closeCreateButton").click();
      searchUsers();
    },
  });
};

// window.addEventListener("load", buscarC);
window.onload = function () {
  searchUsers();
};
