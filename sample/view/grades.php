<?php
session_start();

if (!isset($_SESSION['student']) && !isset($_SESSION['studentid'])) {
  header('Location: ../../index.php');
  exit;
}

$studentnumber = $_SESSION['studentid'];

include_once '../database/database.classes.php';
include_once '../page/grades/grades.classes.php';

$page = 'Grades';
?>

<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student's Grades</title>
  <link rel="stylesheet" href="../../src/css/tailwind.css">
</head>

<body class="h-full">
  <?php include_once '../included/navbar.php'; ?>
  <main>
    <div class="px-8 py-6 mx-auto max-w-7xl">
      <?php include_once '../included/tabs.php'; ?>
      <?php include_once '../page/grades/display-data.inc.php'; ?>
    </div>
    <footer class="pt-8 pb-6">
      <p class="text-sm text-center text-gray-400">&#169; 2023 Program by:<b>Wendel Luche and Jessie Cuna</b>. All rights reserved.</p>
    </footer>
  </main>

</body>

</html>