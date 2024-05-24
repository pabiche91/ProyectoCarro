<?php
//Control de sesion iniciada
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}

include 'templates/cabecera.php';
?>
<br><br><br>
<div>

    <h4 style="color:aliceblue; font-family:  Courier New">Productos agregados al carrito</h4><br>
    <hr style="color:white">
    <br><br><br>

    <div class="col-9">
        <?php
        if (!empty($_SESSION['carrito'])) { ?>

            <table class="table table-sm table-red" style="color:azure">
                <tr>
                    <th width=10%>
                        <h3>Descripcion</h3>
                    </th>
                    <th width=15% class="text-center">
                        <h3>Cantidad</h3>
                    </th>
                    <th width=20% class="text-center">
                        <h3>precio</h3>
                    </th>
                    <th width=20% class="text-center">
                        <h3>Total</h3>
                    </th>
                    <th width=20% class="text-center">
                        <h2></h2>
                    </th>
                </tr>

                <?php $total = 0;
                $i = 0;
                foreach ($_SESSION['carrito'] as $value) { ?>

                    <tr>
                        <td width=40%>
                            <h4><?php echo $value["producto"] ?></h4>
                        </td>
                        <td width=15% class="text-center">
                            <h4><?php echo $value["cantidad"] ?></h4>
                        </td>
                        <td width=20% class="text-center">
                            <h4><?php echo "$", $value["precio"] ?></h4>
                        </td>
                        <td width=20% class="text-center">
                            <h4>$<?php echo ($value["precio"] * $value["cantidad"]); ?></h4>
                        </td>
                        <td width=20% class="text-center"> <a class="btn btn-danger btn-sm" href="eliminar.php?in=<?php echo $i; ?>">
                                <h4>Eliminar</h4>
                            </a></td>
                        <?php $i++;  ?>
                    </tr>

                    <?php $total = $total + ($value["precio"] * $value["cantidad"])  ?>

                <?php } ?>

                <tr>
                    <td colspan="3" style="text-align: right">
                        <h2>Total</h2>
                    </td>
                    <td style="text-align: center">
                        <h3>$<?php echo ($total); ?></h3>
                    </td>
                    <td></td>
                </tr>
            </table>

            <br><br><br><br>
            <button type="button" class="btn btn-primary" onclick="window.location.href = 'https://www.mercadopago.com';">Comprar</button>

    </div>
<?php  } else { ?>


</div>
<div class="alert alert-danger col-3 text-center mx-auto">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
    </svg>

    Lo sentimos, no hay nada en el carrito

<?php }
?>
</div>

<br><br>
<hr style="color:white">

<?php
include 'templates/pie.php';
?>