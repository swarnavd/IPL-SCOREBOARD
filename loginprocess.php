<?php

require_once __DIR__ . '/Query.php';

if (isset($_POST['login'])) {
  $query = new Query();
  // Fetches user's data respective to a particular mail id
  $row = $query->validUser($_POST['email']);
  // Checks if Password matches.
  if ($_POST['password'] == $row['password']) {
    session_start();
    $_SESSION['flag'] = 1;
    $_SESSION['email'] = $row['email'];
    header('location:/form');
  }
  else {
    header('location:/login');
  }
}
