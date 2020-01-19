<?php
if (isset ($_POST)) {
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=web_cnam', 'root', '');
    }
    catch (Exception $e)
    {
            die('Erreur : ' . $e->getMessage());
    }
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $mail = $_POST['mail'];
    if(empty($nom) OR empty($prenom)) {
        print("<center>Le '<b>Titre</b>' et / ou le <b>Nom</b> est vide !</center>");
    exit();
    }
    else{
        $reponse = $bdd->prepare('INSERT INTO Utilisateur VALUES ($nom, $prenom, $mail)');
        $bdd->execute();
    }
}
?>