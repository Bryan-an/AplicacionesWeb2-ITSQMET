let movies = [];

(() => {
  $.ajax({
    data: {
      crud: "read",
      searchText: "",
    },
    url: "../controlador/MoviesController.php",
    async: true,
    type: "GET",
    dataType: "json",
    success: function (dato) {
      // alert(dato);
      movies = eval(dato);

      let html = "";
      movies.forEach(
        (movie) =>
          (html += `<option value="${movie.id}">${movie.name}</option>`)
      );

      document.getElementById("movieIn").innerHTML = html;
      document.getElementById("movieUp").innerHTML = html;
    },
  });
})();

const searchRooms = () => {
  const searchText = document.getElementById("search-text").value;

  $.ajax({
    data: {
      crud: "read",
      searchText,
    },
    url: "../controlador/RoomsController.php",
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
      tabla += "<th>CAPACIDAD";
      tabla += "</th>";
      tabla += "<th>CARACTERÍSTICA";
      tabla += "</th>";
      tabla += "<th>PELÍCULA";
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
        tabla += "<td>" + datoArr[i].capacity;
        tabla += "</td>";
        tabla += "<td>" + datoArr[i].feature;
        tabla += "</td>";
        tabla += "<td>" + datoArr[i].movie_name;
        tabla += "</td>";
        tabla += "<td>" + datoArr[i].created_at;
        tabla += "</td>";
        tabla += "<td>" + datoArr[i].updated_at;
        tabla += "</td>";
        tabla += "<td>";
        tabla += `<button type='button' data-toggle='modal' data-target='#updateModal' class='btn btn-success mr-1' onclick='upDataUpdate("${datoArr[i].id}", "${datoArr[i].name}", "${datoArr[i].capacity}", "${datoArr[i].feature}", "${datoArr[i].movie_id}")'>Actualizar`;
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

const upDataUpdate = (id, name, capacity, feature, movieId) => {
  document.getElementById("idUp").value = id;
  document.getElementById("nameUp").value = name;
  document.getElementById("capacityUp").value = capacity;
  document.getElementById("featureUp").value = feature;
  document.getElementById("movieUp").value = movieId;
};

const updateRoom = () => {
  let id = document.getElementById("idUp").value;
  let name = document.getElementById("nameUp").value;
  let capacity = document.getElementById("capacityUp").value;
  let feature = document.getElementById("featureUp").value;
  let movie_id = document.getElementById("movieUp").value;
  let updated_at = new Date().toISOString().slice(0, 19).replace("T", " ");

  $.ajax({
    data: {
      crud: "update",
      id,
      name,
      capacity,
      feature,
      movie_id,
      updated_at,
    },
    url: "../controlador/RoomsController.php",
    async: true,
    type: "GET",
    dataType: "text",
    success: function (dato) {
      dato = dato.trim();

      if (dato === "1") {
        alert("Sala actualizada");
      } else {
        alert("Sala no actualizada");
      }

      document.getElementById("closeUpdateButton").click();
      searchRooms();
    },
  });
};

const deleteUpload = (id) => {
  document.getElementById("idDelete").value = id;
};

const deleteRoom = () => {
  let id = document.getElementById("idDelete").value;

  $.ajax({
    data: {
      crud: "delete",
      id,
    },
    url: "../controlador/RoomsController.php",
    async: true,
    type: "GET",
    dataType: "text",
    success: function (dato) {
      dato = dato.trim();

      if (dato === "1") {
        alert("Sala eliminada");
      } else {
        alert("Sala no eliminada");
      }

      document.getElementById("closeDeleteButton").click();
      searchRooms();
    },
  });
};

const createRoom = () => {
  let name = document.getElementById("nameIn").value;
  let capacity = document.getElementById("capacityIn").value;
  let feature = document.getElementById("featureIn").value;
  let movie_id = document.getElementById("movieIn").value;
  let created_at = new Date().toISOString().slice(0, 19).replace("T", " ");
  let updated_at = new Date().toISOString().slice(0, 19).replace("T", " ");

  $.ajax({
    data: {
      crud: "create",
      name,
      capacity,
      feature,
      movie_id,
      created_at,
      updated_at,
    },
    url: "../controlador/RoomsController.php",
    async: true,
    type: "GET",
    dataType: "text",
    success: function (dato) {
      dato = dato.trim();

      if (dato === "1") {
        alert("Sala creada");
      } else {
        alert("Sala no creada");
      }

      document.getElementById("closeCreateButton").click();
      searchRooms();
    },
  });
};

// window.addEventListener("load", buscarC);
window.onload = function () {
  searchRooms();
};
