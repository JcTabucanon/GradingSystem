<?php

class AddRoomsContr extends AddRooms
{
  private $code;
  private $name;
  private $desc;

  public function __construct($code, $name, $desc)
  {
    $this->code = $code;
    $this->name = $name;
    $this->desc = $desc;
  }

  public function addRooms()
  {
    if ($this->emptyInput() == false) {
      header('Location: ../view/rooms.php?error=emptyinput');
      exit;
    }

    if ($this->checkCode($this->code) == false) {
      header('Location: ../view/rooms.php?error=alreadyexists');
      exit;
    }

    $this->setRooms($this->code, $this->name, $this->desc);
  }

  private function emptyInput()
  {
    if (empty($this->code) || empty($this->name) || empty($this->desc)) {
      return false;
    }
    return true;
  }
}

class EditRoomsContr extends EditRooms
{
  private $id;
  private $name;
  private $desc;

  public function __construct($id, $name, $desc)
  {
    $this->id = $id;
    $this->name = $name;
    $this->desc = $desc;
  }

  public function editRooms()
  {
    if ($this->emptyInput() == false) {
      header('Location: ../view/rooms.php?error=emptyinput');
      exit;
    }

    $this->setRooms($this->id, $this->name, $this->desc);
  }

  private function emptyInput()
  {
    if (empty($this->name) || empty($this->desc)) {
      return false;
    }
    return true;
  }
}

class DeleteRoomsContr extends DeleteRooms
{
  private $id;

  public function __construct($id)
  {
    $this->id = $id;
  }

  public function deleteRooms()
  {
    $this->setRooms($this->id);
  }
}
?>
