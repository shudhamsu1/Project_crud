<?php
namespace Php\Project\Register;

use Php\Project\Includes\Database;

class Model
{


  public function saveUser($data){ // the data is coming from post from controller

    $firstName= $data['fname'];
    $lastName = $data['lname'];
    $email = $data['email'];
    $password = $data['password'];
    $phone = $data['phone'];
    $role= 'user';
    $gender = $data['gender'];
    $created_at = date('Y-m-d H:i:s');
    $updated_at = date('Y-m-d H:i:s');

    $sql = "INSERT INTO users(first_name, last_name, email, password, phone, role, gender,created_at, updated_at) 
VALUES ('$firstName', '$lastName','$email', '$password', '$phone', '$role', '$gender', '$created_at', '$updated_at') ";

    $database = new Database();
    $database->insertRow($sql);


  }

  }


