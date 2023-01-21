<?php

namespace Php\Project\Profile;

use Php\Project\Includes\Session;

class Controller
{
  public function index(){

    $userSession = new Session();
    $userId= $userSession->getUserID();

//    echo $userId;
    $model = new Model();
    $user = $model->getUserById($userId);

    $view = 'src/Profile/view.html.php';
    include 'src/Template/template.php';
  }
}