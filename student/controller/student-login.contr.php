<?php

class StudentLoginContr extends StudentLogin
{
  private $studentid;

  public function __construct($studentid)
  {
    $this->studentid = $studentid;
  }

  public function loginUser()
  {
    if ($this->emptyInput() == false) {
      header("location: ../index.php?error=emptyinput");
      exit;
    }

    $this->getUser($this->studentid);
  }

  private function emptyInput()
  {
    if (empty($this->studentid)) {
      return false;
    }
    return true;
  }
}
