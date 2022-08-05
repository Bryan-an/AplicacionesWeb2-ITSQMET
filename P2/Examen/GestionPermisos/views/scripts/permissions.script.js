const searchForm = document.getElementById("search-form");
const searchInput = document.getElementById("search-input");
const tableContainer = document.getElementById("table-container");
const formModalHead = document.getElementById("form-modal-title");
const permissionId = document.getElementById("id");
const permissionStartDate = document.getElementById("start-date");
const permissionEndDate = document.getElementById("end-date");
const permissionType = document.getElementById("type");
const permissionObservation = document.getElementById("observation");
const addFormButton = document.getElementById("add-form-button");
const updateFormButton = document.getElementById("update-form-button");
const addPermissionButton = document.getElementById("add-permission-button");
const closeModalButtons = document.querySelectorAll("#close-modal-button");
const permissionIdContainer = document.getElementById(
  "permission-id-container"
);
const permissionForm = document.getElementById("permission-form");

const createPermission = () => {
  let start_date = permissionStartDate.value;
  let end_date = permissionEndDate.value;
  let type = permissionType.value;
  let observation = permissionObservation.value;

  $.ajax({
    data: {
      crud: "create",
      start_date,
      end_date,
      type,
      observation,
      username: USERNAME,
    },
    url: "../controllers/permissions_controller.php",
    async: true,
    type: "GET",
    dataType: "text",
    success: (result) => {
      if (result.trim() === "0") {
        alert("Permiso no creado");
      }

      document.getElementById("close-modal-button").click();
      searchPermissions();
    },
  });
};

const updatePermission = () => {
  let id = permissionId.value;
  let start_date = permissionStartDate.value;
  let end_date = permissionEndDate.value;
  let type = permissionType.value;
  let observation = permissionObservation.value;

  $.ajax({
    data: {
      crud: "update",
      id,
      start_date,
      end_date,
      type,
      observation,
    },
    url: "../controllers/permissions_controller.php",
    async: true,
    type: "GET",
    dataType: "text",
    success: (result) => {
      if (result.trim() === "0") {
        alert("Permiso no actualizado");
      }

      document.getElementById("close-modal-button").click();
      searchPermissions();
    },
  });
};

const updatePermissionState = (id, updatedState) => {
  $.ajax({
    data: {
      crud: "update",
      id,
      state: updatedState,
    },
    url: "../controllers/permissions_controller.php",
    async: true,
    type: "GET",
    dataType: "text",
    success: (result) => {
      if (result.trim() === "1") {
        alert(`Permiso ${updatedState}`);
      } else {
        alert("Error al actualizar estado del permiso");
      }

      searchPermissions();
    },
  });
};

const loadModalData = (data) => {
  const permission = JSON.parse(data);
  const { id, start_date, end_date, type, observation, state } = permission;

  formModalHead.innerText = "Actualizar permiso";

  permissionId.value = id;
  permissionStartDate.value = start_date;
  permissionEndDate.value = end_date;
  permissionType.value = type;
  permissionObservation.value = observation;

  addFormButton.hidden = true;
  updateFormButton.hidden = false;
  updateFormButton.addEventListener("click", (e) => {
    e.preventDefault();

    updatePermission();
  });
};

const deletePermission = (id) => {
  let response = confirm("¿Estás seguro de eliminar este permiso?");

  if (response) {
    $.ajax({
      data: {
        crud: "delete",
        id,
      },
      url: "../controllers/permissions_controller.php",
      async: true,
      type: "GET",
      dataType: "text",
      success: (result) => {
        if (result.trim() === "1") {
          alert("Permiso eliminado");
        } else {
          alert("Permiso no eliminado");
        }

        searchPermissions();
      },
    });
  }
};

const createTbody = (permissions) => {
  let body = "";

  permissions.forEach((permission) => {
    const {
      id,
      start_date,
      end_date,
      type,
      observation,
      state,
      employee_id_card,
    } = permission;

    body += `
        <tr>
          <td class="text-center">${id}</td>
          <td class="text-center">${start_date}</td>
          <td class="text-center">${end_date}</td>
          <td class="text-center">${
            type.charAt(0).toUpperCase() + type.slice(1)
          }</td>
          <td class="text-center">${
            observation === null ? "" : observation
          }</td>
          <td class="text-center">${
            state.charAt(0).toUpperCase() + state.slice(1)
          }</td>
          <td class="text-center">${employee_id_card}</td>
          <td class="text-center">
            ${
              ROLE === "empleado"
                ? `<button type="button" data-bs-toggle="modal" data-bs-target="#form-modal" class="btn btn-primary mr-1" onclick='loadModalData(\`${JSON.stringify(
                    permission
                  )}\`)'>
              Actualizar
            </button>
            <button type="button" class="btn btn-danger" onclick="deletePermission('${id}')">
              Eliminar
            </button>`
                : `
            <button type="button" class="btn btn-primary mr-1" onclick='updatePermissionState("${id}", "aprobado")'>
              Aprobar
            </button>
            <button type="button" class="btn btn-danger" onclick='updatePermissionState("${id}", "rechazado")'>
              Rechazar
            </button>`
            }
          </td>
        </tr>
      `;
  });

  return body;
};

const searchPermissions = () => {
  let search_text = searchInput.value;

  $.ajax({
    data: {
      crud: "read",
      search_text,
    },
    url: "../controllers/permissions_controller.php",
    async: true,
    type: "GET",
    dataType: "json",
    success: (permissions) => {
      let table = `
        <table class="table table-hover">
          <thead class="table-dark">
            <tr>
              <th class="text-center">ID</th>
              <th class="text-center">FECHA INICIO</th>
              <th class="text-center">FECHA FIN</th>
              <th class="text-center">TIPO</th>
              <th class="text-center">OBSERVACIÓN</th>
              <th class="text-center">ESTADO</th>
              <th class="text-center">C.I. EMPLEADO</th>
              <th class="text-center">ACCIONES</th>
            </tr>
          </thead>
          <tbody>
            ${createTbody(permissions)}
          </tbody>
        </table>
      `;

      tableContainer.innerHTML = table;
    },
  });
};

searchForm.addEventListener("submit", (e) => {
  e.preventDefault();

  searchPermissions();
});

addPermissionButton &&
  addPermissionButton.addEventListener("click", () => {
    permissionIdContainer.hidden = true;
    formModalHead.innerText = "Agregar permiso";
    updateFormButton.hidden = true;
    addFormButton.hidden = false;
  });

closeModalButtons.forEach((button) =>
  button.addEventListener("click", () => {
    permissionId.value = "";
    permissionStartDate.value = "";
    permissionEndDate.value = "";
    permissionType.value = "";
    permissionObservation.value = "";
  })
);

addFormButton.addEventListener("click", (e) => {
  e.preventDefault();

  createPermission();
});

window.addEventListener("load", searchPermissions);
