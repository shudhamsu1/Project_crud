<?php
namespace Php\Project\Delete;
class Controller
{
  public function index(){
    if(isset($_GET['id'])){
      $id = $_GET['id'];


      $model = new Model();
      $deleteUser = $model->deleteUserById($id);

      $view = 'src/Delete/view.html.php';
      include 'src/Template/template.php';

    }




}
}