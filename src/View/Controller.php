<?php

namespace Php\Project\View;

class Controller
{
  public function index()
  {
    //    $adminSession = new Session();
    //    $adminRole = $adminSession->getRole();
    //
    //
    //    $model = new Model();
    //    $rolesUser = $model->getUserByRole($adminRole);
    $view = 'src/View/view.html.php';
    include 'src/Template/template.php';
  }
}