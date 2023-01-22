<?php

namespace Php\Project\PictureUpload;

class Controller
{
  public function index(){

    $id = $_GET['id'];
    echo $id;

    if (isset($_POST['uploadfile'])) {

      $filename = $_FILES["choosefile"]["name"];

      $tempname = $_FILES["choosefile"]["tmp_name"];

      $folder = "src/PictureUpload/image/".$filename;
      $model = new Model();


      if (move_uploaded_file($tempname, $folder)) {

        $users = $model->addPictureById($id,$filename);

//        header('index.php?module=Profile&id=$id') ;


      }else{

        echo "Failed to upload image";

      }

      }


    else {
          $view = 'src/PictureUpload/view.html.php';
          include 'src/Template/template.php';
        }

      }

}