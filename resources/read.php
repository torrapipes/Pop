<?php
$dbhost = "localhost";
$dbname = "pop";
$dbusername = "phpmyadminuser";
$dbpassword = "cateclau";
try {
    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbusername, $dbpassword);
    $statement = $conn->prepare("SELECT * FROM diario");
    $statement->execute();
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);
    $results = mb_convert_encoding($results, 'UTF-8', 'UTF-8');
    $json = json_encode($results);
    $conn = null;
    echo $json;
} catch (PDOException $e) {
    echo 'Error en la conexión a la base de datos pop';
    echo $e->getMessage();
}
?>
