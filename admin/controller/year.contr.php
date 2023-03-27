<?php

class AddYearContr extends AddYear
{
  private $name;

  public function __construct($name)
  {
    $this->name = $name;
  }

  public function addYear()
  {
    if ($this->emptyInput() == false) {
      header('Location: ../view/year.php?error=emptyinput');
      exit;
    }

    $this->setYear($this->name);
  }

  private function emptyInput()
  {
    if (empty($this->name)) {
      return false;
    }
    return true;
  }
}

class EditYearContr extends EditYear
{
  private $id;
  private $name;

  public function __construct($id, $name)
  {
    $this->id = $id;
    $this->name = $name;
  }

  public function editYear()
  {
    if ($this->emptyInput() == false) {
      header('Location: ../view/year.php?error=emptyinput');
      exit;
    }

    $this->setYear($this->id, $this->name);
  }

  private function emptyInput()
  {
    if (empty($this->name)) {
      return false;
    }
    return true;
  }
}

class DeleteYearContr extends DeleteYear
{
  private $id;

  public function __construct($id)
  {
    $this->id = $id;
  }

  public function deleteYear()
  {
    $this->setYear($this->id);
  }
}
?>