<?php

class AssignSubjectList extends Dbh
{
  protected function setSubjectList($studentnumber, $syid, $subjcode, $course)
  {
    $stmt = $this->connect()->prepare('INSERT INTO tblgrades (student_number, sy_id, subj_code) VALUES(?, ?, ?);');

    if (!$stmt->execute([$studentnumber, $syid, $subjcode])) {
      $stmt = null;
      header('Location: ../view/course-list.php?id=' . $syid . '&studentnumber=' . $studentnumber . '&course=' . $course . '&error=stmtfailed');
      exit;
    }

    $stmt = null;
  }
}

class UnassignSubjectList extends Dbh
{
  protected function setSubjectList($id, $studentnumber, $syid, $subjcode, $course)
  {
    $stmt = $this->connect()->prepare('DELETE FROM tblgrades WHERE grade_id = ?;');

    if (!$stmt->execute([$id])) {
      $stmt = null;
      header('Location: ../view/course-list.php?id=' . $syid . '&studentnumber=' . $studentnumber . '&course=' . $course . '&error=stmtfailed');
      exit;
    }

    $stmt = null;
  }
}
?>