<?php
session_start();

if (!isset($_SESSION['userid']) && !isset($_SESSION['useruid'])) {
  header('Location: ../../index.php');
  exit;
}

$user = $_SESSION['useruid'];
$currentpage = 'Our Team';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Our Team - Group 1</title>
  <link rel="stylesheet" href="../../src/css/tailwind.css">
</head>

<body class="bg-gray-50">
  <?php include_once '../included/navbar.php'; ?>
  <div class="flex pt-16 overflow-hidden bg-white">
    <?php include_once '../included/sidebar.php'; ?>
    <main id="main-content" class="relative w-full ml-64 overflow-hidden bg-gray-50">
      <section class="py-6">
        <div class="flex flex-col items-center justify-center p-10 mx-auto space-y-8 ">
          <h1 class="text-5xl font-bold leading-none text-center">Our Team</h1>
          <p class="max-w-2xl text-center ">The Talented Students Behind This Project</p>
          <div class="flex flex-row flex-wrap-reverse justify-center">
           
            <div class="flex flex-col justify-center m-8 text-center">
              <img alt="Display Picture of Alistaire" class="self-center w-24 h-24 mb-4 bg-center bg-cover rounded-full" src="../../src/img/Jessie.jpg">
              <p class="text-xl font-semibold leading-tight">Jessie Cuna</p>
              <p class="text-sm text-gray-500">Backend Developer</p>
            </div>
          
            <div class="flex flex-col justify-center m-8 text-center">
              <img alt="Display Picture of Diosdado" class="self-center w-24 h-24 mb-4 bg-center bg-cover rounded-full" src="../../src/img/wendel.jpg">
              <p class="text-xl font-semibold leading-tight">Wendel Luche</p>
              <p class="text-sm text-gray-500">Frontend Developer</p>
            </div>
          <!-- <div class="flex flex-col justify-center m-8 text-center">
              <img alt="Display Picture of Diosdado" class="self-center w-24 h-24 mb-4 bg-center bg-cover rounded-full" src="../../src/img/arlynda.jpg">
              <p class="text-xl font-semibold leading-tight">Arlynda Alburo</p>
              <p class="text-sm text-gray-500">QA Engineer</p>
            </div> -->
          </div>
        </div>
      </section>
      <footer class="mt-10 mb-6">
        <p class="text-sm text-center text-gray-400">&#169; 2023 Program by:<b>Wendel Luche and Jessie Cuna</b>. All rights reserved.</p>
      </footer>
    </main>
  </div>
</body>

</html>