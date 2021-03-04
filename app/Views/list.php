<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Clientes</title>
</head>

<body>

    <div class="container">
        <h1>CLIENTES</h1>
        <div class="row">
            <div class="col-sm-12">
                <form method="POST" action="<?php echo base_url().'/create' ?>">
                    <label for="nombreCliente">Nombre cliente</label>
                    <input type="text" name="nombreCliente" id="nombreCliente" class="form-control">
                    <label for="cedulaliente">Cédula cliente</label>
                    <input type="text" name="cedulaCliente" id="cedulaCliente" class="form-control">
                    <br>
                    <button class="btn btn-primary">Guardar</button>
                </form>
            </div>
        </div>
        <hr>
        <h2>Listado de personas</h2>
        <div class="row">
            <div class="col-sm-12">
                <div class="table table-responsive">
                    <table class="table table-hover table-bordered">
                        <tr>
                            <th>id cliente</th>
                            <th>Nombre cliente</th>
                            <th>cédula cliente</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </tr><?php foreach ($datos as $key) : ?>
                            <tr>
                                <td><?php echo $key->cliente_id ?></td>
                                <td><?php echo $key->nombre_cliente ?></td>
                                <td><?php echo $key->cedula_cliente ?></td>
                                <td>
                                    <a href="<?php echo base_url() . '/findById/'.  $key->cliente_id ?>" class="btn btn-warning btn-sm">Editar</a>
                                </td>
                                <td>
                                    <a href="<?php echo base_url() . '/delete/' . $key->cliente_id ?>" class="btn btn-danger btn-sm">Eliminar</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>