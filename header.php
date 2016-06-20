<?php
// requiered by all documents
session_start();

error_reporting(E_ALL);
ini_set('display_errors', 'On');

$conn = mysqli_connect("localhost", "root", "root", "SAE_Project");

$allUsers = mysqli_query($conn, "SELECT * FROM user");
$array = mysqli_fetch_assoc($allUsers);

?>

<!-- CSS Einbindung für den Header -->
<link rel="stylesheet" href="css/header.css" media="screen" charset="utf-8">

<!-- Navigation zu allen Unterseiten im Header-Bereich -->
    <header>
      <nav>
        <a href="index.php"><button><b>Startseite</b></button></a>
        <a href="#"><button><b>Französisch</b></button></a>
        <a href="#"><button><b>Latein</b></button></a>
        <a href="über_mich.php"><button><b>Über mich</b></button></a>
        <a href="#"><button><b>Kontakt</b></button></a>
      </nav>
    </header>
