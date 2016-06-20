<?php
// Einbindung des Headers
include_once('header.php');
require_once('functions.php');


if (!empty($_POST['login'])) {
  if (condition) {
    # code...
  }
}












?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Nachhilfe - Startseite - Staphanie</title>

    <!-- CSS Einbindung für die Startseite -->
    <link rel="stylesheet" href="css/main.css" media="screen" charset="utf-8">
  </head>
  <body>
    <div id="wrapper">

      <!-- Startseite: Info-Bereich, um was geht es? -->
      <div class="main_content">
        <h3>Private Nachhilfe in Französisch und Latein</h3>
        <h4 class="h4">Gegeben von Stephanie Ginter, Lehramt-Studentin im siebten Semester</h4>
        <p class="main_text">
          Neben meinem Lehramt Studium an der Ludwig Maximilian Universität München
          gebe ich seit 3 Jahren regelmäßig Nachhilfe in den Fächern Französisch und Latein.
          <br><br>
          Da mein Vater Franzose ist, sind meine Französisch-Kenntnisse sehr fortgeschritten.
          Ich spreche regelmäßig bei Familienbesuchen in Frankreich und in den Vorlesungen
          an der Uni. Dadurch bin ich in der Lage, perfekt gesprochenes,
          sowie fehlerfreies Französisch zu sprechen und zu schreiben.
          Mein Wissen gebe ich sehr gerne weiter. Ich bin geduldig,
          erkläre langsam und verständlich und nehme mir viel Zeit für
          alle offenen Fragen.
          <br>
          Im Rahmen mehrerer Praktika habe ich Erfahrung im Unterrichten
          sammeln können. Unterrichtsvorbereitung, Struktur und den Blick für
          das Wesentliche gehören im Alltag einer Lehrerin zu den wichtigsten
          Eigenschaften. Aber auch der Umgang mit den Schülern, Durchsetzungsvermögen
          und Gleichbehandlung gehören für mich zu den wichtigen Aspekten.
          <br>
          Nach telefonischer Vereinbarung gebe ich einmal pro Woche eine Stunde,
          wunschweise auch anderthalb Stunden, Nachhilfe.<br> Dafür komme ich sehr
          gerne zu Ihnen nach Hause, um Ihnen und Ihrem Kind nicht in
          Ihrem Alltag dazwischen zu funken.
          <br><br>
          In freudiger Erwartung Ihres Anrufes,
          <br><br>
          <b>Stephanie Ginter</b>
        </p>
      </div>

      <!-- Login für registrierte Nutzer -->
      <h4>Sie sind bereits registriert?</h4>
      <form class="login" action="login.php" method="post">
        <input class="login_values" type="email" name="login_mail" placeholder="Email Adresse">
        <input class="login_values" type="password" name="login_pass" placeholder="Passwort"><br>
        <input class="login_submit" type="submit" name="login_submit" value="Anmelden">
      </form>

      <hr>

      <!-- Login für neue Nutzer -->
      <h4>Sie möchten sich neu registrieren?</h4>
      <form class="new_user" action="login.php" method="post">
        <input class="new_user_name" type="text" name="new_user_firstname" placeholder="Vorname">
        <input class="new_user_name" type="text" name="new_user_lastname" placeholder="Nachname"><br>
        <input class="new_user_email" type="email" name="new_user_email" placeholder="Email Adresse">
        <input class="new_user_email" type="email" name="new_user_email_conf" placeholder="Email überprüfen"><br>
        <input class="new_user_pass" type="password" name="new_user_pass" placeholder="Passwort">
        <input class="new_user_pass" type="password" name="new_user_pass_conf" placeholder="Passwort überprüfen"><br>
        <input class="new_user_submit "type="submit" name="new_user_submit" value="Registrieren">
      </form>

      <!-- Bild zur Person -->
      <div class="picture">
        <img src="images/Stephanie.JPG" alt="Stephanie" width="200px" height="200px" />
      </div>
      <div class="clearer">
        <!-- Nur da, um den float aufzuheben -->
      </div>



<?php
// Einbindung des Footers
include_once('footer.php');

?>
