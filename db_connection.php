<?php
// Paramètres de connexion
$servername = "localhost"; 
$username = "root";         
$password = "";             
$dbname = "yetuveka"; 

// Création de la connexion


try{
    $conn = new PDO("mysql:host=$servername;dbname=", $username,$password);
    $conne->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "la connecton a ete bien etablie";
}
catch (PDOException $e){
    echo"la connexion a echoue:" .$e->getMessage();
}
//$conn = new mysqli($servername, $username, $password, $dbname);

// Vérification de la connexion
//if ($conn->connect_error) {
    //die("Échec de la connexion : " . $conn->connect_error);
//}


?>