<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Tabla de provedores</title>
</head>
<body>
    <main>
        <!-- Tabla de proveedores para el dentista -->
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Nombre del proveedor</th>
                    <th scope="col">Tipo de producto</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Jorge González</td>
                    <td>Implantes dentales</td>
                    <td>$3,500.00</td>
                    <td>
                        <button type="button" class="btn btn-secondary">Editar</button>
                        <button type="button" class="btn btn-danger">Eliminar</button>
                    </td>
                </tr>
                <tr>
                    <td>María Rodríguez</td>
                    <td>Brackets</td>
                    <td>$2,000.00</td>
                    <td>
                        <button type="button" class="btn btn-secondary">Editar</button>
                        <button type="button" class="btn btn-danger">Eliminar</button>
                    </td>
                </tr>
                <tr>
                    <td>Carlos Pérez</td>
                    <td>Prótesis dentales</td>
                    <td>$5,000.00</td>
                    <td>
                        <button type="button" class="btn btn-secondary">Editar</button>
                        <button type="button" class="btn btn-danger">Eliminar</button>
                    </td>
                </tr>
                <tr>
                    <td>Sofía Hernández</td>
                    <td>Ortodoncia</td>
                    <td>$3,000.00</td>
                    <td>
                        <button type="button" class="btn btn-secondary">Editar</button>
                        <button type="button" class="btn btn-danger">Eliminar</button>
                    </td>
                </tr>
                <tr>
                    <td>Luisa Gómez</td>
                    <td>Blanqueamiento dental</td>
                    <td>$1,500.00</td>
                    <td>
                        <button type="button" class="btn btn-secondary">Editar</button>
                        <button type="button" class="btn btn-danger">Eliminar</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </main>
</body>
</html>
