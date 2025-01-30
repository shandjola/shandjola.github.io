<?php
include 'db_connection.php'; // inclusion du fichier de la connection


if(isset($_POST['envoyer']))
{
    $nom = $_POST['nom'];
    $mail = $_POST['mail'];
    $message = $_POST['message'];

    $sql = ("INSERT INTO 'utilisateurs'('id','nom','mail','message') VALUES  (:nom, :mail, :message)" );
    $stmt - $conn->prepare($sql);

    $stmt->bindParam(' :nom', $nom);
    
    $stmt->bindParam(' :mail', $mail);
    
    $stmt->bindParam(' :message', $message);
    $stmt->execute();
    
    
}
?>