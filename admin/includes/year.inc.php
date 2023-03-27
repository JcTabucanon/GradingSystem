<?php

if (isset($_POST['add'])) {
  # Grabbing data
  $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);

  # Instantiate AddYearContr class
  include_once '../database/database.classes.php';
  include_once '../classes/year.classes.php';
  include_once '../controller/year.contr.php';
  $addYear = new AddYearContr($name);

  # Running error handlers and add year function
  $addYear->addYear();

  # Going to Years Page
  header('Location: ../view/year.php?success=added');
}

if (isset($_POST['edit'])) {
  # Grabbing data
  $id = filter_var(trim($_POST['id']), FILTER_SANITIZE_NUMBER_INT);
  $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);

  # Instantiate AddYearContr class
  include_once '../database/database.classes.php';
  include_once '../classes/year.classes.php';
  include_once '../controller/year.contr.php';
  $editYear = new EditYearContr($id, $name);

  # Running error handlers and add year function
  $editYear->editYear();

  # Going to Years Page
  header('Location: ../view/year.php?success=edited');
}

if (isset($_GET['delete'])) {
  # Grabbing data
  $id = filter_var(trim($_GET['id']), FILTER_SANITIZE_NUMBER_INT);

  # Instantiate AddYearContr class
  include_once '../database/database.classes.php';
  include_once '../classes/year.classes.php';
  include_once '../controller/year.contr.php';
  $deleteYear = new DeleteYearContr($id);

  # Running error handlers and add year function
  $deleteYear->deleteYear();

  # Going to Years Page
  header('Location: ../view/year.php?success=deleted');
}
?>