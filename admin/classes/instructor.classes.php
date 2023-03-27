<?php


spl_autoload_register(function ($class_name) {
  include $class_name . '.php';
});
class AddInstructor extends Dbh
{
  protected function setInstructor($code, $name, $address, $gender, $status, $email, $empstatus)
  {
    $stmt = $this->connect()->prepare('INSERT INTO tblinstructor (inst_code,inst_password inst_name, inst_address, inst_gender, inst_status, inst_email, inst_empstatus) VALUES(?, ?, ?, ?, ?, ?, ?);');

    if (!$stmt->execute([$code, $name, $address, $gender, $status, $email, $empstatus])) {
      $stmt = null;
      header("Location: ../view/instructor.php?error=stmtfailed");
      exit;
    }

    $stmt = null;
  }

  protected function checkCode($code)
  {
    $stmt = $this->connect()->prepare('SELECT * FROM tblinstructor WHERE inst_code = ?;');

    if (!$stmt->execute([$code])) {
      $stmt = null;
      header('Location: ../view/instructor.php?error=stmtfailed');
      exit;
    }

    if ($stmt->rowCount() > 0) {
      return false;
    }

    return true;
  }
}

class EditInstructor extends Dbh
{
  protected function setInstructor($id, $name, $address, $gender, $status, $email, $empstatus)
  {
    $stmt = $this->connect()->prepare('UPDATE tblinstructor SET inst_name = ?, inst_address = ?, inst_gender = ?, inst_status = ?, inst_email = ?, inst_empstatus = ? WHERE inst_id = ?; UPDATE tblclass c INNER JOIN tblinstructor i ON c.inst_code = i.inst_code SET c.class_inst = i.inst_name;');

    if (!$stmt->execute([$name, $address, $gender, $status, $email, $empstatus, $id])) {
      $stmt = null;
      header("Location: ../view/instructor.php?error=stmtfailed");
      exit;
    }

    $stmt = null;
  }
}

class DeleteInstructor extends Dbh
{
  protected function setInstructor($id)
  {
    $stmt = $this->connect()->prepare('DELETE FROM tblinstructor WHERE inst_id = ?; SET @num := 0; UPDATE tblinstructor SET inst_id = @num := (@num+1); ALTER TABLE tblinstructor AUTO_INCREMENT = 1;');

    if (!$stmt->execute([$id])) {
      $stmt = null;
      header("Location: ../view/instructor.php?error=stmtfailed");
      exit;
    }

    $stmt = null;
  }
}
?>