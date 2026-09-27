<?php

include "Conexion.php";

$id = $_POST["id"];
$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$fecha_nacimiento = $_POST["fecha_nacimiento"];
$curso = $_POST["curso"];
$email = $_POST["email"];
$password = $_POST["password"];

$sql = "UPDATE alumnos SET nombre = '$nombre', apellidos = '$apellidos', fecha_nacimiento = '$fecha_nacimiento', curso = '$curso', email = '$email', contrasenia = '$password' WHERE id = $id";

$resultado = mysqli_query($conexion, $sql);

if ($resultado){
    echo "Alumno modificado correctamente";
} else {
    echo "No se ha podido modificar el alumno";
}

mysqli_close($conexion);
?>