<?php

namespace Php\Project\Includes;
class Database
{
  public $connection;

  public function __construct()
  {


    $this->connection = new \mysqli('localhost', 'shudhamsu', 'phpmyadmin', 'user_mgmt');
//
    if ($this->connection->connect_errno) {
      echo 'Failed to connect to MySQL:' . $this->connection->connect_error;
      exit();
    }
  }


  public function getSelect($sql)
  {
    $data = [];
    $result = $this->connection->query($sql);
    $row = $result->num_rows;// returns the number of rows


    if ($row > 0) {
      if ($row == 1) {
        return $result->fetch_assoc();
      } else {
        while ($row = $result->fetch_assoc()) {
          $data[] = $row;
        }
        return $data;
      }
    }
  }

  public function deleteRow($id)
  {
    $sql = 'Delete from users where id=number($id)';
    $result = $this->connection->query($sql);
    return $result;
  }


  public function updateRow($sql)
  {
    $sql = "Delete from users where id = 1";

    $this->connection->query($sql);
  }

  public function insertRow($sql)
  {
    $this->connection->query($sql);
  }


  public function findall(){
    $sql = "SELECT * FROM users";
   return $this->getSelect($sql);
  }

}