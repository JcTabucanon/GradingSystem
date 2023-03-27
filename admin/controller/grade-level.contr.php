<?php

class AddGradeLevelContr extends AddGradeLevel
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

  public function addGradeLevel()
  {
    if ($this->emptyInput() == false) {
      header('Location: ../view/grade-level.php?error=emptyinput');
      exit;
    }

    if ($this->checkCode($this->code) == false) {
      header('Location: ../view/grade-level.php?error=alreadyexists');
      exit;
    }

    $this->setGradeLevel($this->code, $this->name, $this->desc);
  }

  private function emptyInput()
  {
    if (empty($this->code) || empty($this->name) || empty($this->desc)) {
      return false;
    }
    return true;
  }
}

class EditGradeLevelContr extends EditGradeLevel
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

  public function editGradeLevel()
  {
    if ($this->emptyInput() == false) {
      header('Location: ../view/grade-level.php?error=emptyinput');
      exit;
    }

    $this->setGradeLevel($this->id, $this->name, $this->desc);
  }

  private function emptyInput()
  {
    if (empty($this->name) || empty($this->desc)) {
      return false;
    }
    return true;
  }
}

class DeleteGradeLevelContr extends DeleteGradeLevel
{
  private $id;

  public function __construct($id)
  {
    $this->id = $id;
  }

  public function deleteGradeLevel()
  {
    $this->setGradeLevel($this->id);
  }
}
?>