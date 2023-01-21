<?php
namespace Php\Project\Register;
class Controller
{
  public function index(){
    //checking if the register data is posted or not from view
    if(isset($_POST['Register'])){
      $data= $_POST;

      $registerModel = new Model();
      $registerModel->saveUser($data);

      header('Location:index.php?module=Login');


    }else {
      $view = 'src/Register/view.html.php';
      include 'src/Template/template.php';
    }

  }
}