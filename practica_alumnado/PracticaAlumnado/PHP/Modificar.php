<?php

include "Conexion.php";

$id = $_GET["id"];

$sql = "SELECT * FROM alumnos WHERE id = $id";

$resultado = mysqli_query($conexion, $sql);

$alumno = mysqli_fetch_assoc($resultado);

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Modificar Alumnos</title>
    <link rel="stylesheet" href="Estilo.css">
</head>

<body>

<h1>Modificar</h1>

<form action="Guardar_modificar.php" method="POST">

    <input type="hidden" name="id" value="<?php echo $alumno["id"]; ?>">

    <label>Nombre:</label>
    <input type="text" name="nombre" value="<?php echo $alumno["nombre"]; ?>" required>

    <br>

    <label>Apellidos:</label>
    <input type="text" name="apellidos" value="<?php echo $alumno["apellidos"]; ?>" required>

    <label>Fecha Nacimiento:</label>
    <input type="date" name="fecha_nacimiento" value="<?php echo $alumno["fecha_nacimiento"]; ?>" required>

    <br>

    <label>Curso:</label>
    <input type="radio" name="curso" value="1" <?php if ($alumno["curso"] == 1) echo "checked"; ?> required>
    1ºESO

    <input type="radio" name="curso" value="2" <?php if ($alumno["curso"] == 2) echo "checked"; ?>>
    2ºESO

    <input type="radio" name="curso" value="3" <?php if ($alumno["curso"] == 3) echo "checked"; ?>>
    3ºESO

    <input type="radio" name="curso" value="4" <?php if ($alumno["curso"] == 4) echo "checked"; ?>>
    4ºESO

    <br>

    <label>Email:</label>
    <input type="email" name="email" value="<?php echo $alumno["email"]; ?>" required>

    <br>

    <label>Contraseña:</label>
    <input type="password" name="password" value="<?php echo $alumno["contrasenia"]; ?>" required>

    <br>

    <input type="submit" value="Guardar cambios">

</body>

<?php

mysqli_close($conexion);

?>

</html>