<?php

class AddYear extends Dbh
{
  protected function setYear($name)
  {
    $stmt = $this->connect()->prepare('INSERT INTO tblyear (ay_name) VALUES(?);');

    if (!$stmt->execute([$name])) {
      $stmt = null;
      header("Location: ../view/year.php?error=stmtfailed");
      exit;
    }

    $stmt = null;
  }
}

class EditYear extends Dbh
{
  protected function setYear($id, $name)
  {
    $oldname = $name;
    $stmt = $this->connect()->prepare('UPDATE tblyear SET ay_name = ? WHERE ay_id = ?;');

    if (!$stmt->execute([$name, $id])) {
      $stmt = null;
      header("Location: ../view/year.php?error=stmtfailed");
      exit;
    }

    $stmt = null;
  }
}

class DeleteYear extends Dbh
{
  protected function setYear($id)
  {
    $stmt = $this->connect()->prepare('DELETE FROM tblyear WHERE ay_id = ?;');

    if (!$stmt->execute([$id])) {
      $stmt = null;
      header("Location: ../view/year.php?error=stmtfailed");
      exit;
    }

    $stmt = null;
  }
}
?>
