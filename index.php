<?php


require 'vendor/autoload.php';


// if (isset($_GET['module'])){
//  $module = $_GET['module'];
//} else{
//  $module = 'login';
//}
//
//$controllerClass = "Php\\Project\\" . $module . '\\Controller';
//
//
//if (class_exists($controllerClass)) {
//  $controllerObject = new $controllerClass();
//  if (isset($_GET['action'])) {
//    $action = $_GET['action'];
//    $controllerObject->$action();
//  }else {
//    $controllerObject->index();
//  }
//  exit;
//}  else{
//  echo 'Class doesnt exist';
//  exit;
//}


$module = $_GET['module'] ?? 'Login';
// if (isset($_GET['module'])){
//  $module = $_GET['module'];
//  if ($module== 'delete' || $module ="view"){
//    $controllerClass = "Php\\Project\\" . "Admin" . '\\ $module'. ".php";
//    exit;
//  }
//} else {
//   $module = 'login';
// }
$controllerClass = "Php\\Project\\" . $module . '\\Controller';


if (!class_exists($controllerClass)) {
  echo 'Class does not exist';
}

$controllerObject = new $controllerClass();
if (isset($_GET['action'])) {
  $action = $_GET['action'];
  $controllerObject->$action();
} else {
  $controllerObject->index();
}

exit;
