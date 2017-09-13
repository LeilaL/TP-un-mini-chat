<?php

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=TP mini chat;charset=utf8', 'root', 'leilalababsa', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}

catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$req = $bdd->prepare('SELECT PSEUDO, MESSAGE FROM minichat WHERE PSEUDO = ? AND MESSAGE = ?');

$req->execute(array($_POST['PSEUDO'], $_POST['MESSAGE']));


header('Location: minichat.php');

?>
