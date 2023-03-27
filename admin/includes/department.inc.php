<?php

if (isset($_POST['add'])) {
  # Grabbing data
  $code = filter_var(trim($_POST['code']), FILTER_SANITIZE_NUMBER_INT);
  $deptname = filter_var(trim($_POST['deptname']), FILTER_SANITIZE_STRING);
  $desc = filter_var(trim($_POST['desc']), FILTER_SANITIZE_STRING);

  # Instantiate AddDeptContr class
  include_once '../database/database.classes.php';
  include_once '../classes/department.classes.php';
  include_once '../controller/department.contr.php';
  $addDept = new AddDeptContr($code, $deptname, $desc);

  # Running error handlers and add dept function
  $addDept->addDept();

  # Going to Depts Page
  header('Location: ../view/department.php?success=added');
}

if (isset($_POST['edit'])) {
  # Grabbing data
  $id = filter_var(trim($_POST['id']), FILTER_SANITIZE_NUMBER_INT);
  $deptname = filter_var(trim($_POST['deptname']), FILTER_SANITIZE_STRING);
  $desc = filter_var(trim($_POST['desc']), FILTER_SANITIZE_STRING);

  # Instantiate AddDeptContr class
  include_once '../database/database.classes.php';
  include_once '../classes/department.classes.php';
  include_once '../controller/department.contr.php';
  $editDept = new EditDeptContr($id, $deptname, $desc);

  # Running error handlers and add dept function
  $editDept->editDept();

  # Going to Depts Page
  header('Location: ../view/department.php?success=edited');
}

if (isset($_GET['delete'])) {
  # Grabbing data
  $id = filter_var(trim($_GET['id']), FILTER_SANITIZE_NUMBER_INT);

  # Instantiate AddDeptContr class
  include_once '../database/database.classes.php';
  include_once '../classes/department.classes.php';
  include_once '../controller/department.contr.php';
  $deleteDept = new DeleteDeptContr($id);

  # Running error handlers and add dept function
  $deleteDept->deleteDept();

  # Going to Depts Page
  header('Location: ../view/department.php?success=deleted');
}
?>