<?php

if (isset($_POST['add'])) {
  # Grabbing data
  $fname = filter_var(trim($_POST['firstname']), FILTER_SANITIZE_STRING);
  $lname = filter_var(trim($_POST['lastname']), FILTER_SANITIZE_STRING);
  $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
  $uid = filter_var(trim($_POST['username']), FILTER_SANITIZE_STRING);
  $pwd = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);
  $type = filter_var(trim($_POST['accounttype']), FILTER_SANITIZE_STRING);

  # Instantiate AddUserContr class
  include_once '../database/database.classes.php';
  include_once '../classes/users.classes.php';
  include_once '../controller/users.contr.php';
  $addUser = new AddUserContr($fname, $lname, $email, $uid, $pwd, $type);

  # Running error handlers and add user function
  $addUser->addUser();

  # Going to Users Page
  header('Location: ../view/users.php?success=added');
}

if (isset($_POST['edit'])) {
  # Grabbing data
  $id = filter_var(trim($_POST['id']), FILTER_SANITIZE_NUMBER_INT);
  $fname = filter_var(trim($_POST['firstname']), FILTER_SANITIZE_STRING);
  $lname = filter_var(trim($_POST['lastname']), FILTER_SANITIZE_STRING);
  $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
  $uid = filter_var(trim($_POST['username']), FILTER_SANITIZE_STRING);
  $pwd = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);
  $type = filter_var(trim($_POST['accounttype']), FILTER_SANITIZE_STRING);

  # Instantiate AddUserContr class
  include_once '../database/database.classes.php';
  include_once '../classes/users.classes.php';
  include_once '../controller/users.contr.php';
  $editUser = new EditUserContr($id, $fname, $lname, $email, $uid, $pwd, $type);

  # Running error handlers and add user function
  $editUser->editUser();

  # Going to Users Page
  header('Location: ../view/users.php?success=edited');
}

if (isset($_GET['delete'])) {
  # Grabbing data
  $id = filter_var(trim($_GET['id']), FILTER_SANITIZE_NUMBER_INT);

  # Instantiate AddUserContr class
  include_once '../database/database.classes.php';
  include_once '../classes/users.classes.php';
  include_once '../controller/users.contr.php';
  $deleteUser = new DeleteUserContr($id);

  # Running error handlers and add user function
  $deleteUser->deleteUser();

  # Going to Users Page
  header('Location: ../view/users.php?success=deleted');
}
?>
