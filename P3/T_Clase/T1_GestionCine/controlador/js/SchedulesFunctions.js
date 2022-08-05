const searchSchedules = () => {
  const searchText = document.getElementById("search-text").value;

  $.ajax({
    data: {
      crud: "read",
      searchText,
    },
    url: "../controlador/SchedulesController.php",
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
      tabla += "<th>INICIO";
      tabla += "</th>";
      tabla += "<th>FIN";
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
        tabla += "<td>" + datoArr[i].start;
        tabla += "</td>";
        tabla += "<td>" + datoArr[i].end;
        tabla += "</td>";
        tabla += "<td>" + datoArr[i].created_at;
        tabla += "</td>";
        tabla += "<td>" + datoArr[i].updated_at;
        tabla += "</td>";
        tabla += "<td>";
        tabla += `<button type='button' data-toggle='modal' data-target='#updateModal' class='btn btn-success mr-1' onclick='upDataUpdate("${datoArr[i].id}", "${datoArr[i].start}", "${datoArr[i].end}")'>Actualizar`;
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

const upDataUpdate = (id, start, end) => {
  document.getElementById("idUp").value = id;
  document.getElementById("startUp").value = start;
  document.getElementById("endUp").value = end;
};

const updateSchedule = () => {
  let id = document.getElementById("idUp").value;
  let start = document.getElementById("startUp").value;
  let end = document.getElementById("endUp").value;
  let updated_at = new Date().toISOString().slice(0, 19).replace("T", " ");

  $.ajax({
    data: {
      crud: "update",
      id,
      start,
      end,
      updated_at,
    },
    url: "../controlador/SchedulesController.php",
    async: true,
    type: "GET",
    dataType: "text",
    success: function (dato) {
      dato = dato.trim();

      if (dato === "1") {
        alert("Horario actualizado");
      } else {
        alert("Horario no actualizado");
      }

      document.getElementById("closeUpdateButton").click();
      searchSchedules();
    },
  });
};

const deleteUpload = (id) => {
  document.getElementById("idDelete").value = id;
};

const deleteSchedule = () => {
  let id = document.getElementById("idDelete").value;

  $.ajax({
    data: {
      crud: "delete",
      id,
    },
    url: "../controlador/SchedulesController.php",
    async: true,
    type: "GET",
    dataType: "text",
    success: function (dato) {
      dato = dato.trim();

      if (dato === "1") {
        alert("Horario eliminado");
      } else {
        alert("Horario no eliminado");
      }

      document.getElementById("closeDeleteButton").click();
      searchSchedules();
    },
  });
};

const createSchedule = () => {
  let start = document.getElementById("startIn").value;
  let end = document.getElementById("endIn").value;
  let created_at = new Date().toISOString().slice(0, 19).replace("T", " ");
  let updated_at = new Date().toISOString().slice(0, 19).replace("T", " ");

  $.ajax({
    data: {
      crud: "create",
      start,
      end,
      created_at,
      updated_at,
    },
    url: "../controlador/SchedulesController.php",
    async: true,
    type: "GET",
    dataType: "text",
    success: function (dato) {
      dato = dato.trim();

      if (dato === "1") {
        alert("Horario creado");
      } else {
        alert("Horario no creado");
      }

      document.getElementById("closeCreateButton").click();
      searchSchedules();
    },
  });
};

// window.addEventListener("load", buscarC);
window.onload = function () {
  searchSchedules();
};
