<?php
$dbHost = "localhost";
$dbName = "asrblog";
$dbUser = "root";
$dbPass = "";

try{

    $conn = new PDO("mysql:Host=" . $dbHost . ";dbname=" . $dbName, $dbUser, $dbPass);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e){
    echo "error" . $e->getMessage();
}
    ?>