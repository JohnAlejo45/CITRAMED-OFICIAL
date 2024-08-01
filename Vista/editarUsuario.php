<?php
extract($_REQUEST); 
require "../Modelo/conexionBaseDatos.php";
require "../Modelo/usuario.php";

if (isset($_REQUEST['idUsuario'])) {
    $idUsuario = $_REQUEST['idUsuario'];

    $objUsuario = new Usuario();
    $resultado = $objUsuario->consultaridUsuario($idUsuario);

    if ($resultado === false) {
        echo "Error en la consulta a la base de datos.";
        exit();
    }

    if ($resultado->num_rows > 0) {
        $registro = $resultado->fetch_object();
        if ($registro === null) {
            echo "No se pudo obtener el registro.";
            exit();
        }
        ?>
        
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet"> 
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        </head>
        <body>
            <div class="container">
                <h3 class="text-center">Favor Verifique la Siguiente Información de los Usuarios</h3>
                <hr />
                <div class="form-horizontal">
                    <form id="form1" name="form1" action="../Controlador/validarActualizarUsuario.php" method="POST">
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Usuario</label>
                            <input class="form-control col-sm-5" name="usuario" type="text" id="usuario" value="<?php echo htmlspecialchars($registro->usuLogin); ?>" required readonly>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Password</label>
                            <input class="form-control col-sm-5" name="password" type="password" id="password" value="">
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Estado</label>
                            <select class="form-control col-sm-5" name="estado">
                                <option value="Activo" <?php echo $registro->usuEstado == 'Activo' ? 'selected' : ''; ?>>Activo</option>
                                <option value="Inactivo" <?php echo $registro->usuEstado == 'Inactivo' ? 'selected' : ''; ?>>Inactivo</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Rol del Sistema</label>
                            <select class="form-control col-sm-5" name="rol">
                                <option value="Administrador" <?php echo $registro->usuRol == 'Administrador' ? 'selected' : ''; ?>>Administrador</option>
                                <option value="Medico" <?php echo $registro->usuRol == 'Medico' ? 'selected' : ''; ?>>Medico</option>
                                <option value="Paciente" <?php echo $registro->usuRol == 'Paciente' ? 'selected' : ''; ?>>Paciente</option>
                                <option value="Auxiliar" <?php echo $registro->usuRol == 'Auxiliar' ? 'selected' : ''; ?>>Auxiliar</option>
                            </select>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 control-label"></label>
                            <div class="col-sm-5">
                                <button type="submit" class="btn btn-warning btn-block">Actualizar</button>
                            </div>
                        </div>
                        <input name="idUsuario" type="hidden" value="<?php echo htmlspecialchars($registro->idUsuario); ?>">
                    </form>
                   <hr />
              </div>
            </div>
        </body>
        </html>
        <?php
    } else {
        echo "No se encontraron resultados para el ID de usuario proporcionado.";
    }
} else {
    echo "No se ha proporcionado un ID de usuario.";
}
?>
