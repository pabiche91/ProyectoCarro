<?php
//Control de sesion iniciada
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['usuario'])) {
   header("Location: login.php");
   exit();
}

// Paso por GET el indice del array, para luego poder eliminarlo si lo desea.

$index = $_GET["in"];

    if(isset($_SESSION['carrito'])){
        $carrito_actual = $_SESSION['carrito'];
        unset($carrito_actual[$index]);
        $carrito_actual = array_values($carrito_actual);
        $_SESSION['carrito'] = $carrito_actual;
        
        header("Location: carritoCompras.php");

    }

    ?>

