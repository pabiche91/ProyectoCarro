<?php
////Control de sesion iniciada
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}


?>
<?php

// Pregunto si el boton 'btnAgregar' fue clickeado y si es asi, guardo en variables locales todos los parametros del formulario correspondiente al boton
if (isset($_POST['btnAgregar'])) {
    $id = $_POST["id"];
    $producto = $_POST["producto"];
    $cantidad = $_POST["cantidad"];
    $precio = $_POST["precio"];

    // Pregunto si el carrito esta vacio. 
    if (!isset($_SESSION['carrito'])) {
        // Si el carrito esta vacio guardo las variables en un array de session con un indice '0'
        $carrito_actual = ['id' => $id, 'producto' => $producto, 'cantidad' => $cantidad, 'precio' => $precio];
        $_SESSION['carrito'][0] = $carrito_actual;
    } else {
        $num_agregado = 0;
        //Si el carrito ya tiene un producto cargado, primero cuento cuantos productos tiene
        $num_agregado = count($_SESSION['carrito']);
        // Guardo las variables del producto en un array de session en la posicion de  'count'
        $carrito_actual = ['id' => $id, 'producto' => $producto, 'cantidad' => $cantidad, 'precio' => $precio];
        $_SESSION['carrito'][$num_agregado] = $carrito_actual;
    }
}

include 'templates/cabecera.php';
?>


<br>
<?php
echo '<br><br><div class="text-center" style="color: red; font-family: Courier New;  border: 4px solid white; padding: 10px;">
<i class="bi bi-emoji-sunglasses"></i><h5>Bienvenido ' . $_SESSION["usuario"] . ', iniciaste tu sesión!  
<svg xmlns="http://www.w3.org/2000/svg" color="green" width="25" height="25" fill="currentColor" class="bi bi-person-fill-check" viewBox="0 0 16 16">
<path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514ZM11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
<path d="M2 13c0 1 1 1 1 1h5.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.544-3.393C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4Z"/>
</svg><br> </h5></div>';

?>
<br><br>
<hr style= "color: white";><br>


<div style= "color: white; font-family:'Courier New', Courier, monospace"> <h6>Estos son algunos de nuestros productos...</h6></div>
<div class="row justify-content-center align-items-center" style="margin: 80px ;">
<!-- Formulario interactivo con el usuario -->
    <div class="card" style="width: 20rem; margin: 15px;">                                                                                                  
        <img src="https://http2.mlstatic.com/D_NQ_NP_2X_812986-MLA48050585985_102021-F.webp" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Guitarra Cort "A"</h5>
            <p class="card-text">Guitarra Estudio</p>
            <p>
            <h3>$500000</h3>
            </p>
            <form action="main.php" method="post" class="formAg">
                <input type="hidden" name="id" value=1>
                <input type="hidden" name="producto" value="Cort A">
                <input type="hidden" name="precio" value=150000>
                <input type="number" placeholder="Unidades" name="cantidad" style="width: 60px">
                <input type="submit" value="Agregar al carrito" name="btnAgregar" class="btn btn-success">
            </form>
        </div>
    </div>


    <div class="card" style="width: 20rem; margin: 15px;">
        <img src="https://http2.mlstatic.com/D_NQ_NP_2X_800189-MLA48802518692_012022-F.webp" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Guitarra Cort "B"</h5>
            <p class="card-text">Guitarra profesional</p>
            <p>
            <h3>$150000</h3>
            </p>
            <form action="main.php" method="post" class="formAg">
                <input type="hidden" name="id" value=2>
                <input type="hidden" name="producto" value="Cort B">
                <input type="hidden" name="precio" value=150000>
                <input type="number" placeholder="Unidades" name="cantidad" style="width: 60px">
                <input type="submit" value="Agregar al carrito" name="btnAgregar" class="btn btn-success">
            </form>
        </div>
    </div>


    <div class="card" style="width: 20rem; margin: 15px;">
        <img src="https://http2.mlstatic.com/D_NQ_NP_2X_752039-MLA48484800499_122021-F.webp class" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Guitarra Cort "C"</h5>
            <p class="card-text">Guitarra semi-profesional</p>
            <p>
            <h3>$300000</h3>
            </p>
            <form action="main.php" method="post" class="formAg">
                <input type="hidden" name="id" value=3>
                <input type="hidden" name="producto" value="Cort C">
                <input type="hidden" name="precio" value=300000>
                <input type="number" placeholder="Unidades" name="cantidad" style="width: 60px">
                <input type="submit" value="Agregar al carrito" name="btnAgregar" class="btn btn-success">
            </form>
        </div>
    </div>
</div>
</div>
</div>
</div>
<?php
include 'templates/pie.php';
?>