<?php
namespace Php\Project\Login;


use Php\Project\Login\Model;

class Controller
{
  public function index(){


    if(isset($_POST['Login'])){

      $username = $_POST['username'];
      $password = $_POST['password'];
      $model = new Model();
      $model->checkLogin($username, $password);

    }
    else{

      $view = 'src/Login/view.html.php';
      include 'src/Template/template.php';


    }

  }

  public function logout(){
    session_destroy();
    header('Location:index.php?module=Login');
  }
}