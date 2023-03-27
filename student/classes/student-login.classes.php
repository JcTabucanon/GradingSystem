<?php

class StudentLogin extends Dbh
{
  protected function getUser($studentid)
  {
    $stmt = $this->connect()->prepare("SELECT * FROM tblstudents WHERE student_number = ?;");

    if (!$stmt->execute([$studentid])) {
      $stmt = null;
      header("Location: ../index.php?error=stmtfailed");
      exit;
    }

    if ($stmt->rowCount() == 0) {
      $stmt = null;
      header("Location: ../index.php?error=usernotfound");
      exit;
    }

    $student = $stmt->fetchAll(PDO::FETCH_ASSOC);

    session_start();

    $_SESSION['student'] = $student;
    $_SESSION['name'] = $_SESSION["lname"] = $student[0]["student_lname"];
    $_SESSION['name'] .= ', ' . $_SESSION["fname"] = $student[0]["student_fname"];
    $_SESSION['name'] .= ' ' . $_SESSION["mname"] = $student[0]["student_mname"];
    $_SESSION["studentid"] = $student[0]["student_number"];

    $stmt = null;
  }
}
