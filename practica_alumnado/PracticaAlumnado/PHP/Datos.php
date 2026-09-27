<?php

include "Conexion.php";

$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$fecha_nacimiento = $_POST["fecha_nacimiento"];
$curso = $_POST["curso"];
$email = $_POST["email"];
$password = $_POST["password"];

$sql = "SELECT COUNT(*) FROM alumnos WHERE curso = $curso";

$resultado = mysqli_query($conexion, $sql);

$fila = mysqli_fetch_assoc($resultado);

$cantidad = $fila["COUNT(*)"];

if ($cantidad < 25){
    $sql = "INSERT INTO alumnos(nombre, apellidos, fecha_nacimiento, curso, email, contrasenia) 
    VALUES('$nombre', '$apellidos', '$fecha_nacimiento', $curso, '$email', '$password')"; 

    $resultado = mysqli_query($conexion, $sql);

    if ($resultado){
        echo "Alumno registrado correctamente";
    } else {
        echo "No se ha podido registrar al alumno";
    }
} else {
    echo "No se puede matricular, el curso esta completo";
}

mysqli_close($conexion);

?>