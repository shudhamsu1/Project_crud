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

    if(empty($data)){

      $msg = "Invalid username or password";
      $view = 'src/Login/view.html.php';
      include 'src/Template/template.php';


    }elseif($data['role'] == 'admin'){
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
    }else {

          header('Location: index.php?module=Login');
          echo "<h5>Would you like to Register </h5>";

    }






  }
}