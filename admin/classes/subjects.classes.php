<?php

class AddSubjects extends Dbh
{
  protected function setSubjects($code, $name, $desc, $level, $unit, $ay, $sem)
  {
    $stmt = $this->connect()->prepare('INSERT INTO tblsubjects (subj_code, subj_name, subj_desc, subj_level, subj_unit, subj_ay, subj_sem) VALUES(?, ?, ?, ?, ?, ?, ?);');

    if (!$stmt->execute([$code, $name, $desc, $level, $unit, $ay, $sem])) {
      $stmt = null;
      header("Location: ../view/course.php?error=stmtfailed");
      exit;
    }

    $stmt = null;
  }

  protected function checkCode($code)
  {
    $stmt = $this->connect()->prepare('SELECT * FROM tblsubjects WHERE subj_code = ?;');

    if (!$stmt->execute([$code])) {
      $stmt = null;
      header('Location: ../view/course.php?error=stmtfailed');
      exit;
    }

    if ($stmt->rowCount() > 0) {
      return false;
    }

    return true;
  }
}

class EditSubjects extends Dbh
{
  protected function setSubjects($id, $name, $desc, $level, $unit, $ay, $sem)
  {
    $stmt = $this->connect()->prepare('UPDATE tblsubjects SET subj_name = ?, subj_desc = ?, subj_level = ?, subj_unit = ?, subj_ay = ?, subj_sem = ? WHERE subj_id = ?; UPDATE tblclass c INNER JOIN tblsubjects s ON c.class_code = s.subj_code SET c.class_name = s.subj_name, c.class_desc = s.subj_desc, c.class_level = s.subj_level, c.class_ay = s.subj_ay;');

    if (!$stmt->execute([$name, $desc, $level, $unit, $ay, $sem, $id])) {
      $stmt = null;
      header("Location: ../view/course.php?error=stmtfailed");
      exit;
    }

    $stmt = null;
  }
}

class DeleteSubjects extends Dbh
{
  protected function setSubjects($id, $code)
  {
    // $stmt = $this->connect()->prepare('DELETE FROM tblsubjects WHERE subj_id = ?; SET @num := 0; UPDATE tblsubjects SET subj_id = @num := (@num+1); ALTER TABLE tblsubjects AUTO_INCREMENT = 1;');

    $stmt = $this->connect()->prepare('DELETE FROM tblclass WHERE class_code = ?; DELETE FROM tblsubjects WHERE subj_id = ?; SET @num := 0; UPDATE tblsubjects SET subj_id = @num := (@num+1); ALTER TABLE tblsubjects AUTO_INCREMENT = 1;');

    if (!$stmt->execute([$code, $id])) {
      $stmt = null;
      header("Location: ../view/course.php?error=stmtfailed");
      exit;
    }

    $stmt = null;
  }
}
?>