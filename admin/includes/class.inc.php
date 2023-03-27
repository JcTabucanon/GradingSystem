<?php

if (isset($_POST['edit'])) {
  # Grabbing data
  $id = filter_var(trim($_POST['id']), FILTER_SANITIZE_NUMBER_INT);
  $day = filter_var(trim($_POST['day']), FILTER_SANITIZE_STRING);
  $time = filter_var(trim($_POST['time']), FILTER_SANITIZE_STRING);
  $room = filter_var(trim($_POST['room']), FILTER_SANITIZE_STRING);
  $section = filter_var(trim($_POST['section']), FILTER_SANITIZE_STRING);

  # Instantiate AddClassContr class
  include_once '../database/database.classes.php';
  include_once '../classes/class.classes.php';
  include_once '../controller/class.contr.php';
  $editClass = new EditClassContr($id, $day, $time, $room, $section);

  # Running error handlers and add class function
  $editClass->editClass();

  # Going to Classs Page
  header('Location: ../view/class.php?success=edited');
}
?>
