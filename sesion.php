<?php
    session_start();
    include 'template/header.php';
    if(isset($_POST['cerrar_sesion'])) {
        session_destroy();
    }
?>
<body style="background-image: url('img/fondos/753999.jpg');
    background-repeat: no-repeat;
    background-size: cover;">
    <div class="modal-dialog text-center">
        <div class="col-sm-9 main-section" id="section_login">
        <div class="modal-content" id="modal_login">

            <div class="col-12 user-img">
            <img src="img/face.png">
            </div>

            <div class="col-12 form-input" id="imput_login">
            <form action="funciones/validar.php" id="formlg" method='post'>
                <div class="form-group" id="form_login">
                    <i class="fas fa-user icon_img"></i>
                    <input type="text" class="form-control" name="usuariolg" pattern="[A-Za-z0-9_-]{5,18}" required placeholder="Ingrese su usuario">
                </div>
                <div class="form-group" id="form_login2">
                    <i class="fas fa-unlock-alt icon_img"></i>
                    <input type="password" class="form-control" name="passlg" pattern="[A-Za-z0-9_-]{5,18}" required placeholder="Ingrese su contrase&ntilde;a">
                </div>
                <input type="hidden" id="tipo" value="login">
                <button type="submit" class="btn btn-success btn-lg" name="botonlg">ENTRAR</button>
            </form>
            </div>

            <div class="col-12 forgot">
            <a href="index.php">Olvide mi contrase&ntilde;a</a>
            </div>

        </div>
        </div>
    </div>
    <i class="fas fa-angle-double-left fa-lg" style="color:#FFFFFF;"></i>
    <a href="index.php"><Button type="button" class="btn btn-secondary btn-lg">ATRAS</Button></a>


</body>
</html>

