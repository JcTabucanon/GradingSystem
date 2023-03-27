<?php

if (isset($_POST['add'])) {
  # Grabbing data
  $code = filter_var(trim($_POST['code']), FILTER_SANITIZE_NUMBER_INT);
  $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
  $desc = filter_var(trim($_POST['desc']), FILTER_SANITIZE_STRING);

  # Instantiate AddRoomsContr class
  include_once '../database/database.classes.php';
  include_once '../classes/rooms.classes.php';
  include_once '../controller/rooms.contr.php';
  $addRooms = new AddRoomsContr($code, $name, $desc);

  # Running error handlers and add room function
  $addRooms->addRooms();

  # Going to Roomss Page
  header('Location: ../view/rooms.php?success=added');
}

if (isset($_POST['edit'])) {
  # Grabbing data
  $id = filter_var(trim($_POST['id']), FILTER_SANITIZE_NUMBER_INT);
  $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
  $desc = filter_var(trim($_POST['desc']), FILTER_SANITIZE_STRING);

  # Instantiate AddRoomsContr class
  include_once '../database/database.classes.php';
  include_once '../classes/rooms.classes.php';
  include_once '../controller/rooms.contr.php';
  $editRooms = new EditRoomsContr($id, $name, $desc);

  # Running error handlers and add room function
  $editRooms->editRooms();

  # Going to Roomss Page
  header('Location: ../view/rooms.php?success=edited');
}

if (isset($_GET['delete'])) {
  # Grabbing data
  $id = filter_var(trim($_GET['id']), FILTER_SANITIZE_NUMBER_INT);

  # Instantiate AddRoomsContr class
  include_once '../database/database.classes.php';
  include_once '../classes/rooms.classes.php';
  include_once '../controller/rooms.contr.php';
  $deleteRooms = new DeleteRoomsContr($id);

  # Running error handlers and add room function
  $deleteRooms->deleteRooms();

  # Going to Roomss Page
  header('Location: ../view/rooms.php?success=deleted');
}
?>