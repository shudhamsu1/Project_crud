<?php

namespace Php\Project\PictureUpload;
use Php\Project\Includes\Database;

class Model
{
  public function addPictureById( $id,$filename){
    $sql = "UPDATE users SET profile_image ='$filename' where id=$id";
    $dbConnection = new Database();
    $dbConnection->insertRow($sql);

  }

}

