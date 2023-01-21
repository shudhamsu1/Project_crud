<?php

namespace Php\Project\Login;

use Php\Project\Includes\Database;
use Php\Project\Includes\Session;

class Model
{
  public function checkLogin($username, $password){

    $sql = "select * from users where email='$username' and password='$password'";

    $dbConnection = new Database();
    $data = $dbConnection->getSelect($sql);

    if($data['role'] == 'admin'){
      //render admin page
//      $adminSession = new Session();
//      $adminSession->setRole($data['role']);
      header('Location:index.php?module=Admin');
//      print_r($data);
    }elseif ($data['role'] == 'user'){
      //render user page

      $userSession = new Session();
      $userSession->setUserId($data['id']);

      header('Location:index.php?module=Profile');
    }


//    header('Location: index.php?module=Profile');


  }
}