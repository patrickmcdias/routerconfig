<?php
  session_start();
  if(!isset($_SESSION['auth']) || $_SESSION['auth'] === false)
    header('Location: login.html');
?>
