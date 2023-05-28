<?php 
require_once 'config.php';

function db(){
  $con = mysqli_connect(HOST, USER, PASSWORD, DATABASE) or die("Error in connection");

  return $con; // u prevodu bi značilo, vrati mi ovu konekciju tj. kada god pozovemo ovu funkciju mi ćemo se konektujemo sa bazom
}

function dd($val) {
  echo '<pre>';
  die(var_dump($val));
  echo '</pre>';
}

function logUser($user) {
  dd($user);
}

?>
