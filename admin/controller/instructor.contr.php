<?php

class AddInstructorContr extends AddInstructor
{
  private $code;
  private $name;
  private $pwd;
  private $address;
  private $gender;
  private $status;
  private $email;
  private $empstatus;

  public function __construct($code, $name, $address, $gender, $status, $email, $empstatus)
  {
    $this->code = $code;
    $this->address = $address;
    $this->gender = $gender;
    $this->status = $status;
    $this->email = $email;
    $this->empstatus = $empstatus;
    $this->pwd = $pwd;
    $this->type = $type;
  }

  public function addInstructor()
  {
    if ($this->emptyInput() == false) {
      header('Location: ../view/instructor.php?error=emptyinput');
      exit;
    }

    if ($this->checkCode($this->code) == false) {
      header('Location: ../view/instructor.php?error=alreadyexists');
      exit;
    }

    if ($this->invalidEmail() == false) {
      header('Location: ../view/instructor.php?error=invalidemail');
      exit;
    }

    $this->setInstructor($this->code,$this->password, $this->name, $this->address, $this->gender, $this->status, $this->email, $this->empstatus);
  }

  private function emptyInput()
  {
    if (empty($this->code) || empty($this->password) || empty($this->name) || empty($this->address) || empty($this->gender) || empty($this->status) || empty($this->email) || empty($this->empstatus)) {
      return false;
    }
    return true;
  }

  private function invalidEmail()
  {
    if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
      return false;
    }
    return true;
  }
}

class EditInstructorContr extends EditInstructor
{
  private $id;
  private $pwd;
  private $name;
  private $address;
  private $gender;
  private $status;
  private $email;
  private $empstatus;

  public function __construct($id, $name, $address, $gender, $status, $email, $empstatus)
  {
    $this->id = $id;
    $this->name = $name;
    $this->address = $address;
    $this->gender = $gender;
    $this->status = $status;
    $this->pwd = $pwd;
    $this->email = $email;
    $this->empstatus = $empstatus;
  }

  public function editInstructor()
  {
    if ($this->emptyInput() == false) {
      header('Location: ../view/instructor.php?error=emptyinput');
      exit;
    }

    if ($this->invalidEmail() == false) {
      header('Location: ../view/instructor.php?error=invalidemail');
      exit;
    }

    $this->setInstructor($this->id, $this->name, $this->address, $this->gender, $this->status, $this->email, $this->empstatus);
  }

  private function emptyInput()
  {
    if (empty($this->code) ||empty($this->name) || empty($this->pwd) ||empty($this->address) || empty($this->gender) || empty($this->status) || empty($this->email) || empty($this->empstatus)) {
      return false;
    }
    return true;
  }

  private function invalidEmail()
  {
    if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
      return false;
    }
    return true;
  }
}

class DeleteInstructorContr extends DeleteInstructor
{
  private $id;

  public function __construct($id)
  {
    $this->id = $id;
  }

  public function deleteInstructor()
  {
    $this->setInstructor($this->id);
  }
}
?>