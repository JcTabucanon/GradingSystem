<?php

if (isset($_POST['edit'])) {
  # Grabbing data
  $id = filter_var(trim($_POST['id']), FILTER_SANITIZE_NUMBER_INT);
  $code = filter_var(trim($_POST['code']), FILTER_SANITIZE_NUMBER_INT);
  $subjcode = filter_var(trim($_POST['subjcode']), FILTER_SANITIZE_NUMBER_INT);
  $first = filter_var(trim($_POST['first']), FILTER_SANITIZE_NUMBER_INT);
  $second = filter_var(trim($_POST['second']), FILTER_SANITIZE_NUMBER_INT);
  $third = filter_var(trim($_POST['third']), FILTER_SANITIZE_NUMBER_INT);
  $fourth = filter_var(trim($_POST['fourth']), FILTER_SANITIZE_NUMBER_INT);
  $avg = $_POST['avg'];
  $remarks = filter_var(trim($_POST['remarks']), FILTER_SANITIZE_STRING);


  # Instantiate EditStudentGradesContr class
  include_once '../database/database.classes.php';
  include_once '../classes/student-grading.classes.php';
  include_once '../controller/student-grading.contr.php';
  $editStudentGrades = new EditStudentGradesContr($id, $code, $subjcode, $first, $second, $third, $fourth, $avg, $remarks);

  # Running error handlers and edit student grade function
  $editStudentGrades->editStudentGrades();

  # Going to List of Students Page
  header('Location: ../view/student-grading.php?code=' . $code . '&id=' . $subjcode . '&success=edited');
}
?>