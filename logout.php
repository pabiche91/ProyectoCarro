<?php

// Iniciar o reanudar la sesión
session_start();
session_destroy();

header("Location: main.php");
exit;

?>