<!doctype html>
<html lang="en">
    <head>
        <title>CRUD PHP</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        
        <main>
            <div class="container">
                <div class="row justify-content-center p-5">
                  <div class="col-sm-6">
                    <h5>Formulario</h5>
                    <hr />
                    <form action="javascript:void(0);" onsubmit="app.guardar()">
                      <input type="hidden" id="id" />
                      <label for="nombre">Nombre y Apellido</label>
                      <input
                        type="text"
                        class="form-control"
                        id="nombre"
                        placeholder="Nombre y Apellido"
                        autofocus
                        required
                      />
                      <label for="email">Email</label>
                      <input
                        type="email"
                        class="form-control"
                        id="email"
                        placeholder="email@email.com"
                        required
                      />
                      <label for="email">Edad</label>
                      <input
                        type="number"
                        class="form-control"
                        id="edad"
                        placeholder="18"
                        min="18"
                        max="99"
                        required
                      />
                      <br />
                      <div>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                        <button type="reset" class="btn btn-danger">Cancelar</button>
                      </div>
                    </form>
                    <br />
                    <h5>Listado</h5>
                    <hr />
                    <table class="table">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Nombres</th>
                          <th>Email</th>
                          <th>Edad</th>
                          <th>Opciones</th>
                        </tr>
                      </thead>
                      <tbody id="tbody">

                      </tbody>
                    </table>
                  </div>
                </div>
            </div>

        <script src="../assets/code.js"></script>

        </main>
        
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
