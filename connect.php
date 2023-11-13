<?php

try
{
    // On se connecte à MySQL
    $bdd = new PDO('mysql:host=localhost;dbname=WeatherApp;charset=utf8', 'okly', 'Jdeveloper23');
    echo "Connexion réussie !<br><br><br><br>";

    // New code to read the content of the table Météo
    $result = $bdd->query('SELECT ville, haut, bas FROM Météo');
    echo "<style>table, th, td {border: 1px solid black; border-collapse: collapse;}</style>";
    echo "<table>";
    echo "<tr>";
     echo "<th>Ville</th>";
     echo "<th>Haut</th>";
     echo "<th>Bas</th>";
    echo "</tr>";
$count = 0;
while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    if($count < 100) {
     echo "<tr>";
        echo "<td>" . $row['ville'] . "</td>";
        echo "<td>" . $row['haut'] . "</td>";
        echo "<td>" . $row['bas'] . "</td>";
        echo "<td><form action='delete.php' method='post'><input type='hidden' name='ville' value='" . $row['ville'] . "'><input type='submit' value='Delete'></form></td>";
     echo "</tr>";
        $count++;
    } else {
        break;
    }
}
echo "</table><br><br>";
}
catch(Exception $e)
{
    // En cas d'erreur, on affiche un message et on arrête tout
    die('Erreur : '.$e->getMessage());
}
?>
<?php

echo "<form action='insert.php' method='post'>";
echo "<label for='ville'>Ville</label><br>";
echo "<input type='text' id='ville' name='ville'><br>";
echo "<label for='haut'>Haut</label><br>";
echo "<input type='text' id='haut' name='haut'><br>";
echo "<label for='bas'>Bas</label><br>";
echo "<input type='text' id='bas' name='bas'><br>";
echo "<input type='submit' value='Submit'>";
echo "</form>";
?>