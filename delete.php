<?php
// delete.php

// Include your database connection file
include 'connect.php';

// Retrieve city name from form data
$ville = $_POST['ville'];

// Prepare SQL DELETE statement
$sql = "DELETE FROM Météo WHERE ville = :ville";

// Prepare statement
$stmt = $bdd->prepare($sql);

// Bind parameters
$stmt->bindParam(':ville', $ville);

// Execute statement
$stmt->execute();

// Redirect back to the connect page
header('Location: connect.php');
?>