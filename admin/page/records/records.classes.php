<?php

class DisplayRecordsContr extends DisplayRecords
{
  private $query;
  private $studentnumber;

  public function __construct($studentnumber)
  {
    $this->studentnumber = $studentnumber;
  }

  public function fetchData()
  {
    $result = $this->getRecords($this->studentnumber);
    return $result;
  }

  public function fetchSearchData($query)
  {
    $this->query = $query;
    $result = $this->getRecord($this->query, $this->studentnumber);
    return $result;
  }
}

class DisplayRecords extends Dbh
{
  protected function getRecords($studentnumber)
  {
    $stmt = $this->connect()->prepare('SELECT * FROM tblschoolyear WHERE student_number = ?;');
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

  protected function getRecord($query, $studentnumber)
  {
    $stmt = $this->connect()->prepare('SELECT * FROM tblschoolyear WHERE sy_level = ? OR sy_ay = ? OR sy_status = ? OR sy_enrolldate = ? AND student_number = ?;');
    $result = 0;

    if (!$stmt->execute([$query, $query, $query, $query, $studentnumber])) {
      $stmt = null;
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
