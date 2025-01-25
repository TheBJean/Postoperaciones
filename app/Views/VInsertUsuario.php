<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="<?php base_url()?>UsuarioCreado" method="post">
    <label for="">Nombre</label>
        <input type="text" name="VNombre">
        <label for="">Apellido</label>
        <input type="text" name="VApellido">
        <label for="">Correo</label>
        <input type="text" name="VCorreo">
        <label for="">Contraseña</label>
        <input type="text" name="VPass">
        <button type="submit">Guardar</button>
    </form>
</body>
</html>