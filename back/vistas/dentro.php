<?php
if (isset($_SESSION["validarIngreso"])) {
    if ($_SESSION["validarIngreso"] != "ok") {
        echo '<script>window.location = "../index.php?pagina=dentro"; </script>';
        return;
    }
}else{
    echo '<script>window.location = "../index.php?pagina=ingreso"; </script>';
    return;
}
?>
<h1> Ya estas dentro </h1>
<div class="">
    <p style="color:#0c0c0c">
        Gracias por probar nuestro sistema de login <br>
        Desarrollo Frontend: Selvin Monroy & Pablo Machan <br>
        Desarrollo Backend: Pablo Machan
    </p>
    <button class="button" style="display:block; margin: auto; width: 100px;">
        <a class="link" style="color:#fff" href="../index.php?pagina=salir">Salir</a>
    </button>
    <?php
    // metodo no estatico para que el controlador decida que hacer
    $ingreso = new ControladorFormularios();
    $ingreso -> ctrIngreso();
    ?>

    </div>