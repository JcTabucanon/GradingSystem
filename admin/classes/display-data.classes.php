<?php

class DisplayDashboard extends Dbh
{
  protected function getStats()
  {
    $sql = 'SELECT (SELECT COUNT(*) FROM tblstudents) AS students, (SELECT COUNT(*) FROM tblinstructor) AS instructors, (SELECT COUNT(*) FROM tblclass) AS classes;';
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

  protected function getTopPerformers()
  {
    $sql = 'SELECT DISTINCT student_id, student_fname, student_mname,  student_lname, student_email, g.grade_avg, subj.subj_name FROM tblstudents s, tblgrades g, tblsubjects subj WHERE s.student_number = g.student_number AND g.grade_avg > 89 AND subj.subj_code = g.subj_code ORDER BY g.grade_avg DESC LIMIT 5;';
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

class DisplayStudents extends Dbh
{
  protected function getData()
  {
    $sql = 'SELECT * FROM tblstudents;';
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

  protected function getSearchData($query)
  {
    $stmt = $this->connect()->prepare('SELECT * FROM tblstudents WHERE student_number = ? OR student_fname = ? OR student_mname = ? OR student_lname = ? OR student_gender = ?;');
    $result = 0;

    if (!$stmt->execute([$query, $query, $query, $query, $query])) {
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

class DisplaySubjects extends Dbh
{
  protected function getData()
  {
    $sql = 'SELECT * FROM tblsubjects;';
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

  protected function getSearchData($query)
  {
    $stmt = $this->connect()->prepare('SELECT * FROM tblsubjects WHERE subj_name = ? OR subj_level = ? OR subj_ay = ? OR subj_sem = ?;');
    $result = 0;

    if (!$stmt->execute([$query, $query, $query, $query])) {
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

class DisplayYear extends Dbh
{
  protected function getData()
  {
    $sql = 'SELECT * FROM tblyear;';
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

  protected function getSearchData($query)
  {
    $stmt = $this->connect()->prepare('SELECT * FROM tblyear WHERE ay_name = ?;');
    $result = 0;

    if (!$stmt->execute([$query])) {
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

class DisplayGradeLevel extends Dbh
{
  protected function getData()
  {
    $sql = 'SELECT * FROM tblcourse;';
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

  protected function getSearchData($query)
  {
    $stmt = $this->connect()->prepare('SELECT * FROM tblcourse WHERE course_name = ?;');
    $result = 0;

    if (!$stmt->execute([$query])) {
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

class DisplayInstructor extends Dbh
{
  protected function getData()
  {
    $sql = 'SELECT * FROM tblinstructor;';
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

  protected function getSearchData($query)
  {
    $stmt = $this->connect()->prepare('SELECT * FROM tblinstructor WHERE inst_name = ? OR inst_gender = ? OR inst_empstatus = ?;');
    $result = 0;

    if (!$stmt->execute([$query, $query, $query])) {
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

class DisplayDept extends Dbh
{
  protected function getData()
  {
    $sql = 'SELECT * FROM tbldepartment;';
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

  protected function getSearchData($query)
  {
    $stmt = $this->connect()->prepare('SELECT * FROM tbldepartment WHERE dept_id = ? OR dept_name = ? OR dept_desc = ?;');
    $result = 0;

    if (!$stmt->execute([$query, $query, $query])) {
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

class DisplayRooms extends Dbh
{
  protected function getRooms()
  {
    $sql = 'SELECT * FROM tblrooms;';
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

  protected function getSearchData($query)
  {
    $stmt = $this->connect()->prepare('SELECT * FROM tblrooms WHERE room_id = ? OR room_name = ? OR room_desc = ?;');
    $result = 0;

    if (!$stmt->execute([$query, $query, $query])) {
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

class DisplayUsers extends Dbh
{
  protected function getUsers()
  {
    $sql = 'SELECT * FROM tbluseraccounts;';
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

  protected function getUser($query)
  {
    $stmt = $this->connect()->prepare('SELECT * FROM tbluseraccounts WHERE account_id = ? OR account_firstname = ? OR account_lastname = ? OR account_username = ? OR account_type = ?;');
    $result = 0;

    if (!$stmt->execute([$query, $query, $query, $query, $query])) {
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
?>