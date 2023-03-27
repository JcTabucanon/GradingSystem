<?php

class DisplayOptions extends Dbh
{
  protected function getYearData()
  {
    $sql = 'SELECT ay_name FROM tblyear;';
    $stmt = $this->connect()->query($sql);
    $result = 0;

    if (!$stmt) {
      $stmt = null;
      exit;
    }

    while ($row = $stmt->fetchAll(PDO::FETCH_ASSOC)) {
      $result = $row;
    }

    $stmt = null;
    return $result;
  }

  protected function getGradeLevelData()
  {
    $sql = 'SELECT course_name FROM tblcourse;';
    $stmt = $this->connect()->query($sql);
    $result = 0;

    if (!$stmt) {
      $stmt = null;
      exit;
    }

    while ($row = $stmt->fetchAll(PDO::FETCH_ASSOC)) {
      $result = $row;
    }

    $stmt = null;
    return $result;
  }

  protected function getStudentData($studentnumber)
  {
    $stmt = $this->connect()->prepare('SELECT student_fname, student_mname, student_lname, student_number FROM tblstudents WHERE student_number = ?;');
    $result = 0;

    if (!$stmt->execute([$studentnumber])) {
      $stmt = null;
      exit;
    }

    while ($row = $stmt->fetchAll(PDO::FETCH_ASSOC)) {
      $result = $row;
    }

    $stmt = null;
    return $result;
  }
}

class DisplayOptionsContr extends DisplayOptions
{
  private $studentnumber;

  public function fetchYearData()
  {
    $result = $this->getYearData();
    return $result;
  }

  public function fetchGradeLevelData()
  {
    $result = $this->getGradeLevelData();
    return $result;
  }

  public function fetchStudentData($studentnumber)
  {
    $this->studentnumber = $studentnumber;
    $result = $this->getStudentData($this->studentnumber);
    return $result;
  }
}

$selectionOptions = new DisplayOptionsContr;
$gradelevel = $selectionOptions->fetchGradeLevelData();
$year = $selectionOptions->fetchYearData();
$student = $selectionOptions->fetchStudentData($studentnumber);

$studentname = $student[0]['student_lname'];
$studentname .= ', ' . $student[0]['student_fname'];
$studentname .= ' ' . $student[0]['student_mname'];
