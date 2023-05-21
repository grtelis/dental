<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Tabla de usuarios</title>
</head>
<body>
    <main>
        <!-- Tabla de los usuarios registrados dentro del sistema del dentista -->
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">Nombre del usuario</th>
                    <th scope="col">Correo electrónico</th>
                    <th scope="col">Contraseña</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Fernando Cuevas</td>
                    <td>fernando@yahoo.com.fr</td>
                    <td>****</td>
                    <td>
                        <button type="button" class="btn btn-secondary">Editar</button>
                        <button type="button" class="btn btn-danger">Eliminar</button>
                    </td>
                </tr>
                <tr>
                    <td>Julieta Venegas</td>
                    <td>july@yahoo.com.fr</td>
                    <td>****</td>
                    <td>
                        <button type="button" class="btn btn-secondary">Editar</button>
                        <button type="button" class="btn btn-danger">Eliminar</button>
                    </td>
                </tr>
                <tr>
                    <td>Regina Villareal</td>
                    <td>reghi@yahoo.com.fr</td>
                    <td>****</td>
                    <td>
                        <button type="button" class="btn btn-secondary">Editar</button>
                        <button type="button" class="btn btn-danger">Eliminar</button>
                    </td>
                </tr>
                <tr>
                    <td>Fernando Rubio</td>
                    <td>fernando@yahoo.com.fr</td>
                    <td>****</td>
                    <td>
                        <button type="button" class="btn btn-secondary">Editar</button>
                        <button type="button" class="btn btn-danger">Eliminar</button>
                    </td>
                </tr>
                <tr>
                    <td>Alicia Gomez</td>
                    <td>fernando@yahoo.com.fr</td>
                    <td>****</td>
                    <td>
                        <button type="button" class="btn btn-secondary">Editar</button>
                        <button type="button" class="btn btn-danger">Eliminar</button>
                    </td>
                </tr>
                <tr>
                    <td>Carlos Mora</td>
                    <td>fernando@yahoo.com.fr</td>
                    <td>****</td>
                    <td>
                        <button type="button" class="btn btn-secondary">Editar</button>
                        <button type="button" class="btn btn-danger">Eliminar</button>
                    </td>
                </tr>
                <button type="button" class="btn btn-primary" id="agregar-usuario">Agregar</button>
            </tbody>
        </table>
    </main>
    <script src="../sistema/usuarios/usuarios.js"></script>
</body>
</html>