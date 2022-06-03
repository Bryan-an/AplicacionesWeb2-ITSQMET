<?php include "../header.php";?>

<div class="container p-4">
      <h1 class="text-center">Ejercicio 18: Peliculas</h1>
      <div class="row p-4">
        <div class="col-4 offset-4">
          <form>
            <div class="form-group">
              <label for="name">Nombre:</label>
              <input type="text" name="name" id="name" class="form-control"/>
            </div>
            <div class="form-group">
              <label for="last-name">Apellido:</label>
              <input type="text" name="last-name" id="last-name" class="form-control"/>
            </div>
            <div class="form-group">
              <label for="id-card">Cédula de indentidad:</label>
              <input type="text" name="id-card" id="id-card" class="form-control"/>
            </div>
            <div class="form-group">
              <label for="email">Correo electrónico:</label>
              <input type="email" name="email" id="email" class="form-control"/>
            </div>
            <div class="form-group">
              <label for="date-birth">Fecha de nacimiento:</label>
              <input type="date" name="date-birth" id="date-birth" class="form-control"/>
            </div>
            <button class="btn btn-primary" type="button" onclick="showMovies()">
              Enviar
            </button>
          </form>
        </div>
      </div>
      <div class="pt-2" id="">
          <form>
                <div class="row">
                  <div class="col-4 offset-4" id="result"></div>
                </div>
                <div class="row">
                  <div class="col-4 offset-4" >
                    <button class="btn btn-primary" type="button" onclick="showTicket()" hidden id="pick-button">
                        Elegir
                    </button>
                  </div>
                </div>
            </form>
      </div>
    </div>

    <script>
      const showMovies = () => {
        let dateOfBirth = document.getElementById("date-birth").value;
        const resultContainer = document.getElementById("result");
        const pickButton = document.getElementById("pick-button");

        console.log(dateOfBirth);

        $.ajax({
            data: {
                dateOfBirth,
            },
            url: "../Controlador/18_PeliculasControlador.php",
            async: true,
            type: "GET",
            dataType: "json",
            success: function (data) {
                console.log(data);
                const selectContainer = document.createElement("div");
                selectContainer.className = "form-group";

                const label = document.createElement("label");
                label.innerHTML = "Elija la película"

                const moviesSelect = document.createElement("select");
                moviesSelect.className = "form-control";
                moviesSelect.id = "movie";

                selectContainer.appendChild(label);
                selectContainer.appendChild(moviesSelect);

                data.movies.forEach(movie => {
                    const option = document.createElement("option");
                    option.value = movie;
                    option.innerHTML = movie;
                    moviesSelect.appendChild(option);
                })

                resultContainer.appendChild(selectContainer);
                pickButton.hidden = false;
            },
        });

    };

        const showTicket = () => {
            const name = document.getElementById("name");
            const lastName = document.getElementById("last-name")
            const idCard = document.getElementById("id-card");
            const email = document.getElementById("email");
            const dateofBirth = document.getElementById("date-birth")
            const movie = document.getElementById("movie");

            alert(`Ticket\nNombre: ${name.value}\nApellido: ${lastName.value}\nCédula: ${idCard.value}\nEmail: ${email.value}\nFecha de Nacimiento: ${dateofBirth.value}\nPelícula: ${movie.value}`);

            name.value = "";
            lastName.value = "";
            idCard.value = "";
            email.value = "";
            dateOfBirth.value = "";
            movie.value = "";
        }
    </script>

<?php include "../footer.php";?>