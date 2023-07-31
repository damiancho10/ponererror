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
    <form action="" method="post">
        <tr>
            <td>
                <input type="text" name="hombre" placeholder="Ingresar el nombre">
            </td>
        </tr>
        <tr>
            <td>
                <input type="email" name="correo" placeholder="Ingresar correo">
            </td>
        </tr>

    </form>
    
</body>
</html>