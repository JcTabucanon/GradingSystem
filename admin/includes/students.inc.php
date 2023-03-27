<?php

if (isset($_POST['add'])) {
  # Grabbing data
  $studentnumber = filter_var(trim($_POST['studentnumber']), FILTER_SANITIZE_NUMBER_INT);
  $fname = filter_var(trim($_POST['firstname']), FILTER_SANITIZE_STRING);
  $mname = filter_var(trim($_POST['middlename']), FILTER_SANITIZE_STRING);
  $lname = filter_var(trim($_POST['lastname']), FILTER_SANITIZE_STRING);
  $gender = filter_var(trim($_POST['gender']), FILTER_SANITIZE_STRING);
  $bday = filter_var(trim($_POST['bday']), FILTER_SANITIZE_STRING);
  $age = filter_var(trim($_POST['age']), FILTER_SANITIZE_NUMBER_INT);
  $status = filter_var(trim($_POST['status']), FILTER_SANITIZE_STRING);
  $nationality = filter_var(trim($_POST['nationality']), FILTER_SANITIZE_STRING);
  $religion = filter_var(trim($_POST['religion']), FILTER_SANITIZE_STRING);
  $contact = filter_var(trim($_POST['contact']), FILTER_SANITIZE_NUMBER_INT);
  $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
  $address1 = filter_var(trim($_POST['address1']), FILTER_SANITIZE_STRING);
  $address2 = filter_var(trim($_POST['address2']), FILTER_SANITIZE_STRING);

  # Instantiate AddStudentsContr class
  include_once '../database/database.classes.php';
  include_once '../classes/students.classes.php';
  include_once '../controller/students.contr.php';
  $addStudents = new AddStudentsContr($studentnumber, $fname, $mname, $lname, $gender, $bday, $age, $status, $nationality, $religion, $contact, $email, $address1, $address2);

  # Running error handlers and add student function
  $addStudents->addStudents();

  # Going to Students Page
  header('Location: ../view/students.php?success=added');
}

if (isset($_POST['edit'])) {
  # Grabbing data
  $id = filter_var(trim($_POST['id']), FILTER_SANITIZE_NUMBER_INT);
  $fname = filter_var(trim($_POST['firstname']), FILTER_SANITIZE_STRING);
  $mname = filter_var(trim($_POST['middlename']), FILTER_SANITIZE_STRING);
  $lname = filter_var(trim($_POST['lastname']), FILTER_SANITIZE_STRING);
  $gender = filter_var(trim($_POST['gender']), FILTER_SANITIZE_STRING);
  $bday = filter_var(trim($_POST['bday']), FILTER_SANITIZE_STRING);
  $age = filter_var(trim($_POST['age']), FILTER_SANITIZE_NUMBER_INT);
  $status = filter_var(trim($_POST['status']), FILTER_SANITIZE_STRING);
  $nationality = filter_var(trim($_POST['nationality']), FILTER_SANITIZE_STRING);
  $religion = filter_var(trim($_POST['religion']), FILTER_SANITIZE_STRING);
  $contact = filter_var(trim($_POST['contact']), FILTER_SANITIZE_NUMBER_INT);
  $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
  $address1 = filter_var(trim($_POST['address1']), FILTER_SANITIZE_STRING);
  $address2 = filter_var(trim($_POST['address2']), FILTER_SANITIZE_STRING);

  # Instantiate AddStudentsContr class
  include_once '../database/database.classes.php';
  include_once '../classes/students.classes.php';
  include_once '../controller/students.contr.php';
  $editStudents = new EditStudentsContr($id, $fname, $mname, $lname, $gender, $bday, $age, $status, $nationality, $religion, $contact, $email, $address1, $address2);

  # Running error handlers and add student function
  $editStudents->editStudents();

  # Going to Students Page
  header('Location: ../view/students.php?success=edited');
}

if (isset($_GET['delete'])) {
  # Grabbing data
  $id = filter_var(trim($_GET['id']), FILTER_SANITIZE_NUMBER_INT);
  $studentnumber = filter_var(trim($_GET['studentnumber']), FILTER_SANITIZE_NUMBER_INT);

  # Instantiate AddStudentsContr class
  include_once '../database/database.classes.php';
  include_once '../classes/students.classes.php';
  include_once '../controller/students.contr.php';
  $deleteStudents = new DeleteStudentsContr($id, $studentnumber);

  # Running error handlers and add student function
  $deleteStudents->deleteStudents();

  # Going to Students Page
  header('Location: ../view/students.php?success=deleted');
}
?>