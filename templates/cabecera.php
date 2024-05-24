<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corcheas Music</title>

    <!-- Import de Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <header>
        <div class="container-flex">
            <div>
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand"  href="main.php">
                            <h2 style= "font-family:  Courier New"><b>Corcheas Music</b></h2>
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarColor01">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="main.php"><h7>Productos</h7></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="carritoCompras.php"><h7>Carrito de compras</h7> (<?php echo (empty($_SESSION['carrito'])) ? 0 : count($_SESSION['carrito']); ?>)</a>
                                </li>
                            </ul>
                            <div>
                                <a class="nav-link active" aria-current="page" href="logout.php"><b>Cerrar sesion</b></a>
                            </div>

                        </div>
                    </div>
                </nav>
    </header>
    <div class="container">