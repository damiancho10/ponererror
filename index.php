<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validar Formulario</title>
    <style type="text/css">
        <?php
        if(isset($error)){
            ?>
            <tr>
        <td id="error"> El error es $error</td>
        </tr>
        input:focus{border:solid red 1px}
        <?php
     }
     ?>
    </style>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <tr>
            <td>
                <label>Nombre</label>
                <input type="text" name="hombre" placeholder="Ingresar el nombre" require>
            </td>
        </tr>
        <tr>
            <td>

            <label>correo</label>
                <input type="email" name="correo" placeholder="Ingresar correo" require>
            </td>
        </tr>
        <input type="submit" value="enviar">

    </form>
    
</body>
</html>