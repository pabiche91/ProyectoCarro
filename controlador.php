<?php


if (!empty($_POST["btnIngresar"])) {
    if (empty($_POST["correo"]) && empty($_POST["password"])) {
        echo '<div class= "alert alert-danger"> Los campos se encuentran vacios</div>';
    }else {
    include("conexion_db.php");
    $correo = $_POST["correo"];
    $clave = $_POST["clave"];
    $sql = $conexion->query("SELECT count(clave) as cant, l.* FROM login l WHERE correo='$correo' and clave='$clave'");
    $datos = $sql->fetch_assoc();

    $sql_nombre = $conexion->query ("SELECT nombre FROM login WHERE correo='$correo' and clave='$clave'");
    $nombre = $sql_nombre->fetch_column();


//Checkeo que en la busqueda realizada arriba se haya encontrado 1 resultado, lo que quiere decir que hubo coincidencia de correo y password
    if ($datos['cant']=="1") {
        $_SESSION['usuario'] = $nombre;
    
    header("Location: main.php");
        
    } else {
        echo '<div class= "alert alert-danger"> Acceso denegado </div>';
    }
}
}

?>