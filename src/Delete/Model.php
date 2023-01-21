<?php
namespace Php\Project\Delete;

use Php\Project\Includes\Database;

class Model
{
  public function deleteUserById($id){
    $sql = "DELETE FROM users WHERE id=$id";

    $dbConnect = new Database();
    return $dbConnect->connection->query($sql);

  }
}