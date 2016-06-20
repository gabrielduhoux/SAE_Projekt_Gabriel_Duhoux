<?php

error_reporting(E_ALL);
ini_set('display_errors', 'On');

include_once('header.php');

if (!empty($_POST['comment_input'])) {
  mysqli_query($conn, "INSERT INTO comments ");
}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Persönlicher Bereich</title>
    <link rel="stylesheet" href="css/login.css" media="screen" charset="utf-8">
  </head>
  <body>

    <div id="wrapper">

      <div class="chat_area">
        <div class="comment">
          <?php if(!empty($_POST['comment_input'])) {
            $_POST['comment_input'] = str_replace("\n","<br>", $_POST['comment_input']);
            echo $_POST['comment_input'];
          } else {
            echo "Hier erscheint Ihre Anfrage";
          }?>
        </div>


      </div>

      <form class="comment_input" action="login.php" method="post">
        <textarea class="question" name="comment_input" rows="8" cols="30" placeholder="Schreibe hier deine Anfrage"></textarea>
        <input type="submit" name="comment_submit" value="Senden">
      </form>


    </div>
  </body>
</html>












<?php
include_once('footer.php');



?>
