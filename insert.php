<?php
// insert.php

// Include your database connection file
include 'connect.php';

// Retrieve form data
$ville = $_POST['ville'];
$haut = $_POST['haut'];
$bas = $_POST['bas'];

// Prepare SQL INSERT statement
$sql = "INSERT INTO Météo (ville, haut, bas) VALUES (:ville, :haut, :bas)";

// Prepare statement
$stmt = $bdd->prepare($sql);

// Bind parameters
$stmt->bindParam(':ville', $ville);
$stmt->bindParam(':haut', $haut);
$stmt->bindParam(':bas', $bas);

// Execute statement
$stmt->execute();

// Redirect back to the form page
header('Location: connect.php');
?>