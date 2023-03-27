<?php

class EditClassContr extends EditClass
{
  private $id;
  private $day;
  private $time;
  private $room;
  private $section;

  public function __construct($id, $day, $time, $room, $section)
  {
    $this->id = $id;
    $this->day = $day;
    $this->time = $time;
    $this->room = $room;
    $this->section = $section;
  }

  public function editClass()
  {
    if ($this->emptyInput() == false) {
      header('Location: ../view/class.php?error=emptyinput');
      exit;
    }

    $this->setClass($this->id, $this->day, $this->time, $this->room, $this->section);
  }

  private function emptyInput()
  {
    if (empty($this->day) || empty($this->time) || empty($this->room)) {
      return false;
    }
    return true;
  }
}
?>