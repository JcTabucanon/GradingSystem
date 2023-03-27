<?php

if (isset($_POST['add'])) {
  # Grabbing data
  $studentnumber = filter_var(trim($_POST['studentnumber']), FILTER_SANITIZE_NUMBER_INT);
  $status = filter_var(trim($_POST['status']), FILTER_SANITIZE_STRING);
  $level = filter_var(trim($_POST['level']), FILTER_SANITIZE_STRING);
  $year = filter_var(trim($_POST['year']), FILTER_SANITIZE_STRING);
  $date = filter_var(trim($_POST['date']), FILTER_SANITIZE_STRING);

  # Instantiate AddRecordsContr class
  include_once '../database/database.classes.php';
  include_once '../classes/records.classes.php';
  include_once '../controller/records.contr.php';
  $addRecords = new AddRecordsContr($studentnumber, $status, $level, $year, $date);

  # Running error handlers and add record function
  $addRecords->addRecords();

  # Going to Recordss Page
  header('Location: ../view/records.php?studentnumber=' . $studentnumber . '&success=added');
}

if (isset($_POST['edit'])) {
  # Grabbing data
  $id = filter_var(trim($_POST['id']), FILTER_SANITIZE_NUMBER_INT);
  $studentnumber = filter_var(trim($_POST['studentnumber']), FILTER_SANITIZE_NUMBER_INT);
  $status = filter_var(trim($_POST['status']), FILTER_SANITIZE_STRING);
  $level = filter_var(trim($_POST['level']), FILTER_SANITIZE_STRING);
  $year = filter_var(trim($_POST['year']), FILTER_SANITIZE_STRING);
  $date = filter_var(trim($_POST['date']), FILTER_SANITIZE_STRING);

  # Instantiate AddRecordsContr class
  include_once '../database/database.classes.php';
  include_once '../classes/records.classes.php';
  include_once '../controller/records.contr.php';
  $editRecords = new EditRecordsContr($id, $studentnumber, $status, $level, $year, $date);

  # Running error handlers and add record function
  $editRecords->editRecords();

  # Going to Recordss Page
  header('Location: ../view/records.php?studentnumber=' . $studentnumber . '&success=edited');
}

if (isset($_POST['delete'])) {
  # Grabbing data
  $id = filter_var(trim($_POST['id']), FILTER_SANITIZE_NUMBER_INT);
  $studentnumber = filter_var(trim($_POST['studentnumber']), FILTER_SANITIZE_NUMBER_INT);

  # Instantiate AddRecordsContr class
  include_once '../database/database.classes.php';
  include_once '../classes/records.classes.php';
  include_once '../controller/records.contr.php';
  $deleteRecords = new DeleteRecordsContr($id, $studentnumber);

  # Running error handlers and add record function
  $deleteRecords->deleteRecords();

  # Going to Recordss Page
  header('Location: ../view/records.php?studentnumber=' . $studentnumber . '&success=deleted');
}
?>