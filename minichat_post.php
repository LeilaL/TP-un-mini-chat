<?php

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=TP mini chat;charset=utf8', 'root', 'leilalababsa', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}

catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$req = $bdd->prepare('INSERT INTO minichat(PSEUDO, MESSAGE)
VALUES(:PSEUDO, :MESSAGE)');

$req->execute(array(
    'PSEUDO' => $_POST['pseudo'],

    'MESSAGE' => $_POST['message']

    ));


header('Location: minichat.php');

?>
