<?php

namespace Php\Project\Includes;

class Session
{
  public function __construct()
  {
    session_start();
  }

  public function setUserId($userId)
  {
    return $_SESSION['userId'] = $userId;
  }

  public function getUserID(){
    return $_SESSION['userId'];
  }

//  public function setRole($role){
//    $_SESSION['userRole'] = $role;
//  }
//
//  public function getRole(){
//    return $_SESSION['userRole'];
//  }



}