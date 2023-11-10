<?php

try
{
    // On se connecte à MySQL
    $bdd = new PDO('mysql:host=localhost;dbname=WeatherApp;charset=utf8', 'okly', 'Jdeveloper23');
    echo "Connexion réussie !<br><br><br><br>";

    // New code to read the content of the table Météo
    $result = $bdd->query('SELECT ville, haut, bas FROM Météo');

    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        echo 'Ville: ' . $row['ville'] . ', Haut: ' . $row['haut'] . ', Bas: ' . $row['bas'] . '<br>';
    }
}
catch(Exception $e)
{
    // En cas d'erreur, on affiche un message et on arrête tout
    die('Erreur : '.$e->getMessage());
}
?>