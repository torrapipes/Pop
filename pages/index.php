<!doctype html>
<html>
<?php
$page_title = 'PopHelpi';
$css = 'index';
include_once "head.php";
?>
<?php

    // Nos conectamos a la base de datos
    $dbhost = "localhost";
    $dbname = "pop";
    $dbusername = "phpmyadminuser";
    $dbpassword = "123";

    // try {
    //     // $conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbusername, $dbpassword);

    //     $msg = null;
        // // si es fa submit al form del registre
        // if (isset($_POST['register'])) {

        //     if (!$_POST['username'] ) {
        //         $msg = 'Por favor, elige un nombre de usuario';
        //         die("");
        //     } elseif (!$_POST['password']) {
        //         $msg = 'Por favor, elige una contraseña';
        //         die("");
        //     }

        //     $usercheck = $_POST['username'];
        //     $statement = $conn->prepare("SELECT username FROM users WHERE username = '$usercheck'");
        //     $statement->execute();
        //     $num_rows = $statement->fetchColumn();
        
        //     if ($num_rows != 0) {
        //         $msg = 'Lo sentimos, el usuario '.$_POST['username'].' ya está en uso.';
        //         die("");
        //     }
        
        //     $_POST['password'] = md5($_POST['password']);
        //     if (!get_magic_quotes_gpc()) {
        //         $_POST['password'] = addslashes($_POST['pass']);
        //         $_POST['username'] = addslashes($_POST['username']);
        //     }

        //     // insertamos el nuevo usuario en la base de datos
        //     $insert = "INSERT INTO users (username, password)
        //     VALUES ('".$_POST['username']."', '".$_POST['password']."')";
        //     $statement = $conn->prepare($insert);
    //     } 

    // } catch (PDOException $e) {
    //     echo 'La conexión a base de datos no ha funcionado';
    //     echo $e->getMessage();
    // }
?>
<body>
    <div id="bg">
        <img src="../img/pulpo.png" id="pop"/>
    </div>
    <div id="login-box">
        <form id="login-form" class="form" method="POST">
            
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

            <!-- <p class="error"></p> -->

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

    </script>
</body>
</html>
