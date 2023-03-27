<?php

class AddUserContr extends AddUser
{
  private $fname;
  private $lname;
  private $email;
  private $uid;
  private $pwd;
  private $type;

  public function __construct($fname, $lname, $email, $uid, $pwd, $type)
  {
    $this->fname = $fname;
    $this->lname = $lname;
    $this->email = $email;
    $this->uid = $uid;
    $this->pwd = $pwd;
    $this->type = $type;
  }

  public function addUser()
  {
    if ($this->emptyInput() == false) {
      header('Location: ../view/users.php?error=emptyinput');
      exit;
    }

    if ($this->invalidUid() == false) {
      header('Location: ../view/users.php?error=invalidusername');
      exit;
    }

    if ($this->invalidEmail() == false) {
      header('Location: ../view/users.php?error=invalidemail');
      exit;
    }

    if ($this->checkUser($this->uid, $this->email) == false) {
      header('Location: ../view/users.php?error=usernameoremailtaken');
      exit;
    }

    $this->setUser($this->fname, $this->lname, $this->email, $this->uid, $this->pwd, $this->type);
  }

  private function emptyInput()
  {
    if (empty($this->fname) || empty($this->lname) || empty($this->email) || empty($this->uid) || empty($this->pwd) || empty($this->type)) {
      return false;
    }
    return true;
  }

  private function invalidUid()
  {
    if (!preg_match('/^[a-zA-Z0-9]*$/', $this->uid)) {
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

class EditUserContr extends EditUser
{
  private $id;
  private $fname;
  private $lname;
  private $email;
  private $uid;
  private $pwd;
  private $type;

  public function __construct($id, $fname, $lname, $email, $uid, $pwd, $type)
  {
    $this->id = $id;
    $this->fname = $fname;
    $this->lname = $lname;
    $this->email = $email;
    $this->uid = $uid;
    $this->pwd = $pwd;
    $this->type = $type;
  }

  public function editUser()
  {
    if ($this->emptyInput() == false) {
      header('Location: ../view/users.php?error=emptyinput');
      exit;
    }

    if ($this->invalidUid() == false) {
      header('Location: ../view/users.php?error=invalidusername');
      exit;
    }

    if ($this->invalidEmail() == false) {
      header('Location: ../view/users.php?error=invalidemail');
      exit;
    }

    if ($this->checkUsername($this->id, $this->uid) == false) {
      header('Location: ../view/users.php?error=usernametaken');
      exit;
    }

    if ($this->checkEmail($this->id, $this->email) == false) {
      header('Location: ../view/users.php?error=emailtaken');
      exit;
    }

    $this->setUser($this->id, $this->fname, $this->lname, $this->email, $this->uid, $this->pwd, $this->type);
  }

  private function emptyInput()
  {
    if (empty($this->fname) || empty($this->lname) || empty($this->email) || empty($this->uid) || empty($this->pwd) || empty($this->type)) {
      return false;
    }
    return true;
  }

  private function invalidUid()
  {
    if (!preg_match('/^[a-zA-Z0-9]*$/', $this->uid)) {
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

class DeleteUserContr extends DeleteUser
{
  private $id;

  public function __construct($id)
  {
    $this->id = $id;
  }

  public function deleteUser()
  {
    $this->setUser($this->id);
  }
}
?>
