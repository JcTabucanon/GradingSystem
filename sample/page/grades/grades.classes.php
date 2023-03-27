<?php

class DisplayGrades extends Dbh
{
  protected function getCourses()
  {
    $sql = 'SELECT course_name FROM tblcourse ORDER BY course_name DESC;';
    $stmt = $this->connect()->query($sql);
    $courses = 0;

    if (!$stmt) {
      $stmt = null;
      echo "error";
      exit;
    }

    while ($row = $stmt->fetchAll(PDO::FETCH_ASSOC)) {
      $courses = $row;
    }

    $stmt = null;
    return $courses;
  }

  protected function getData($studentnumber)
  {
    $stmt = $this->connect()->prepare('SELECT * FROM tblgrades g, tblsubjects s, tblclass c WHERE g.student_number = ? AND s.subj_code = g.subj_code AND c.class_code = g.subj_code ORDER BY s.subj_sem;');
    $result = 0;

    if (!$stmt->execute([$studentnumber])) {
      $stmt = null;
      echo "error";
      exit;
    }

    while ($row = $stmt->fetchAll(PDO::FETCH_ASSOC)) {
      $result = $row;
    }

    $stmt = null;
    return $result;
  }

  protected function getSearchData($studentnumber, $query)
  {
    $stmt = $this->connect()->prepare('SELECT * FROM tblgrades g, tblsubjects s, tblclass c WHERE g.student_number = ? AND s.subj_level = ? AND s.subj_code = g.subj_code AND c.class_code = g.subj_code ORDER BY s.subj_sem;');
    $result = 0;

    if (!$stmt->execute([$studentnumber, $query])) {
      $stmt = null;
      echo "error";
      exit;
    }

    if ($stmt->rowCount() == 0) {
      $stmt = null;
      return $result;
    }

    while ($row = $stmt->fetchAll(PDO::FETCH_ASSOC)) {
      $result = $row;
    }

    $stmt = null;
    return $result;
  }
}

class DisplayGradesContr extends DisplayGrades
{
  private $studentnumber;

  public function __construct($studentnumber)
  {
    $this->studentnumber = $studentnumber;
  }

  public function fetchCourses()
  {
    $courses = $this->getCourses();
    return $courses;
  }

  public function fetchData()
  {
    $result = $this->getData($this->studentnumber);
    return $result;
  }

  public function fetchSearchData($query)
  {
    $this->query = $query;
    $result = $this->getSearchData($this->studentnumber, $this->query);
    return $result;
  }
}

$display = new DisplayGradesContr($studentnumber);
$courses = $display->fetchCourses();
$result = $display->fetchData();
