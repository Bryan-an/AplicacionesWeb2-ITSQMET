const searchMovies = () => {
  const searchText = document.getElementById("search-text").value;

  $.ajax({
    data: {
      crud: "read",
      searchText,
    },
    url: "../controlador/MoviesController.php",
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
      tabla += "<th>CATEGORÍA";
      tabla += "</th>";
      tabla += "<th>TIPO";
      tabla += "</th>";
      tabla += "<th>RATING";
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
        tabla += "<td>" + datoArr[i].category;
        tabla += "</td>";
        tabla += "<td>" + datoArr[i].type;
        tabla += "</td>";
        tabla += "<td>" + datoArr[i].rating;
        tabla += "</td>";
        tabla += "<td>" + datoArr[i].created_at;
        tabla += "</td>";
        tabla += "<td>" + datoArr[i].updated_at;
        tabla += "</td>";
        tabla += "<td>";
        tabla += `<button type='button' data-toggle='modal' data-target='#updateModal' class='btn btn-success mr-1' onclick='upDataUpdate("${datoArr[i].id}", "${datoArr[i].name}", "${datoArr[i].category}", "${datoArr[i].type}", "${datoArr[i].rating}")'>Actualizar`;
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

const upDataUpdate = (id, name, category, type, rating) => {
  document.getElementById("idUp").value = id;
  document.getElementById("nameUp").value = name;
  document.getElementById("categoryUp").value = category;
  document.getElementById("typeUp").value = type;
  document.getElementById("ratingUp").value = rating;
};

const updateMovie = () => {
  let id = document.getElementById("idUp").value;
  let name = document.getElementById("nameUp").value;
  let category = document.getElementById("categoryUp").value;
  let type = document.getElementById("typeUp").value;
  let rating = document.getElementById("ratingUp").value;
  let updated_at = new Date().toISOString().slice(0, 19).replace("T", " ");

  $.ajax({
    data: {
      crud: "update",
      id,
      name,
      category,
      type,
      rating,
      updated_at,
    },
    url: "../controlador/MoviesController.php",
    async: true,
    type: "GET",
    dataType: "text",
    success: function (dato) {
      dato = dato.trim();

      if (dato === "1") {
        alert("Película actualizada");
      } else {
        alert("Película no actualizada");
      }

      document.getElementById("closeUpdateButton").click();
      searchMovies();
    },
  });
};

const deleteUpload = (id) => {
  document.getElementById("idDelete").value = id;
};

const deleteMovie = () => {
  let id = document.getElementById("idDelete").value;

  $.ajax({
    data: {
      crud: "delete",
      id,
    },
    url: "../controlador/MoviesController.php",
    async: true,
    type: "GET",
    dataType: "text",
    success: function (dato) {
      dato = dato.trim();

      if (dato === "1") {
        alert("Película eliminada");
      } else {
        alert("Película no eliminada");
      }

      document.getElementById("closeDeleteButton").click();
      searchMovies();
    },
  });
};

const createMovie = () => {
  let name = document.getElementById("nameIn").value;
  let category = document.getElementById("categoryIn").value;
  let type = document.getElementById("typeIn").value;
  let rating = document.getElementById("ratingIn").value;
  let created_at = new Date().toISOString().slice(0, 19).replace("T", " ");
  let updated_at = new Date().toISOString().slice(0, 19).replace("T", " ");

  $.ajax({
    data: {
      crud: "create",
      name,
      category,
      type,
      rating,
      created_at,
      updated_at,
    },
    url: "../controlador/MoviesController.php",
    async: true,
    type: "GET",
    dataType: "text",
    success: function (dato) {
      dato = dato.trim();

      if (dato === "1") {
        alert("Película creada");
      } else {
        alert("Película no creada");
      }

      document.getElementById("closeCreateButton").click();
      searchMovies();
    },
  });
};

// window.addEventListener("load", buscarC);
window.onload = function () {
  searchMovies();
};
