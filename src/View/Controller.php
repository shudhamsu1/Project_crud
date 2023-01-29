<?php

namespace Php\Project\View;

class Controller
{
  public function index()
  {
    if(isset($_GET['id'])) {
      $id = $_GET['id'];


      $model = new Model();
      $user = $model->getUserById($id);


      $view = 'src/View/view.html.php';
      include 'src/Template/template.php';
    }
  }
}