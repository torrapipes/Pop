<!doctype html>
<html>
<?php
$page_title = 'Pulpo';
$css = 'index';
include_once "head.php";
?>
<body>
    <div id="bg">
        <img src="../img/pulpo.png" id="pop"/>
    </div>
    <div id="login-box">
        <form>
            
            <div class="inputs">
                <label for="usuario">Usuario</label>
                <input type="text" name="usuario">
            </div>
            

            <div class="inputs">
                <label for="password">Contraseña</label>
                <input type="password" name="password">
            </div>

            <div>
                <input type="submit" name="enter" value="Entrar">
            </div>

        </form>
    </div>
</body>
</html>
