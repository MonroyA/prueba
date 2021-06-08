<a href="../index.php?pagina=registro">registro</a>

<?php
if (isset($_GET["pagina"])) {
    if ($_GET["pagina"] == "registro") {
        include $_GET["pagina"] . ".php";
    }else{
        include "ingreso.php";
    }
}