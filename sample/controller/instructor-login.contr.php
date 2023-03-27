<?php

class InstructorLoginContr extends InstructorLogin
{
  private $inst_id;

  public function __construct($inst_id)
  {
    $this->inst_id= $inst_id;
  }

  public function loginUser()
  {
    if ($this->emptyInput() == false) {
      header("location: ../index.php?error=emptyinput");
      exit;
    }

    $this->getUser($this->inst_code);
  }

  private function emptyInput()
  {
    if (empty($this->inst_code)) {
      return false;
    }
    return true;
  }
}
