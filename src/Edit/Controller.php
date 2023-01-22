<?php
namespace Php\Project\Edit;
use Php\Project\Includes\Session;
class Controller
{
  public function index(){

//    $userSession = new Session();
//    $userId= $userSession->getUserID();

    $id = $_GET['id'];
//    echo $id;
    if(isset($_POST['Update'])){
      $data = $_POST;

      $model = new Model();
      $user = $model->saveUser($data);

      header('Location:index.php?module=Admin');

    }else {
      $model = new Model();
      $user = $model->getUserById($id);

      $view = 'src/Edit/view.html.php';
      include 'src/Template/template.php';
    }






  }
}