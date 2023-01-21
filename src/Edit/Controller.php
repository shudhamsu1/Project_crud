<?php
namespace Php\Project\Edit;
use Php\Project\Includes\Session;
class Controller
{
  public function index(){

//    $userSession = new Session();
//    $userId= $userSession->getUserID();

    $id = $_GET['id'];

    $model = new Model();
    $user = $model->getUserById($id);

    $view = 'src/Edit/view.html.php';
    include 'src/Template/template.php';

  }
}