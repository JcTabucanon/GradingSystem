<?php

class InstructorLoginContr extends InstructorLogin
{
  private $instid;

  public function __construct($instid)
  {
    $this->instid = $instid;
  }

  public function loginUser()
  {
    if ($this->emptyInput() == false) {
      header("location: ../index.php?error=emptyinput");
      exit;
    }

    $this->getUser($this->instid);
  }

  private function emptyInput()
  {
    if (empty($this->instid)) {
      return false;
    }
    return true;
  }
}
