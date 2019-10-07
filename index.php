<?php

require("functions.php");
$pdo = connectToDatabase();
$statement = $pdo->prepare('SELECT * FROM students');
$statement->execute();
$results = $statement->fetchAll(PDO::FETCH_OBJ);
var_dump($results);

require('index.view.php');


?>

