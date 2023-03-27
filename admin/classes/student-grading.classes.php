<?php

class EditStudentGrades extends Dbh
{
  protected function setStudentGrades($id, $code, $subjcode, $first, $second, $third, $fourth, $avg, $remarks)
  {
    $stmt = $this->connect()->prepare('UPDATE tblgrades SET grade_first = ?, grade_second = ?, grade_third = ?, grade_fourth = ?, grade_avg = ?, grade_remarks = ? WHERE grade_id = ?;');

    if (!$stmt->execute([$first, $second, $third, $fourth, $avg, $remarks, $id])) {
      $stmt = null;
      header('Location: ../view/student-grading.php?code=' . $code . '&id=' . $subjcode . '&error=stmtfailed');
      exit;
    }

    $stmt = null;
  }
}
?>