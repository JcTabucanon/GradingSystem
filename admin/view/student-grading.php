<?php
session_start();

if (!isset($_SESSION['userid']) && !isset($_SESSION['useruid'])) {
  header('Location: ../../index.php');
  exit;
}

if (!isset($_GET['id']) && !isset($_GET['code'])) {
  header('Location: loads.php');
  exit;
}

$user = $_SESSION['useruid'];
$subjcode = $_GET['id'];
$code = $_GET['code'];

include_once '../database/database.classes.php';
include_once '../page/student-grading/student-grading.classes.php';

$breadcrumb1 = 'classes';
$breadcrumblink = 'class.php';
$search = 'students (Subject Name, Instructor, Remarks)';
$table = 'student-grading';
$searchlink = 'student-grading.php?id=' . $subjcode;
$i = 0;
$currentpage = 'Instructors';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>List of Students</title>
  <link rel="stylesheet" href="../../src/css/tailwind.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script async defer src="../../src/js/student-grading-modal.js"></script>
</head>

<body>
  <?php include_once '../included/navbar.php'; ?>
  <div class="flex pt-16 overflow-hidden bg-white">
    <?php include_once '../included/sidebar.php'; ?>
    <main id="main-content" class="relative w-full h-full ml-64 overflow-y-auto bg-gray-50">
      <div class="items-center justify-between block p-4 bg-white border-b border-gray-200 sm:flex">
        <div class="w-full mb-1">
          <div class="mb-4">
            <nav class="flex mb-5" aria-label="Breadcrumb">
              <ol class="inline-flex items-center space-x-1 md:space-x-2">
                <li class="inline-flex items-center">
                  <a href="../view/dashboard.php" class="inline-flex items-center text-gray-700 hover:text-gray-900">
                    <svg class="w-5 h-5 mr-2.5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                      <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                    </svg>
                    Home
                  </a>
                </li>
                <li>
                  <div class="flex items-center">
                    <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    <a href="instructor.php" class="ml-1 text-sm font-medium text-gray-700 capitalize hover:text-gray-900 md:ml-2">Instructors</a>
                  </div>
                </li>
                <li>
                  <div class="flex items-center">
                    <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    <a href="loads.php?code=<?= $code; ?>" class="ml-1 text-sm font-medium text-gray-700 hover:text-gray-900 md:ml-2">List of Loads</a>
                  </div>
                </li>
                <li>
                  <div class="flex items-center">
                    <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="ml-1 text-sm font-medium text-gray-400 md:ml-2" aria-current="page">List of Students</span>
                  </div>
                </li>
              </ol>
            </nav>
            <h1 class="flex items-center text-xl font-semibold text-gray-900 capitalize sm:text-2xl">List of Students<?php if (!empty($result)) { ?><span class="inline-flex items-center px-3 py-1.5 ml-2 text-sm font-medium text-center text-white bg-teal-500 rounded-2xl shadow-sm"><?= $result[0]['subj_name'] ?></span><?php } ?></h1>
          </div>
          <div class="sm:flex">
            <div class="items-center hidden mb-3 sm:flex sm:divide-x sm:divide-gray-100 sm:mb-0">
              <form class="flex lg:pr-2" action="#" method="get">
                <label for="users-search" class="sr-only">Search</label>
                <div class="relative mr-2 lg:w-64 xl:w-96">
                  <input type="hidden" name="code" value="<?= $_GET['code']; ?>">
                  <input type="hidden" name="id" value="<?= $_GET['id']; ?>">
                  <input type="text" name="search" class="bg-gray-50 border border-gray-300 text-gray-900 focus:outline-none sm:text-sm rounded-lg focus:ring-gray-200 focus:ring-4 block w-full p-2.5" placeholder="Search for students (Student ID, Name, Gender, Remarks)" required>
                </div>
                <button type="submit" class="inline-flex items-center justify-center w-1/2 px-3 py-2 text-sm font-medium text-center text-gray-900 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 sm:w-auto">
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                  </svg>
                </button>
              </form>
              <div class="flex pl-0 mt-3 space-x-1 sm:pl-2 sm:mt-0">
                <a href="student-grading.php?code=<?= $code; ?>&id=<?= $subjcode; ?>" class="inline-flex items-center justify-center w-1/2 px-3 py-2 text-sm font-medium text-center text-gray-900 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 sm:w-auto">
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                  </svg>
                  <span>View all</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php include_once '../page/student-grading/display-data.inc.php'; ?>
    </main>
  </div>
  <?php if (isset($_GET['success']) && $_GET['success'] == 'edited') { ?>
    <div class="alert alert-success">
      <span class="font-bold">Success!</span> You have successfully edited a data.
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