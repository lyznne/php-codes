<?php

try {
    $pdo =  new PDO("mysql:host=hostname; dbname=database", "username", "password");

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Conections failed" . $e->getMessage());
}


$sql = "SELECT * FROM table_name";
$stmt = $pdo->query($sql);

if ($stmt->rowCount() > 0) {
    while ($row = $stmt->fetch()) {
        echo "name: " . $row["name"] . "<br>";
    }
} else {
    echo "no records";
}
$pdo = null;

?>