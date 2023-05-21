<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Tabla de proveedores de mobiliario</title>
</head>
<body>
    <main>
        <!-- Tabla con bootstrap de proveedores de mobiliario -->
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Nombre del proveedor</th>
                    <th scope="col">Producto</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Cantidad en stock</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Acme Furniture</td>
                    <td>Silla ejecutiva</td>
                    <td>$300</td>
                    <td>10</td>
                    <td>
                        <button type="button" class="btn btn-secondary">Editar</button>
                        <button type="button" class="btn btn-danger">Eliminar</button>
                    </td>
                </tr>
                <tr>
                    <td>Broyhill Furniture</td>
                    <td>Mesa de centro</td>
                    <td>$500</td>
                    <td>5</td>
                    <td>
                        <button type="button" class="btn btn-secondary">Editar</button>
                        <button type="button" class="btn btn-danger">Eliminar</button>
                    </td>
                </tr>
                <tr>
                    <td>Ashley Furniture</td>
                    <td>Reclinable</td>
                    <td>$700</td>
                    <td>2</td>
                    <td>
                        <button type="button" class="btn btn-secondary">Editar</button>
                        <button type="button" class="btn btn-danger">Eliminar</button>
                    </td>
                </tr>
                <tr>
                    <td>Rooms To Go</td>
                    <td>Sofá seccional</td>
                    <td>$1200</td>
                    <td>3</td>
                    <td>
                        <button type="button" class="btn btn-secondary">Editar</button>
                        <button type="button" class="btn btn-danger">Eliminar</button>
                    </td>
                </tr>
                <tr>
                    <td>Wayfair</td>
                    <td>Estantería</td>
                    <td>$200</td>
                    <td>8</td>
                    <td>
                        <button type="button" class="btn btn-secondary">Editar</button>
                        <button type="button" class="btn btn-danger">Eliminar</button>
                    </td>
                </tr>
                <button type="button" class="btn btn-primary" id="agregar-mobiliario">Agregar</button>
            </tbody>
        </table>
    </main>
    <script src="../sistema/mobiliario/mobiliario.js"></script>
</body>
</html>
