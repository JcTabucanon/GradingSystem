<?php

class InstructorLogin extends Dbh
{
  protected function getUser($instid)
  {
    $stmt = $this->connect()->prepare("SELECT * FROM tblinstructor WHERE inst_code = ?;");

    if (!$stmt->execute([$instid])) {
      $stmt = null;
      header("Location: ../index.php?error=stmtfailed");
      exit;
    }

    if ($stmt->rowCount() == 0) {
      $stmt = null;
      header("Location: ../index.php?error=usernotfound");
      exit;
    }

    $instructor = $stmt->fetchAll(PDO::FETCH_ASSOC);

    session_start();

    $_SESSION['instructor'] = $instructor;
    $_SESSION['name'] = $_SESSION["name"] = $instructor[0]["inst_name"];
    $_SESSION["instid"] = $instructor[0]["inst_code"];

    $stmt = null;
  }
}
