<?php

class EditStudentGradesContr extends EditStudentGrades
{
  private $id;
  private $code;
  private $subjcode;
  private $first;
  private $second;
  private $third;
  private $fourth;
  private $avg;
  private $remarks;

  public function __construct($id, $code, $subjcode, $first, $second, $third, $fourth, $avg, $remarks)
  {
    $this->id = $id;
    $this->code = $code;
    $this->subjcode = $subjcode;
    $this->first = $first;
    $this->second = $second;
    $this->third = $third;
    $this->fourth = $fourth;
    $this->avg = $avg;
    $this->remarks = $remarks;
  }

  public function editStudentGrades()
  {
    $this->setStudentGrades($this->id, $this->code, $this->subjcode, $this->first, $this->second, $this->third, $this->fourth, $this->avg, $this->remarks);
  }
}
?>