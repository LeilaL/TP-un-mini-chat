<?php

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=TP mini chat;charset=utf8', 'root', 'leilalababsa');
}

catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}




header('Location: minichat.php');

?>
