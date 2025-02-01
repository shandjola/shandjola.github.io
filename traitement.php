<?php
include 'db_connection.php'; // inclusion du fichier de la connection


if(isset($_POST['Envoyer']))
{
    if(isset($_POST['nom']) AND isset($_POST['mail']) AND isset($_POST['message']))
    {
        if(!empty($_POST['nom']) AND  !empty($_POST['mail']) AND !empty($_POST['message']) )
        {
           $nom=htmlspecialchars($_POST['nom']); // methode php qui permet de filtrer les donnees pour eviter que l'utilisateur insere du n'importe quoi 
           $mail=htmlspecialchars($_POST['mail']);
           $message=htmlspecialchars($_POST['message']);

           echo "<h2> Bonjour <mark><br> $nom </br></mark> merci pour votre mail: <mark> <br> $mail </br></mark>, nous avons lu votre message: </br></br> $message </h2>";

        }
    }
    
    
}
?>