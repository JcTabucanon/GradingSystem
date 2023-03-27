<?php
session_start();

if (!isset($_SESSION['userid']) && !isset($_SESSION['useruid'])) {
  header('Location: ../../index.php');
  exit;
}

if (!isset($_GET['code'])) {
  header('Location: instructor.php');
  exit;
}

$user = $_SESSION['useruid'];
$instructor = $_GET['code'];

include_once '../database/database.classes.php';
include_once '../page/loads/loads.classes.php';

$table = $search = 'loads';
$breadcrumb1 = 'instructors';
$page = $breadcrumb2 = 'List of Loads';
$breadcrumblink = 'instructor.php';
$modal = 'load';
$btn = 'subject';
$searchlink = 'loads.php?code=' . $instructor;
$search .= ' (Subject Name, Course, Room, Schedule)';
$i = 0;
$currentpage = 'Instructors';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Instructor</title>
  <link rel="stylesheet" href="../../src/css/tailwind.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script async defer src="../../src/js/loads-modal.js"></script>
</head>

<body>
  <?php include_once '../included/navbar.php'; ?>
  <div class="flex pt-16 overflow-hidden bg-white">
    <?php include_once '../included/sidebar.php'; ?>
    <div id="main-content" class="relative w-full h-full ml-64 overflow-y-auto bg-gray-50">
      <main>
        <?php
        include_once '../included/header.php';
        include_once '../page/loads/assign-load-modal.php';
        include_once '../page/loads/display-data.inc.php';
        ?>
      </main>
    </div>
  </div>
  <?php if (isset($_GET['success']) && $_GET['success'] == 'assigned') { ?>
    <div class="alert alert-success">
      <span class="font-bold">Success!</span> You have successfully assigned a new data.
    </div>
  <?php } else if (isset($_GET['success']) && $_GET['success'] == 'unassigned') { ?>
    <div class="alert alert-success">
      <span class="font-bold">Success!</span> You have successfully unassigned a data.
    </div>
  <?php } else if (isset($_GET['error']) && $_GET['error'] == 'emptyinput') { ?>
    <div class="alert alert-info">
      <span class="font-bold">Info!</span> Your submission is empty. Please try again.
    </div>
  <?php } else if (isset($_GET['error']) && $_GET['error'] == 'stmtfailed') { ?>
    <div class="alert alert-danger">
      <span class="font-bold">Danger!</span> Request error. Please try again.
    </div>
  <?php } ?>
  <script>
    $(".alert").delay(6000).fadeOut(600);
  </script>
</body>

</html>