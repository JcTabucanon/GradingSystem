<?php

class AddStudentsContr extends AddStudents
{
  private $studentnumber;
  private $fname;
  private $mname;
  private $lname;
  private $gender;
  private $bday;
  private $age;
  private $status;
  private $nationality;
  private $religion;
  private $contact;
  private $email;
  private $address1;
  private $address2;

  public function __construct($studentnumber, $fname, $mname, $lname, $gender, $bday, $age, $status, $nationality, $religion, $contact, $email, $address1, $address2)
  {
    $this->studentnumber = $studentnumber;
    $this->fname = $fname;
    $this->mname = $mname;
    $this->lname = $lname;
    $this->gender = $gender;
    $this->bday = $bday;
    $this->age = $age;
    $this->status = $status;
    $this->nationality = $nationality;
    $this->religion = $religion;
    $this->contact = $contact;
    $this->email = $email;
    $this->address1 = $address1;
    $this->address2 = $address2;
  }

  public function addStudents()
  {
    if ($this->emptyInput() == false) {
      header('Location: ../view/students.php?error=emptyinput');
      exit;
    }

    if ($this->checkStudentNumber($this->studentnumber) == false) {
      header('Location: ../view/students.php?error=alreadyexists');
      exit;
    }

    if ($this->invalidEmail() == false) {
      header('Location: ../view/students.php?error=invalidemail');
      exit;
    }

    $this->setStudents($this->studentnumber, $this->fname, $this->mname, $this->lname, $this->gender, $this->bday, $this->age, $this->status, $this->nationality, $this->religion, $this->contact, $this->email, $this->address1, $this->address2);
  }

  private function emptyInput()
  {
    if (empty($this->studentnumber) || empty($this->fname) || empty($this->mname) || empty($this->lname) || empty($this->gender) || empty($this->bday) || empty($this->age) || empty($this->status) || empty($this->nationality) || empty($this->religion) || empty($this->contact) || empty($this->email) || empty($this->address1)) {
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

class EditStudentsContr extends EditStudents
{
  private $id;
  private $fname;
  private $mname;
  private $lname;
  private $gender;
  private $bday;
  private $age;
  private $status;
  private $nationality;
  private $religion;
  private $contact;
  private $email;
  private $address1;
  private $address2;

  public function __construct($id, $fname, $mname, $lname, $gender, $bday, $age, $status, $nationality, $religion, $contact, $email, $address1, $address2)
  {
    $this->id = $id;
    $this->fname = $fname;
    $this->mname = $mname;
    $this->lname = $lname;
    $this->gender = $gender;
    $this->bday = $bday;
    $this->age = $age;
    $this->status = $status;
    $this->nationality = $nationality;
    $this->religion = $religion;
    $this->contact = $contact;
    $this->email = $email;
    $this->address1 = $address1;
    $this->address2 = $address2;
  }

  public function editStudents()
  {
    if ($this->emptyInput() == false) {
      header('Location: ../view/students.php?error=emptyinput');
      print_r($_REQUEST);
      exit;
    }

    if ($this->invalidEmail() == false) {
      header('Location: ../view/students.php?error=invalidemail');
      exit;
    }

    $this->setStudents($this->id, $this->fname, $this->mname, $this->lname, $this->gender, $this->bday, $this->age, $this->status, $this->nationality, $this->religion, $this->contact, $this->email, $this->address1, $this->address2);
  }

  private function emptyInput()
  {
    if (empty($this->id) || empty($this->fname) || empty($this->mname) || empty($this->lname) || empty($this->gender) || empty($this->bday) || empty($this->age) || empty($this->status) || empty($this->nationality) || empty($this->religion) || empty($this->contact) || empty($this->email) || empty($this->address1)) {
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

class DeleteStudentsContr extends DeleteStudents
{
  private $id;
  private $studentnumber;

  public function __construct($id, $studentnumber)
  {
    $this->id = $id;
    $this->studentnumber = $studentnumber;
  }

  public function deleteStudents()
  {
    $this->setStudents($this->id, $this->studentnumber);
  }
}
?>