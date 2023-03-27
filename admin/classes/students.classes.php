<?php

class AddStudents extends Dbh
{
  protected function setStudents($studentnumber, $fname, $mname, $lname, $gender, $bday, $age, $status, $nationality, $religion, $contact, $email, $address1, $address2)
  {
    $stmt = $this->connect()->prepare('INSERT INTO tblstudents (student_number, student_fname, student_mname, student_lname, student_gender, student_bday, student_age, student_status, student_nationality, student_religion, student_contact, student_email, student_address1, student_address2) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);');

    if (!$stmt->execute([$studentnumber, $fname, $mname, $lname, $gender, $bday, $age, $status, $nationality, $religion, $contact, $email, $address1, $address2])) {
      $stmt = null;
      header("Location: ../view/students.php?error=stmtfailed");
      exit;
    }

    $stmt = null;
  }

  protected function checkStudentNumber($studentnumber)
  {
    $stmt = $this->connect()->prepare('SELECT * FROM tblstudents WHERE student_number = ?;');

    if (!$stmt->execute([$studentnumber])) {
      $stmt = null;
      header('Location: ../view/students.php?error=stmtfailed');
      exit;
    }

    if ($stmt->rowCount() > 0) {
      return false;
    }

    return true;
  }
}

class EditStudents extends Dbh
{
  protected function setStudents($id, $fname, $mname, $lname, $gender, $bday, $age, $status, $nationality, $religion, $contact, $email, $address1, $address2)
  {
    $stmt = $this->connect()->prepare('UPDATE tblstudents SET student_fname = ?, student_mname = ?, student_lname = ?, student_gender = ?, student_bday = ?, student_age = ?, student_status = ?, student_nationality = ?, student_religion = ?, student_contact = ?, student_email = ?, student_address1 = ?, student_address2 = ? WHERE student_id = ?;');

    if (!$stmt->execute([$fname, $mname, $lname, $gender, $bday, $age, $status, $nationality, $religion, $contact, $email, $address1, $address2, $id])) {
      $stmt = null;
      header("Location: ../view/students.php?error=stmtfailed");
      exit;
    }

    $stmt = null;
  }
}

class DeleteStudents extends Dbh
{
  protected function setStudents($id, $studentnumber)
  {
    $stmt = $this->connect()->prepare('DELETE FROM tblstudents WHERE student_id = ?; DELETE FROM tblschoolyear WHERE student_number = ?; DELETE FROM tblgrades WHERE student_number = ?; DELETE FROM tblschoolyear WHERE student_id = ?;');

    if (!$stmt->execute([$id, $studentnumber, $studentnumber, $studentnumber])) {
      $stmt = null;
      header("Location: ../view/students.php?error=stmtfailed");
      exit;
    }

    $stmt = null;
  }
}
?>