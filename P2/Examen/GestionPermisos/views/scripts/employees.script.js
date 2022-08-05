const searchForm = document.getElementById("search-form");
const searchInput = document.getElementById("search-input");
const tableContainer = document.getElementById("table-container");
const formModalHead = document.getElementById("form-modal-title");
const employeeIdInput = document.getElementById("id");
const employeeNameInput = document.getElementById("name");
const employeeLastNameInput = document.getElementById("last-name");
const employeeEmailInput = document.getElementById("email");
const employeeAddressInput = document.getElementById("address");
const employeePhoneInput = document.getElementById("phone");
const employeeIdCardInput = document.getElementById("id-card");
const addFormButton = document.getElementById("add-form-button");
const updateFormButton = document.getElementById("update-form-button");
const addEmployeeButton = document.getElementById("add-employee-button");
const closeModalButtons = document.querySelectorAll("#close-modal-button");
const employeeIdContainer = document.getElementById("employee-id-container");
const employeeForm = document.getElementById("employee-form");

const createEmployee = () => {
  let name = employeeNameInput.value;
  let last_name = employeeLastNameInput.value;
  let email = employeeEmailInput.value;
  let address = employeeAddressInput.value;
  let phone = employeePhoneInput.value;
  let id_card = employeeIdCardInput.value;

  $.ajax({
    data: {
      crud: "create",
      name,
      last_name,
      email,
      address,
      phone,
      id_card,
    },
    url: "../controllers/employees_controller.php",
    async: true,
    type: "GET",
    dataType: "text",
    success: (result) => {
      if (result.trim() === "0") {
        alert("Empleado no creado");
      }

      document.getElementById("close-modal-button").click();
      searchEmployees();
    },
  });
};

const updateEmployee = () => {
  let id = employeeIdInput.value;
  let name = employeeNameInput.value;
  let last_name = employeeLastNameInput.value;
  let email = employeeEmailInput.value;
  let address = employeeAddressInput.value;
  let phone = employeePhoneInput.value;
  let id_card = employeeIdCardInput.value;

  $.ajax({
    data: {
      crud: "update",
      id,
      name,
      last_name,
      email,
      address,
      phone,
      id_card,
    },
    url: "../controllers/employees_controller.php",
    async: true,
    type: "GET",
    dataType: "text",
    success: (result) => {
      if (result.trim() === "0") {
        alert("Empleado no actualizado");
      }

      document.getElementById("close-modal-button").click();
      searchEmployees();
    },
  });
};

const loadModalData = (data) => {
  const employee = JSON.parse(data);
  const { id, name, last_name, email, address, phone, id_card } = employee;

  formModalHead.innerText = "Actualizar empleado";

  employeeIdInput.value = id;
  employeeNameInput.value = name;
  employeeLastNameInput.value = last_name;
  employeeEmailInput.value = email;
  employeeAddressInput.value = address;
  employeePhoneInput.value = phone;
  employeeIdCardInput.value = id_card;

  addFormButton.hidden = true;
  updateFormButton.hidden = false;
  updateFormButton.addEventListener("click", (e) => {
    e.preventDefault();

    updateEmployee();
  });
};

const deleteEmployee = (id) => {
  let response = confirm("¿Estás seguro de eliminar este empleado?");

  if (response) {
    $.ajax({
      data: {
        crud: "delete",
        id,
      },
      url: "../controllers/employees_controller.php",
      async: true,
      type: "GET",
      dataType: "text",
      success: (result) => {
        if (result.trim() === "1") {
          alert("Empleado eliminado");
        } else {
          alert("Empleado no eliminado");
        }

        searchEmployees();
      },
    });
  }
};

const createTbody = (employees) => {
  let body = "";

  employees.forEach((employee) => {
    const { id, name, last_name, email, address, phone, id_card } = employee;

    body += `
        <tr>
          <td class="text-center">${id}</td>
          <td class="text-center">${name}</td>
          <td class="text-center">${last_name}</td>
          <td class="text-center">${email}</td>
          <td class="text-center">${address}</td>
          <td class="text-center">${phone}</td>
          <td class="text-center">${id_card}</td>
          <td class="text-center">
            <button type="button" data-bs-toggle="modal" data-bs-target="#form-modal" class="btn btn-primary mr-1" onclick='loadModalData(\`${JSON.stringify(
              employee
            )}\`)'>
              Actualizar
            </button>
            <button type="button" class="btn btn-danger" onclick="deleteEmployee('${id}')">
              Eliminar
            </button>
          </td>
        </tr>
      `;
  });

  return body;
};

const searchEmployees = () => {
  let search_text = searchInput.value;

  $.ajax({
    data: {
      crud: "read",
      search_text,
    },
    url: "../controllers/employees_controller.php",
    async: true,
    type: "GET",
    dataType: "json",
    success: (employees) => {
      let table = `
        <table class="table table-hover">
          <thead class="table-dark">
            <tr>
              <th class="text-center">ID</th>
              <th class="text-center">NOMBRE</th>
              <th class="text-center">APELLIDO</th>
              <th class="text-center">EMAIL</th>
              <th class="text-center">DIRECCIÓN</th>
              <th class="text-center">TELÉFONO</th>
              <th class="text-center">C.I.</th>
              <th class="text-center">ACCIONES</th>
            </tr>
          </thead>
          <tbody>
            ${createTbody(employees)}
          </tbody>
        </table>
      `;

      tableContainer.innerHTML = table;
    },
  });
};

searchForm.addEventListener("submit", (e) => {
  e.preventDefault();

  searchEmployees();
});

addEmployeeButton &&
  addEmployeeButton.addEventListener("click", () => {
    employeeIdContainer.hidden = true;
    formModalHead.innerText = "Agregar permiso";
    updateFormButton.hidden = true;
    addFormButton.hidden = false;
  });

closeModalButtons.forEach((button) =>
  button.addEventListener("click", () => {
    employeeIdInput.value = "";
    employeeNameInput.value = "";
    employeeLastNameInput.value = "";
    employeeEmailInput.value = "";
    employeeAddressInput.value = "";
    employeePhoneInput.value = "";
    employeeIdCardInput.value = "";
  })
);

addFormButton.addEventListener("click", (e) => {
  e.preventDefault();

  createEmployee();
});

window.addEventListener("load", searchEmployees);
