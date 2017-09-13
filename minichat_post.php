<?php

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'leilalababsa');
}

catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}


if (isset($_POST['mdp']) and $_POST['mdp'] == 'kangourou')
{
    echo
}
else
{
    echo
}

header('Location: minichat.php');

?>
