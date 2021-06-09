<form class="formulario" method="POST">
    <h1>Iniciar sesión</h1>
    <div class="contenedor">
        <div class="input-contenedor">
            <i class="fas fa-user icon"></i>
            <input type="text" placeholder="Usuario" name="ingresoUsuario">
        </div>
        <div class="input-contenedor">
            <i class="fas fa-key icon"></i>
            <input type="password" placeholder="Contraseña" name="ingresoPassword">
        </div>
        <input type="submit" value="Iniciar sesión" class="button">
        <input type="submit" value="Iniciar sesión con Gmail" class="button2">
        <input type="submit" value="Iniciar sesión con Facebook" class="button3">
        <p>¿Ya tienes cuenta? <a class="link" href="../index.php?pagina=registro">Regístrate</a></p>

        <?php
        // metodo no estatico para que el controlador decida que hacer
        $ingreso = new ControladorFormularios();
        $ingreso -> ctrIngreso();
        ?>

    </div>
</form>
