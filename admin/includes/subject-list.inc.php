<?php

if (isset($_POST['assign'])) {
  # Grabbing data
  $count = count($_POST['class']);
  $syid = filter_var(trim($_POST['syid']), FILTER_SANITIZE_NUMBER_INT);
  $studentnumber = filter_var(trim($_POST['studentnumber']), FILTER_SANITIZE_NUMBER_INT);
  $course = filter_var(trim($_POST['course']), FILTER_SANITIZE_STRING);
  for ($i = 0; $i < $count; $i++) {
    $subjcode[] = filter_var(trim($_POST['class'][$i]), FILTER_SANITIZE_NUMBER_INT);
  }

  # Instantiate AssignSubjectListContr class
  include_once '../database/database.classes.php';
  include_once '../classes/subject-list.classes.php';
  include_once '../controller/subject-list.contr.php';
  for ($i = 0; $i < $count; $i++) {
    $assignSubjectList = new AssignSubjectListContr($studentnumber, $syid, $subjcode[$i], $course);

    # Running error handlers and assign subject function
    $assignSubjectList->assignSubjectList();
  }

  # Going to SubjectList Page
  header('Location: ../view/course-list.php?id=' . $syid . '&studentnumber=' . $studentnumber . '&course=' . $course . '&success=assigned');
}

if (isset($_GET['delete'])) {
  # Grabbing data
  $id = filter_var(trim($_GET['id']), FILTER_SANITIZE_NUMBER_INT);
  $syid = filter_var(trim($_GET['syid']), FILTER_SANITIZE_NUMBER_INT);
  $studentnumber = filter_var(trim($_GET['studentnumber']), FILTER_SANITIZE_NUMBER_INT);
  $course = filter_var(trim($_GET['course']), FILTER_SANITIZE_STRING);

  # Instantiate AssignSubjectListContr class
  include_once '../database/database.classes.php';
  include_once '../classes/subject-list.classes.php';
  include_once '../controller/subject-list.contr.php';
  $deleteSubjectList = new UnassignSubjectListContr($id, $syid, $studentnumber, $course);

  # Running error handlers and assign subject function
  $deleteSubjectList->deleteSubjectList();

  # Going to SubjectList Page
  header('Location: ../view/course-list.php?id=' . $syid . '&studentnumber=' . $studentnumber . '&course=' . $course . '&success=unassigned');
}
?>