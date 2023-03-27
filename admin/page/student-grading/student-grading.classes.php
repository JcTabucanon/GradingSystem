<?php

class DisplayStudentList extends Dbh
{
  protected function getData($subjcode)
  {
    $stmt = $this->connect()->prepare('SELECT * FROM tblgrades g, tblstudents s, tblsubjects sub WHERE g.subj_code = ? AND g.student_number = s.student_number AND sub.subj_code = g.subj_code;');
    $result = 0;

    if (!$stmt->execute([$subjcode])) {
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

  protected function getSearchData($subjcode, $query)
  {
    $stmt = $this->connect()->prepare('SELECT * FROM tblgrades g, tblstudents s WHERE g.subj_code = ? AND g.student_number = s.student_number AND (s.student_number = ? OR s.student_fname = ? OR s.student_mname = ? OR s.student_lname = ? OR g.grade_remarks = ?);');
    $result = 0;

    if (!$stmt->execute([$subjcode, $query, $query, $query, $query, $query])) {
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

class DisplayStudentListContr extends DisplayStudentList
{
  private $subjcode;

  public function __construct($subjcode)
  {
    $this->subjcode = $subjcode;
  }

  public function fetchData()
  {
    $result = $this->getData($this->subjcode);
    return $result;
  }

  public function fetchSearchData($query)
  {
    $this->query = $query;
    $result = $this->getSearchData($this->subjcode, $this->query);
    return $result;
  }
}

$display = new DisplayStudentListContr($subjcode);
$result = $display->fetchData();
