<?php

namespace Php\Project\Admin;
use Php\Project\Includes\Session;

class Controller
{
  public function index(){
//    $adminSession = new Session();
//    $adminRole = $adminSession->getRole();
//comment the model part if i want all the users and also uncomment in view.html
//
    $model = new Model();
    $users = $model->getUserByRole();

    $view = 'src/Admin/view.html.php';
    include 'src/Template/template.php';

  }
}