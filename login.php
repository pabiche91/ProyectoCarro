<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script>
  <link rel="stylesheet" href="style.css">
</head>

<body><br><br><br><br>

<!-- FOrmulario para logearse -->
  <form method="POST" clas="formLog">
    <h1 style= color:white;>LOG IN</h1>
    <div class="inset">
      <p>

        <?php
        include("conexion_db.php");
        include("controlador.php");
        
        ?>

        <label for="email">Correo</label>
        <input type="text" name="correo" id="correo">
      </p>
      <p>
        <label for="password">Password</label>
        <input type="password" name="clave" id="clave">
      </p>
    
    </div>
    <p class="p-container">
      <span>Olvido la contraseña?</span>
      <input type="submit" name="btnIngresar" value="Ingresar">
    </p>
  
  </form>
<div style="color: red">
  <h6><center>Usuarios: pablo.canata22@gmail.com / miguel.lorea@gmail.comb <br>
  password: 123
</center>
</h6>
</div>
</body>
</html>