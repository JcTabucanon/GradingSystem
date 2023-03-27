<?php

class AssignSubjectListContr extends AssignSubjectList
{
  private $studentnumber;
  private $syid;
  private $subjcode;
  private $course;

  public function __construct($studentnumber, $syid, $subjcode, $course)
  {
    $this->studentnumber = $studentnumber;
    $this->syid = $syid;
    $this->subjcode = $subjcode;
    $this->course = $course;
  }

  public function assignSubjectList()
  {
    if ($this->emptyInput() == false) {
      header('Location: ../view/course-list.php?id=' . $this->syid . '&studentnumber=' . $this->studentnumber . '&course=' . $this->subjcode . '&error=emptyinput');
      exit;
    }

    $this->setSubjectList($this->studentnumber, $this->syid, $this->subjcode, $this->course);
  }

  private function emptyInput()
  {
    if (empty($this->subjcode)) {
      return false;
    }
    return true;
  }
}

class UnassignSubjectListContr extends UnassignSubjectList
{
  private $id;
  private $studentnumber;
  private $syid;
  private $course;

  public function __construct($id, $studentnumber, $syid, $course)
  {
    $this->id = $id;
    $this->studentnumber = $studentnumber;
    $this->syid = $syid;
    $this->course = $course;
  }

  public function deleteSubjectList()
  {
    $this->setSubjectList($this->id, $this->studentnumber, $this->syid, $this->subjcode, $this->course);
  }
}
?>