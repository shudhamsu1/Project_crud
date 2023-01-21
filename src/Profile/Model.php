<?php

namespace Php\Project\Profile;
use Php\Project\Includes\Database;
class Model
{
  public function getUserById($id)
  {
    $sql = "Select * FROM users WHERE id=$id";
    $dbConnection = new Database();
    return $dbConnection->getSelect($sql);
  }

}