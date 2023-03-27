<?php


if (isset($_POST['assign'])) {
  # Grabbing data
  $count = count($_POST['class']);
  $instcode = filter_var(trim($_POST['code']), FILTER_SANITIZE_NUMBER_INT);
  for ($i = 0; $i < $count; $i++) {
    $subjcode[] = filter_var(trim($_POST['class'][$i]), FILTER_SANITIZE_NUMBER_INT);
  }

  # Instantiate AssignLoadsContr class
  include_once '../database/database.classes.php';
  include_once '../classes/loads.classes.php';
  include_once '../controller/loads.contr.php';
  for ($i = 0; $i < $count; $i++) {
    $assignLoads = new AssignLoadsContr($instcode, $subjcode[$i]);

    # Running error handlers and assign subject function
    $assignLoads->assignLoads();
  }

  # Going to Loads Page
  header('Location: ../view/loads.php?code=' . $instcode . '&success=assigned');
}

if (isset($_GET['delete'])) {
  # Grabbing data
  $id = filter_var(trim($_GET['id']), FILTER_SANITIZE_NUMBER_INT);
  $instcode = filter_var(trim($_GET['code']), FILTER_SANITIZE_NUMBER_INT);

  # Instantiate AssignLoadsContr class
  include_once '../database/database.classes.php';
  include_once '../classes/loads.classes.php';
  include_once '../controller/loads.contr.php';
  $deleteLoads = new DeleteLoadsContr($id);

  # Running error handlers and assign subject function
  $deleteLoads->deleteLoads();

  # Going to Loads Page
  header('Location: ../view/loads.php?code=' . $instcode . '&success=unassigned');
}
?>