let schedule_id_to_update = "";
let movie_id_to_update = "";
let room_id_to_update = "";

(() => {
  $.ajax({
    data: {
      crud: "read",
      searchText: "",
    },
    url: "../controlador/SchedulesController.php",
    async: true,
    type: "GET",
    dataType: "json",
    success: function (dato) {
      let schedules = eval(dato);

      let html = "";

      schedules.forEach(
        (schedule) =>
          (html += `<option value="${schedule.id}">${schedule.start} - ${schedule.end}</option>`)
      );

      document.getElementById("scheduleIn").innerHTML = html;
      document.getElementById("scheduleUp").innerHTML = html;
    },
  });
})();

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
      let movies = eval(dato);

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

(() => {
  $.ajax({
    data: {
      crud: "read",
      searchText: "",
    },
    url: "../controlador/RoomsController.php",
    async: true,
    type: "GET",
    dataType: "json",
    success: function (dato) {
      let rooms = eval(dato);

      let html = "";

      rooms.forEach(
        (room) => (html += `<option value="${room.id}">${room.name}</option>`)
      );

      document.getElementById("roomIn").innerHTML = html;
      document.getElementById("roomUp").innerHTML = html;
    },
  });
})();

const searchSchedulesMoviesRooms = () => {
  let searchText = document.getElementById("search-text").value;

  $.ajax({
    data: {
      crud: "read",
      searchText,
    },
    url: "../controlador/SchedulesMoviesRoomsController.php",
    async: true,
    type: "GET",
    dataType: "json",
    success: function (dato) {
      const datoArr = eval(dato);
      let tabla = "<table class='table table-hover'>";
      tabla += "<thead class='thead-dark'>";
      tabla += "<tr>";
      tabla += "<th>HORA INICIO";
      tabla += "</th>";
      tabla += "<th>HORA FIN";
      tabla += "</th>";
      tabla += "<th>NOMBRE PELÍCULA";
      tabla += "</th>";
      tabla += "<th>CATEGORÍA PELÍCULA";
      tabla += "</th>";
      tabla += "<th>TIPO PELÍCULA";
      tabla += "</th>";
      tabla += "<th>CALIFICACIÓN PELÍCULA";
      tabla += "</th>";
      tabla += "<th>NOMBRE SALA";
      tabla += "</th>";
      tabla += "<th>CAPACIDAD SALA";
      tabla += "</th>";
      tabla += "<th>CARACTERÍSTICA SALA";
      tabla += "</th>";
      tabla += "<th>ACCIÓN";
      tabla += "</th>";
      tabla += "</tr>";
      tabla += "</thead>";
      tabla += "<tbody>";

      for (let i = 0; i < datoArr.length; i++) {
        tabla += "<tr>";
        tabla += "<td>" + datoArr[i].schedule_start;
        tabla += "</td>";
        tabla += "<td>" + datoArr[i].schedule_end;
        tabla += "</td>";
        tabla += "<td>" + datoArr[i].movie_name;
        tabla += "</td>";
        tabla += "<td>" + datoArr[i].movie_category;
        tabla += "</td>";
        tabla += "<td>" + datoArr[i].movie_type;
        tabla += "</td>";
        tabla += "<td>" + datoArr[i].movie_rating;
        tabla += "</td>";
        tabla += "<td>" + datoArr[i].room_name;
        tabla += "</td>";
        tabla += "<td>" + datoArr[i].room_capacity;
        tabla += "</td>";
        tabla += "<td>" + datoArr[i].room_feature;
        tabla += "</td>";
        tabla += "<td>";
        tabla += `<button type='button' data-toggle='modal' data-target='#updateModal' class='btn btn-success mr-1' onclick='upDataUpdate("${datoArr[i].schedule_id}", "${datoArr[i].movie_id}", "${datoArr[i].room_id}")'>Actualizar`;
        tabla += "</button>";
        tabla += `<button type='button' class='btn btn-danger' data-toggle='modal' data-target='#deleteModal' onclick='deleteUpload("${datoArr[i].schedule_id}", "${datoArr[i].movie_id}", "${datoArr[i].room_id}");'>`;
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

const upDataUpdate = (schedule_id, movie_id, room_id) => {
  schedule_id_to_update = schedule_id;
  movie_id_to_update = movie_id;
  room_id_to_update = room_id;

  document.getElementById("scheduleUp").value = schedule_id;
  document.getElementById("movieUp").value = movie_id;
  document.getElementById("roomUp").value = room_id;
};

const updateSchedulesMoviesRooms = () => {
  let schedule_id = document.getElementById("scheduleUp").value;
  let movie_id = document.getElementById("movieUp").value;
  let room_id = document.getElementById("roomUp").value;

  $.ajax({
    data: {
      crud: "update",
      schedule_id_to_update,
      movie_id_to_update,
      room_id_to_update,
      schedule_id,
      movie_id,
      room_id,
    },
    url: "../controlador/SchedulesMoviesRoomsController.php",
    async: true,
    type: "GET",
    dataType: "text",
    success: function (dato) {
      dato = dato.trim();

      if (dato === "1") {
        alert("Horario - pelicula - sala actualizada");
      } else {
        alert("Horario - pelicula - sala no actualizada");
      }

      document.getElementById("closeUpdateButton").click();
      searchSchedulesMoviesRooms();
    },
  });
};

const deleteUpload = (schedule_id, movie_id, room_id) => {
  document.getElementById("scheduleIdDelete").value = schedule_id;
  document.getElementById("movieIdDelete").value = movie_id;
  document.getElementById("roomIdDelete").value = room_id;
};

const deleteSchedulesMoviesRooms = () => {
  let schedule_id = document.getElementById("scheduleIdDelete").value;
  let movie_id = document.getElementById("movieIdDelete").value;
  let room_id = document.getElementById("roomIdDelete").value;

  $.ajax({
    data: {
      crud: "delete",
      schedule_id,
      movie_id,
      room_id,
    },
    url: "../controlador/SchedulesMoviesRoomsController.php",
    async: true,
    type: "GET",
    dataType: "text",
    success: function (dato) {
      dato = dato.trim();

      if (dato === "1") {
        alert("Horario - pelicula - sala eliminada");
      } else {
        alert("Horario - pelicula - sala no eliminada");
      }

      document.getElementById("closeDeleteButton").click();
      searchSchedulesMoviesRooms();
    },
  });
};

const createSchedulesMoviesRooms = () => {
  let schedule_id = document.getElementById("scheduleIn").value;
  let movie_id = document.getElementById("movieIn").value;
  let room_id = document.getElementById("roomIn").value;

  $.ajax({
    data: {
      crud: "create",
      schedule_id,
      movie_id,
      room_id,
    },
    url: "../controlador/SchedulesMoviesRoomsController.php",
    async: true,
    type: "GET",
    dataType: "text",
    success: function (dato) {
      dato = dato.trim();

      if (dato === "1") {
        alert("Horario - pelicula - sala creada");
      } else {
        alert("Horario - pelicula - sala no creada");
      }

      document.getElementById("closeCreateButton").click();
      searchSchedulesMoviesRooms();
    },
  });
};

window.onload = function () {
  searchSchedulesMoviesRooms();
};
