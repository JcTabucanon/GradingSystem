<?php

class EditClass extends Dbh
{
  protected function setClass($id, $day, $time, $room, $section)
  {
    $stmt = $this->connect()->prepare('UPDATE tblclass SET class_day = ?, class_time = ? , class_room = ? , class_section = ? WHERE class_id = ?;');

    if (!$stmt->execute([$day, $time, $room, $section, $id])) {
      $stmt = null;
      header("Location: ../view/class.php?error=stmtfailed");
      exit;
    }

    $stmt = null;
  }
}
?>