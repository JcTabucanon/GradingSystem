<?php

if (isset($_POST['add'])) {
  # Grabbing data
  $code = filter_var(trim($_POST['code']), FILTER_SANITIZE_NUMBER_INT);
  $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
  $desc = filter_var(trim($_POST['desc']), FILTER_SANITIZE_STRING);
  $level = filter_var(trim($_POST['level']), FILTER_SANITIZE_STRING);
  $unit = filter_var(trim($_POST['unit']), FILTER_SANITIZE_NUMBER_INT);
  $ay = filter_var(trim($_POST['ay']), FILTER_SANITIZE_STRING);
  $sem = filter_var(trim($_POST['sem']), FILTER_SANITIZE_STRING);

  # Instantiate AddSubjectsContr class
  include_once '../database/database.classes.php';
  include_once '../classes/subjects.classes.php';
  include_once '../controller/subjects.contr.php';
  $addSubjects = new AddSubjectsContr($code, $name, $desc, $level, $unit, $ay, $sem);

  # Running error handlers and add subject function
  $addSubjects->addSubjects();

  # Going to Subjects Page
  header('Location: ../view/course.php?success=added');
}

if (isset($_POST['edit'])) {
  # Grabbing data
  $id = filter_var(trim($_POST['id']), FILTER_SANITIZE_NUMBER_INT);
  $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
  $desc = filter_var(trim($_POST['desc']), FILTER_SANITIZE_STRING);
  $level = filter_var(trim($_POST['level']), FILTER_SANITIZE_STRING);
  $unit = filter_var(trim($_POST['unit']), FILTER_SANITIZE_NUMBER_INT);
  $ay = filter_var(trim($_POST['ay']), FILTER_SANITIZE_STRING);
  $sem = filter_var(trim($_POST['sem']), FILTER_SANITIZE_STRING);

  # Instantiate AddSubjectsContr class
  include_once '../database/database.classes.php';
  include_once '../classes/subjects.classes.php';
  include_once '../controller/subjects.contr.php';
  $editSubjects = new EditSubjectsContr($id, $name, $desc, $level, $unit, $ay, $sem);

  # Running error handlers and add subject function
  $editSubjects->editSubjects();

  # Going to Subjects Page
  header('Location: ../view/course.php?success=edited');
}

if (isset($_GET['delete'])) {
  # Grabbing data
  $id = filter_var(trim($_GET['id']), FILTER_SANITIZE_NUMBER_INT);
  $code = filter_var(trim($_GET['code']), FILTER_SANITIZE_NUMBER_INT);

  # Instantiate AddSubjectsContr class
  include_once '../database/database.classes.php';
  include_once '../classes/subjects.classes.php';
  include_once '../controller/subjects.contr.php';
  $deleteSubjects = new DeleteSubjectsContr($id, $code);

  # Running error handlers and add subject function
  $deleteSubjects->deleteSubjects();

  # Going to Subjects Page
  header('Location: ../view/course.php?success=deleted');
}
?>