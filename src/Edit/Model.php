<?php

namespace Php\Project\Edit;
use Php\Project\Includes\Database;
class Model
{

  public function saveUser($data){ // the data is coming from post from controller
    $id = $_GET['id'];
    $firstName= $data['fname'];
    $lastName = $data['lname'];
    $email = $data['email'];
    $password = $data['password'];
    $phone = $data['phone'];
    $role= 'user';
    $gender = $data['gender'];
    $created_at = $data['created_at'];
    $updated_at = date('Y-m-d H:i:s');



    $sql = "UPDATE users set id=$id,first_name='$firstName', last_name='$lastName', email='$email',
    password='$password',phone = '$phone', role = '$role',gender = '$gender', created_at = '$created_at',
    updated_at = '$updated_at' where id=$id";

    $database = new Database();
    $database->insertRow($sql);


  }

  public function getUserById($id){
    $sql = "Select * FROM users WHERE id=$id";
    $dbConnection = new Database();
    return $dbConnection->getSelect($sql);
  }

}