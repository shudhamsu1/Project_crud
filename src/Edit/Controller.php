<?php
namespace Php\Project\Edit;
use Php\Project\Includes\Session;
class Controller
{
  public function index(){

    $userSession = new Session();
    $userId= $userSession->getUserID();

    echo $userId;

    $view = 'src/Edit/view.html.php';
    include 'src/Template/template.php';

  }
}