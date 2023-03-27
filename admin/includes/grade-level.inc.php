<?php

if (isset($_POST['add'])) {
  # Grabbing data
  $code = filter_var(trim($_POST['code']), FILTER_SANITIZE_NUMBER_INT);
  $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
  $desc = filter_var(trim($_POST['desc']), FILTER_SANITIZE_STRING);

  # Instantiate AddGradeLevelContr class
  include_once '../database/database.classes.php';
  include_once '../classes/grade-level.classes.php';
  include_once '../controller/grade-level.contr.php';
  $addGradeLevel = new AddGradeLevelContr($code, $name, $desc);

  # Running error handlers and add grade level function
  $addGradeLevel->addGradeLevel();

  # Going to GradeLevels Page
  header('Location: ../view/grade-level.php?success=added');
}

if (isset($_POST['edit'])) {
  # Grabbing data
  $id = filter_var(trim($_POST['id']), FILTER_SANITIZE_NUMBER_INT);
  $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
  $desc = filter_var(trim($_POST['desc']), FILTER_SANITIZE_STRING);

  # Instantiate AddGradeLevelContr class
  include_once '../database/database.classes.php';
  include_once '../classes/grade-level.classes.php';
  include_once '../controller/grade-level.contr.php';
  $editGradeLevel = new EditGradeLevelContr($id, $name, $desc);

  # Running error handlers and add grade level function
  $editGradeLevel->editGradeLevel();

  # Going to GradeLevels Page
  header('Location: ../view/grade-level.php?success=edited');
}

if (isset($_GET['delete'])) {
  # Grabbing data
  $id = filter_var(trim($_GET['id']), FILTER_SANITIZE_NUMBER_INT);

  # Instantiate AddGradeLevelContr class
  include_once '../database/database.classes.php';
  include_once '../classes/grade-level.classes.php';
  include_once '../controller/grade-level.contr.php';
  $deleteGradeLevel = new DeleteGradeLevelContr($id);

  # Running error handlers and add grade level function
  $deleteGradeLevel->deleteGradeLevel();

  # Going to GradeLevels Page
  header('Location: ../view/grade-level.php?success=deleted');
}
?>