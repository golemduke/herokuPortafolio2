<section>
    <br>
    <h1 class="titulo" align="center">Bienvenidos a MEGARED</h1>
        <p class="fontIntr">
            <br ><h2 align="center">TRABAJAMOS CON LOS MEJORES Y TÚ ERES UNO DE ELLOS </h2><br><br><br></p>
            <div class="container"><?php if (isset($_GET["accion"])) { ?>
            <div class="<?= $clase ?>" role="alert">
                <?= $mensaje ?>
            </div>
            </div>
        <?php } ?>
    <div class="principal">
        <div class="introduccion">
            <br>
            <img class="imgLogin" src="logoMEGARED.png">
            <br><br><br>  
        </div>
        <div id="login">
            <h3 align="center">Iniciar Sesión</h3>
            <br>
            <form action="iniciarSesion.php" method="post">
                <div class="form-group">
                    <label for="usuario" class="labelLg">Usuario</label>
                    <input type="text" class="form-control" id="usuario" name="usuario">
                </div>
                <div class="form-group">
                    <label for="contrasena" class="labelLg">Contraseña</label>
                    <input type="password" class="form-control" id="contrasena" name="contrasena">
                </div>
                <br>
                <button type="submit" class="btn btn-secondary">Iniciar Sesión</button>
            </form>
        </div>
    </div>
    <br>
</section>