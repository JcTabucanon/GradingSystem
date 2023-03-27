<?php

class AddRecordsContr extends AddRecords
{
  private $studentnumber;
  private $status;
  private $level;
  private $year;
  private $date;

  public function __construct($studentnumber, $status, $level, $year, $date)
  {
    $this->studentnumber = $studentnumber;
    $this->status = $status;
    $this->level = $level;
    $this->year = $year;
    $this->date = $date;
  }

  public function addRecords()
  {
    if ($this->emptyInput() == false) {
      header('Location: ../view/records.php?studentnumber=' . $this->studentnumber . '&error=emptyinput');
      exit;
    }

    $this->setRecords($this->studentnumber, $this->status, $this->level, $this->year, $this->date);
  }

  private function emptyInput()
  {
    if (empty($this->studentnumber) || empty($this->status) || empty($this->level) || empty($this->year) || empty($this->date)) {
      return false;
    }
    return true;
  }
}

class EditRecordsContr extends EditRecords
{
  private $id;
  private $studentnumber;
  private $status;
  private $level;
  private $year;
  private $date;

  public function __construct($id, $studentnumber, $status, $level, $year, $date)
  {
    $this->id = $id;
    $this->studentnumber = $studentnumber;
    $this->status = $status;
    $this->level = $level;
    $this->year = $year;
    $this->date = $date;
  }

  public function editRecords()
  {
    if ($this->emptyInput() == false) {
      header('Location: ../view/records.php?studentnumber=' . $this->studentnumber . '&error=emptyinput');
      exit;
    }

    $this->setRecords($this->id, $this->studentnumber, $this->status, $this->level, $this->year, $this->date);
  }

  private function emptyInput()
  {
    if (empty($this->studentnumber) || empty($this->status) || empty($this->level) || empty($this->year) || empty($this->date)) {
      return false;
    }
    return true;
  }
}

class DeleteRecordsContr extends DeleteRecords
{
  private $id;
  private $studentnumber;

  public function __construct($id, $studentnumber)
  {
    $this->id = $id;
    $this->studentnumber = $studentnumber;
  }

  public function deleteRecords()
  {
    $this->setRecords($this->id, $this->studentnumber);
  }
}
?>