<?php

$url = $_SERVER['REQUEST_URI'];
$url = explode("?", $url);

switch ($url[0]) {
  case '/':
    require_once __DIR__ .  '/home.php';
    break;
  case '/login':
    require 'login.php';
    break;
  case '/form':
    require_once __DIR__ . '/adminform.php';
    break;
  case '/Logout':
    require 'logout.php';
    break;
  case '/dash':
    require 'dashboard.php';
    break;
  case '/Home':
    require 'home.php';
    break;
  default:
    require 'login.php';
  }
?>
