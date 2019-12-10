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
        <form id="login-form" class="form hide" method="POST" action="home.php">
            
            <div class="inputs">
                <input type="text" name="username" placeholder="Usuario">
            </div>

            <div class="inputs">
                <input type="password" name="password" placeholder="Contraseña">
            </div>

            <div>
                <input type="submit" name="enter" value="Entrar">
            </div>
            <a href="#" id="login-text" class="text">¿Aún no te has registrado? Regístrate aquí </a>
        </form>
    </div>
    <div id="registro-box">
        <form id="registro-form" class="form" method="POST">
            
            <div class="inputs">
                <input type="text" name="username" placeholder="Usuario">
            </div>

            <div class="inputs">
                <input type="password" name="password" placeholder="Contraseña">
            </div>

            <div>
                <input type="submit" name="register" value="Registrarse">
            </div>
            <a href="#" id="registro-text" class="text">¿Ya tienes una cuenta? Inicia sesión </a>
        </form>
    </div>



    <script type="text/javascript">

        var login = document.getElementById("login-text");
        var registro = document.getElementById("registro-text");

        function toggleModalRegistro() {
            document.getElementById("registro-form").classList.remove("show");
            document.getElementById("registro-form").classList.add("hide");

            document.getElementById("login-form").classList.remove("hide");
            document.getElementById("login-form").classList.add("show");
        }

        function toggleModalLogin() {
            document.getElementById("login-form").classList.remove("show");
            document.getElementById("login-form").classList.add("hide");

            document.getElementById("registro-form").classList.remove("hide");
            document.getElementById("registro-form").classList.add("show");
        }

        registro.onclick = toggleModalRegistro;
        login.onclick = toggleModalLogin;

        document.getElementById("registro-form").onsubmit = function() {
            document.getElementById("registro-form").style.display = "none";
            document.getElementById("login-form").classList.add("show");
            document.getElementById("registro-box").innerHTML = "<p style='text-align: center'>¡Registrado!</p>";
        }

    </script>
</body>
</html>
