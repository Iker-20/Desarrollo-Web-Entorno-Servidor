<?php

include "Conexion.php";

$sql = "SELECT * FROM alumnos";

$resultado = mysqli_query($conexion, $sql);

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Listado Alumnos</title>
    <link rel="stylesheet" href="Estilo.css">
</head>

<body>

    <h1>Alumnos</h1>

    <?php

    while ($alumno = mysqli_fetch_assoc($resultado)){
        echo "Nombre:" . $alumno["nombre"] . "<br>";
        echo "Apellidos:" . $alumno["apellidos"] . "<br>";
        echo "Fecha Nacimiento:" . $alumno["fecha_nacimiento"] . "<br>";
        echo "Curso:" . $alumno["curso"] . "<br>";
        echo "Email:" . $alumno["email"] . "<br>";

        echo "<a href='modificar.php?id=" . $alumno["id"] . "'>Modificar</a>";

        echo " | ";

        echo "<a href='eliminar.php?id=" . $alumno["id"] . "'>Eliminar</a>";

        echo "<hr>";
    }

    mysqli_close($conexion);

    ?>

</body>

</html>