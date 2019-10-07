<?php

// echo "string";

function connectToDatabase(){
try{
	$pdo = new PDO('mysql:host=127.0.0.1;dbname=test','root','root', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

}catch(PDOException $exception){
echo $e->getMessage();


}

return $pdo;


}


?>