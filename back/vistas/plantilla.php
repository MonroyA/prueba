<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="vistas/">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title>Login</title>
</head>
<body>
    <?php
      if (isset($_GET["pagina"])) {
        if($_GET["pagina"]== "registro" ||
        $_GET["pagina"]== "ingreso" ||
        $_GET["pagina"] == "dentro" ||
        $_GET["pagina"] == "salir"
        ){
          include $_GET["pagina"] . ".php";
        }else{
          include "ingreso.php";
        }
        
      }else{
        include "ingreso.php";
      }
    ?>
</body>
</html>