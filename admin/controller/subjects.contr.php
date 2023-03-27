<?php

class AddSubjectsContr extends AddSubjects
{
  private $code;
  private $name;
  private $desc;
  private $level;
  private $unit;
  private $ay;
  private $sem;

  public function __construct($code, $name, $desc, $level, $unit, $ay, $sem)
  {
    $this->code = $code;
    $this->name = $name;
    $this->desc = $desc;
    $this->level = $level;
    $this->unit = $unit;
    $this->ay = $ay;
    $this->sem = $sem;
  }

  public function addSubjects()
  {
    if ($this->emptyInput() == false) {
      header('Location: ../view/course.php?error=emptyinput');
      exit;
    }

    if ($this->checkCode($this->code) == false) {
      header('Location: ../view/course.php?error=alreadyexists');
      exit;
    }

    $this->setSubjects($this->code, $this->name, $this->desc, $this->level, $this->unit, $this->ay, $this->sem);
  }

  private function emptyInput()
  {
    if (empty($this->code) || empty($this->name) || empty($this->desc) || empty($this->level) || empty($this->unit) || empty($this->ay) || empty($this->sem)) {
      return false;
    }
    return true;
  }
}

class EditSubjectsContr extends EditSubjects
{
  private $id;
  private $name;
  private $desc;
  private $level;
  private $unit;
  private $ay;
  private $sem;

  public function __construct($id, $name, $desc, $level, $unit, $ay, $sem)
  {
    $this->id = $id;
    $this->name = $name;
    $this->desc = $desc;
    $this->level = $level;
    $this->unit = $unit;
    $this->ay = $ay;
    $this->sem = $sem;
  }

  public function editSubjects()
  {
    if ($this->emptyInput() == false) {
      header('Location: ../view/course.php?error=emptyinput');
      exit;
    }

    $this->setSubjects($this->id, $this->name, $this->desc, $this->level, $this->unit, $this->ay, $this->sem);
  }

  private function emptyInput()
  {
    if (empty($this->name) || empty($this->desc) || empty($this->level) || empty($this->unit) || empty($this->ay) || empty($this->sem)) {
      return false;
    }
    return true;
  }
}

class DeleteSubjectsContr extends DeleteSubjects
{
  private $id;
  private $code;

  public function __construct($id, $code)
  {
    $this->id = $id;
    $this->code = $code;
  }

  public function deleteSubjects()
  {
    $this->setSubjects($this->id, $this->code);
  }
}
?>