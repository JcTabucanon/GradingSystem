<?php
session_start();

if (!isset($_SESSION['student']) && !isset($_SESSION['studentid'])) {
  header('Location: ../../index.php');
  exit;
}

$studentnumber = $_SESSION['studentid'];

include_once '../database/database.classes.php';
include_once '../page/subjects/subjects.classes.php';

$page = 'Course';
?>

<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-900">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student's Course</title>
  <link rel="stylesheet" href="../../src/css/tailwind.css">
</head>

<body class="h-full">
  <?php include_once '../templates/navbar.php'; ?>
  <main>
    <div class="px-8 py-6 mx-auto max-w-7xl">
      <?php include_once '../templates/tabs.php'; ?>
      <?php include_once '../page/subjects/display-data.inc.php'; ?>
    </div>
    <footer class="pt-8 pb-6">
      <p class="text-sm text-center text-gray-400">&#169; 2023 Programm by:<b> Wendel Luche and Jessie Cuna</b>. All rights reserved.</p>
</footer> 
  </main>

</body>

</html>