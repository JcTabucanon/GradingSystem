<?php

class AddRecords extends Dbh
{
  protected function setRecords($studentnumber, $status, $level, $year, $date)
  {
    $stmt = $this->connect()->prepare('INSERT INTO tblschoolyear (sy_ay, sy_level, student_number, sy_category, sy_enrolldate, sy_status) VALUES(?, ?, ?, ?, ?, ?);');

    if (!$stmt->execute([$year, $level, $studentnumber, 'ENROLLED', $date, $status])) {
      $stmt = null;
      header('Location: ../view/records.php?studentnumber=' . $studentnumber . '&error=stmtfailed');
      exit;
    }

    $stmt = null;
  }
}

class EditRecords extends Dbh
{
  protected function setRecords($id, $studentnumber, $status, $level, $year, $date)
  {
    $stmt = $this->connect()->prepare('UPDATE tblschoolyear SET sy_ay = ?, sy_level = ?, sy_enrolldate = ?, sy_status = ? WHERE sy_id = ?;');

    if (!$stmt->execute([$year, $level, $date, $status, $id])) {
      $stmt = null;
      header('Location: ../view/records.php?studentnumber=' . $studentnumber . '&error=stmtfailed');
      exit;
    }

    $stmt = null;
  }
}

class DeleteRecords extends Dbh
{
  protected function setRecords($id, $studentnumber)
  {
    $stmt = $this->connect()->prepare('DELETE FROM tblschoolyear WHERE sy_id = ?; DELETE FROM tblgrades WHERE student_number = ? AND sy_id = ?;');

    if (!$stmt->execute([$id, $studentnumber, $id])) {
      $stmt = null;
      header('Location: ../view/records.php?studentnumber=' . $studentnumber . '&error=stmtfailed');
      exit;
    }

    $stmt = null;
  }
}
?>