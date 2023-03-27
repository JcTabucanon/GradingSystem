<?php

if (isset($_POST['submit'])) {
  # Grabbing data
  $uid = $_POST['username'];
  $pwd = $_POST['password'];

  # Instatiate LoginContr class
  include_once '../database/database.classes.php';
  include_once '../classes/admin-login.classes.php';
  include_once '../controller/admin-login.contr.php';
  $login = new LoginContr($uid, $pwd);

  # Running error handlers and user login
  $login->loginUser();

  # Going to Admin Dashboard
  header('Location: ../view/dashboard.php');
}
?>