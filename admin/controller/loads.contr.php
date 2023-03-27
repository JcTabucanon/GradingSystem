<?php

class AssignLoadsContr extends AssignLoads
{
  private $instcode;
  private $subjcode;

  public function __construct($instcode, $subjcode)
  {
    $this->instcode = $instcode;
    $this->subjcode = $subjcode;
  }

  public function assignLoads()
  {
    if ($this->emptyInput() == false) {
      header('Location: ../view/loads.php?code=' . $this->instcode . '&error=emptyinput');
      exit;
    }

    $this->setLoads($this->instcode, $this->subjcode);
  }

  private function emptyInput()
  {
    if (empty($this->subjcode)) {
      return false;
    }
    return true;
  }
}

class DeleteLoadsContr extends DeleteLoads
{
  private $id;

  public function __construct($id)
  {
    $this->id = $id;
  }

  public function deleteLoads()
  {
    $this->setLoads($this->id);
  }
}
?>