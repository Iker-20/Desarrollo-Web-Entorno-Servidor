<?php

include "Conexion.php";

$id = $_GET["id"];

$sql = "DELETE FROM alumnos WHERE id = $id";

$resultado = mysqli_query($conexion, $sql);

if($resultado){
    echo "Alumno eliminado correctamente";
} else {
    echo "No se ha podido eliminar el alumno";
}

mysqli_close($conexion);

?>