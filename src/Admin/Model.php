<?php

namespace Php\Project\Admin;
use Php\Project\Includes\Database;
class Model
{
  public function getUserByRole()
  {
    $sql = "SELECT * FROM users WHERE role='user'";
    $dbConnection = new Database();
    return $dbConnection->getSelect($sql);

  }
}