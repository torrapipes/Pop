<!doctype html>
<html>
<?php
$page_title = 'Diario';
$css = 'diario';
include_once "head.php";
?>
<body>
    <?php
    include_once "header.php";
    ?>
    <div class="calendar">
        <?php
            // Nos conectamos a la base de datos
            $dbhost = "localhost";
            $dbname = "pop";
            $dbusername = "phpmyadminuser";
            $dbpassword = "123";

            try {
                $conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbusername, $dbpassword);

                $events = null;
                $statement = $conn->prepare("SELECT * FROM diario ");
                $statement->execute();
                $num_rows = $statement->fetchColumn();

//            for ($dia=1; $dia<10; $dia++) {

                echo $events;
//            }
            }
            catch (PDOException $e) {
                echo 'La conexión a base de datos no ha funcionado';
                echo $e->getMessage();
            }
        ?>
    </div>

    <script type="text/javascript">
        var xhttp = new XMLHttpRequest();
        xhttp.open("GET", "dns/read.php", true);
        xhttp.send();
    </script>

    <?php
    include_once "footer.php";
    ?>
</body>
</html>
