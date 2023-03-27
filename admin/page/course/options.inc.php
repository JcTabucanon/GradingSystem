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
}

class DisplayOptionsContr extends DisplayOptions
{
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
}

$selectionOptions = new DisplayOptionsContr;
$gradelevel = $selectionOptions->fetchGradeLevelData();
$year = $selectionOptions->fetchYearData();
