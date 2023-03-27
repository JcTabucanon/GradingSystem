<?php

if (isset($_POST['add'])) {
  # Grabbing data
  $code = filter_var(trim($_POST['code']), FILTER_SANITIZE_NUMBER_INT);
  $pwd = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);
  $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
  $address = filter_var(trim($_POST['address']), FILTER_SANITIZE_STRING);
  $gender = filter_var(trim($_POST['gender']), FILTER_SANITIZE_STRING);
  $status = filter_var(trim($_POST['status']), FILTER_SANITIZE_STRING);
  $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
  $empstatus = filter_var(trim($_POST['empstatus']), FILTER_SANITIZE_STRING);

  # Instantiate AddInstructorContr class
  include_once '../database/database.classes.php';
  include_once '../classes/instructor.classes.php';
  include_once '../controller/instructor.contr.php';
  $addInstructor = new AddInstructorContr($code,$pwd, $name, $address, $gender, $status, $email, $empstatus);

  # Running error handlers and add instructor function
  $addInstructor->addInstructor();

  # Going to Instructor Page
  header('Location: ../view/instructor.php?success=added');
}

if (isset($_POST['edit'])) {
  # Grabbing data
  $id = filter_var(trim($_POST['id']), FILTER_SANITIZE_NUMBER_INT);
  $pwd = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);
  $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
  $address = filter_var(trim($_POST['address']), FILTER_SANITIZE_STRING);
  $gender = filter_var(trim($_POST['gender']), FILTER_SANITIZE_STRING);
  $status = filter_var(trim($_POST['status']), FILTER_SANITIZE_STRING);
  $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
  $empstatus = filter_var(trim($_POST['empstatus']), FILTER_SANITIZE_STRING);

  # Instantiate AddInstructorContr class
  include_once '../database/database.classes.php';
  include_once '../classes/instructor.classes.php';
  include_once '../controller/instructor.contr.php';
  $editInstructor = new EditInstructorContr($id, $name, $address, $gender, $status, $email, $empstatus);

  # Running error handlers and add instructor function
  $editInstructor->editInstructor();

  # Going to Instructor Page
  header('Location: ../view/instructor.php?success=edited');
}

if (isset($_GET['delete'])) {
  # Grabbing data
  $id = filter_var(trim($_GET['id']), FILTER_SANITIZE_NUMBER_INT);

  # Instantiate AddInstructorContr class
  include_once '../database/database.classes.php';
  include_once '../classes/instructor.classes.php';
  include_once '../controller/instructor.contr.php';
  $deleteInstructor = new DeleteInstructorContr($id);

  # Running error handlers and add instructor function
  $deleteInstructor->deleteInstructor();

  # Going to Instructor Page
  header('Location: ../view/instructor.php?success=deleted');
}
?>