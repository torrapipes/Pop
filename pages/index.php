<!doctype html>
<html>
<?php
$page_title = 'PopHelpi';
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
                <input type="text" name="usuario" placeholder="Usuario">
            </div>

            <div class="inputs">
                <input type="password" name="password" placeholder="Password">
            </div>

            <div>
                <input type="submit" name="enter" value="Entrar">
            </div>

        </form>
    </div>
</body>
</html>
