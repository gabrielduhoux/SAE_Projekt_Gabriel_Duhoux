<?php

error_reporting(E_ALL);
ini_set('display_errors', 'On');

function checkLogin() {
  if (checkLoginCookie() || attemptLogin()) {
    $_SESSION['user_is_logged_in'] = true;
  }
}


function checkLoginCookie() {
  if (!empty($_COOKIE['loggedIn']) && $_COOKIE['loggedIn'] == 1) {
    return true;
  }
  return false;
}

function attemptLogin() {
  if (isset($_POST['email']) && isset($_POST['password'])) {
    // Datei user.txt auslesen
    $allUsers = getAllUsers();
    // JSON String in PHP umwandeln --> json_decode
    // Array durchgehen und jeden Wert mit Login-Daten vergleichen
    foreach ($allUsers as $user) {
      if ($user['name'] == $_POST['username'] && password_hash($_POST['password'], $user['pass'])) {
        if (!empty($_POST['stay_logged_in'])) {
          setcookie("loggedIn", "1", time() + 604800);
        }
        return true;
      }
    }
    // wenn korrekt --> return true
    // wenn kein korrekter Wert --> return false
  }
  return false;
}

function getAllUsers() {
  $usersString = file_get_contents("user.txt");
  if ($usersString === false) {
    exit('Userdatei konnte nicht ausgelesen werden');
  }
  $users = json_decode($usersString, true);
  if ($users === false) {
    exit('Userdatei falsch formatiert');
  }
  return $users;
}

// 14.04.2016

function validateUserData($login_email, $login_pass) {
  // Überprüfe, ob alle Werte im Formular eingegeben wurden
  if (empty($login_email) || empty($login_pass)) {
    return false;
  }
  // Gehe jeden einzelnen User aus der Userdatei durch
  // und überprüfe, ob der Name us dem Formular derselbe ist, wie
  // der Name aus der userdatei, Wenn ja -> user existiert bereits!
  if (!empty($users)) {
    foreach ($users as $user) {
        if ($user['login_email'] == $username) {
          return false;
        }
    }
  } return true;
}

function addUser($email, $password) {
  // Alle User auslesen
  $users = getAllUsers();
  array_push($users, ['login_email' => $email, 'login_pass' => password_hash($password, PASSWORD_BCRYPT)]);
}

function saveUsers($users) {
  $usersDB = json_encode($users);
  file_put_contents("user.txt", $usersJson);
}

function deleteUser($username) {
  $users = getAllUsers();

  $remainigUsers = [];

  foreach ($users as $user) {
    if ($user['name'] != $username) {
      array_push($remainigUsers, $user);
    }
  } saveUsers($remainigUsers);
}

?>
