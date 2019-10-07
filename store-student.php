<?php
//connect to database

require('functions.php');
$pdo= connectToDatabase();


//check if form is submitted 
if(isset($_POST['submit'])){

$statement = $pdo->prepare('INSERT INTO students (
first_name,last_name,age, gender) VALUES (:first_name,:last_name,:age,:gender)');

$statement->execute([
'first_name' => $_POST['first_name'],
'last_name' => $_POST['last_name'],
'age' => $_POST['age'],
'gender' => $_POST['gender']


]);

var_dump('statement');


}

header('location:index.php')


//insert the record  to the database


?>