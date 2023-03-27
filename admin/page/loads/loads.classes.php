<?php

class DisplayOptionsContr extends DisplayOptions
{
  public function fetchData()
  {
    $result = $this->getData();
    return $result;
  }
}

class DisplayLoadsContr extends DisplayLoads
{
  private $instructor;

  public function __construct($instructor)
  {
    $this->instructor = $instructor;
  }

  public function fetchData()
  {
    $result = $this->getData($this->instructor);
    return $result;
  }

  public function fetchSearchData($query)
  {
    $this->query = $query;
    $result = $this->getSearchData($this->query);
    return $result;
  }
}

class DisplayOptions extends Dbh
{
  protected function getData()
  {
    $sql = 'SELECT * FROM tblsubjects WHERE NOT EXISTS (SELECT class_name FROM tblclass c WHERE subj_name = c.class_name AND subj_code = c.class_code);';
    $stmt = $this->connect()->query($sql);
    $result = 0;

    if (!$stmt) {
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

class DisplayLoads extends Dbh
{
  protected function getData($instructor)
  {
    $stmt = $this->connect()->prepare('SELECT * FROM tblclass WHERE inst_code = ?;');
    $result = 0;

    if (!$stmt->execute([$instructor])) {
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

  protected function getSearchData($query)
  {
    $stmt = $this->connect()->prepare('SELECT * FROM tblclass WHERE class_name = ? OR class_level = ? OR class_room = ? OR class_day = ? OR class_time = ?;');
    $result = 0;

    if (!$stmt->execute([$query, $query, $query, $query, $query])) {
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

$subjectOptions = new DisplayOptionsContr;
$options = $subjectOptions->fetchData();

$display = new DisplayLoadsContr($instructor);
$result = $display->fetchData();
