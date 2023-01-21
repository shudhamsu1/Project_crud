<?php

namespace Php\Project\Admin;
use Php\Project\Includes\Session;

class Controller
{
  public function index(){
//    $adminSession = new Session();
//    $adminRole = $adminSession->getRole();
//
//
//    $model = new Model();
//    $rolesUser = $model->getUserByRole($adminRole);
    $view = 'src/Admin/view.html.php';
    include 'src/Template/template.php';

  }
}