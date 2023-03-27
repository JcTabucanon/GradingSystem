<?php

class DisplaySubjectList extends Dbh
{
  protected function getData($syid, $studentnumber)
  {
    $stmt = $this->connect()->prepare('SELECT * FROM tblgrades g, tblsubjects s, tblclass c WHERE g.student_number = ? AND g.sy_id = ? AND s.subj_code = g.subj_code AND c.class_code = g.subj_code;');
    $result = 0;

    if (!$stmt->execute([$studentnumber, $syid])) {
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

  protected function getSearchData($syid, $studentnumber, $query)
  {
    $stmt = $this->connect()->prepare('SELECT * FROM tblgrades g, tblsubjects s, tblclass c WHERE g.student_number = ? AND g.sy_id = ? AND s.subj_code = g.subj_code AND c.class_code = g.subj_code AND (g.grade_remarks = ? OR s.subj_name = ? OR s.subj_desc = ? OR c.class_inst = ?);');
    $result = 0;

    if (!$stmt->execute([$studentnumber, $syid, $query, $query, $query, $query])) {
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

class DisplaySubjectListContr extends DisplaySubjectList
{
  private $syid;
  private $studentnumber;
  private $course;

  public function __construct($syid, $studentnumber, $course)
  {
    $this->syid = $syid;
    $this->studentnumber = $studentnumber;
  }

  public function fetchData()
  {
    $result = $this->getData($this->syid, $this->studentnumber);
    return $result;
  }

  public function fetchSearchData($query)
  {
    $this->query = $query;
    $result = $this->getSearchData($this->syid, $this->studentnumber, $this->query);
    return $result;
  }
}

class DisplaySubjectOptions extends Dbh
{
  protected function getData($course, $studentnumber)
  {
    $stmt = $this->connect()->prepare('SELECT * FROM tblsubjects s WHERE s.subj_level = ? AND s.subj_code NOT IN (SELECT subj_code FROM tblgrades g WHERE g.student_number = ?);');
    $result = 0;

    if (!$stmt->execute([$course, $studentnumber])) {
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
}

class DisplaySubjectOptionsContr extends DisplaySubjectOptions
{
  private $course;
  private $studentnumber;

  public function __construct($course, $studentnumber)
  {
    $this->course = $course;
    $this->studentnumber = $studentnumber;
  }

  public function fetchData()
  {
    $result = $this->getData($this->course, $this->studentnumber);
    return $result;
  }
}

$subjectOptions = new DisplaySubjectOptionsContr($course, $studentnumber);
$options = $subjectOptions->fetchData();

$display = new DisplaySubjectListContr($syid, $studentnumber, $course);
$result = $display->fetchData();
