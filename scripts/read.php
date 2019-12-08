<?php
header('Access-Control-Allow-Origin: *'); 
header('Content-Type: application/json');
$dbhost = "localhost";
$dbname = "pop";
$dbusername = "phpmyadminuser";
$dbpassword = "123";
try {
    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbusername, $dbpassword);
    $statement = $conn->prepare("SELECT * FROM diario");
    $statement->execute();
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);
    print_r()
    $json = json_encode($results);

    // cerramos la conexión
    $conn = null; 
    echo $json;
} catch (PDOException $e) {
    echo 'Error en la conexión a la base de datos pop';
    echo $e->getMessage();
}
?>