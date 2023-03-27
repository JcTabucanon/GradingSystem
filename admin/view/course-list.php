<?php
session_start();

if (!isset($_SESSION['userid']) && !isset($_SESSION['useruid'])) {
  header('Location: ../../index.php');
  exit;
}

if (!isset($_GET['studentnumber'])) {
  header('Location: students.php');
  exit;
}

$user = $_SESSION['useruid'];

$syid = $_GET['id'];
$studentnumber = $_GET['studentnumber'];
$course = $_GET['course'];

include_once '../database/database.classes.php';
include_once '../page/course-list/course-list.classes.php';

$breadcrumb1 = 'students';
$breadcrumblink = 'students.php';
$breadcrumblink2 = 'records.php?studentnumber=' . $studentnumber;
$search = 'course (course Name, Instructor, Remarks)';
$breadcrumb2 = 'Enrollment Records';
$table = 'subject-list';
$modal = $btn = 'subject';
$searchlink = 'course-list.php?id=' . $syid . '&studentnumber=' . $studentnumber . '&course=' . $course;
$page = $breadcrumb3 = 'Enrolled Course';
$i = 0;
$currentpage = 'Students';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Enrolled course</title>
  <link rel="stylesheet" href="../../src/css/tailwind.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script async defer src="../../src/js/course-list-modal.js"></script>
</head>

<body>
  <?php include_once '../included/navbar.php'; ?>
  <div class="flex pt-16 overflow-hidden bg-white">
    <?php include_once '../included/sidebar.php'; ?>
    <div id="main-content" class="relative w-full h-full ml-64 overflow-y-auto bg-gray-50">
      <main>
        <?php
        include_once '../included/header.php';
        include_once '../page/course-list/assign-course-modal.php';
        include_once '../page/course-list/display-data.inc.php';
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