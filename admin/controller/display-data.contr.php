<?php

class DisplayDashboardContr extends DisplayDashboard
{
  public function fetchStats()
  {
    $result = $this->getStats();
    return $result;
  }

  public function fetchTopPerformers()
  {
    $result = $this->getTopPerformers();
    return $result;
  }
}

class DisplayStudentsContr extends DisplayStudents
{
  private $query;

  public function fetchData()
  {
    $result = $this->getData();
    return $result;
  }

  public function fetchSearchData($query)
  {
    $this->query = $query;
    $result = $this->getSearchData($this->query);
    return $result;
  }
}

class DisplaySubjectsContr extends DisplaySubjects
{
  private $query;

  public function fetchData()
  {
    $result = $this->getData();
    return $result;
  }

  public function fetchSearchData($query)
  {
    $this->query = $query;
    $result = $this->getSearchData($this->query);
    return $result;
  }
}

class DisplayYearContr extends DisplayYear
{
  private $query;

  public function fetchData()
  {
    $result = $this->getData();
    return $result;
  }

  public function fetchSearchData($query)
  {
    $this->query = $query;
    $result = $this->getSearchData($this->query);
    return $result;
  }
}

class DisplayGradeLevelContr extends DisplayGradeLevel
{
  private $query;

  public function fetchData()
  {
    $result = $this->getData();
    return $result;
  }

  public function fetchSearchData($query)
  {
    $this->query = $query;
    $result = $this->getSearchData($this->query);
    return $result;
  }
}

class DisplayInstructorContr extends DisplayInstructor
{
  private $query;

  public function fetchData()
  {
    $result = $this->getData();
    return $result;
  }

  public function fetchSearchData($query)
  {
    $this->query = $query;
    $result = $this->getSearchData($this->query);
    return $result;
  }
}

class DisplayDeptContr extends DisplayDept
{
  private $query;

  public function fetchData()
  {
    $result = $this->getData();
    return $result;
  }

  public function fetchSearchData($query)
  {
    $this->query = $query;
    $result = $this->getSearchData($this->query);
    return $result;
  }
}

class DisplayRoomsContr extends DisplayRooms
{
  private $query;

  public function fetchData()
  {
    $result = $this->getRooms();
    return $result;
  }

  public function fetchSearchData($query)
  {
    $this->query = $query;
    $result = $this->getSearchData($this->query);
    return $result;
  }
}

class DisplayUsersContr extends DisplayUsers
{
  private $query;

  public function fetchData()
  {
    $result = $this->getUsers();
    return $result;
  }

  public function fetchSearchData($query)
  {
    $this->query = $query;
    $result = $this->getUser($this->query);
    return $result;
  }
}
?>