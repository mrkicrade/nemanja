<?php 
require_once 'config.php';
session_start();

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
  session_start();
  $_SESSION['id'] = $user['id'];
  $_SESSION['name'] = $user['name'];
  header("Location: oglasi.php");
}

function getAll(){
  $sql = "SELECT oglas.id, oglas.user_id, oglas.title, oglas.category, oglas.price, oglas.text, 
  users.name FROM oglas INNER JOIN users ON oglas.user_id = users.id";

  $query = mysqli_query(db(), $sql);
  $result = mysqli_fetch_all($query, MYSQLI_ASSOC);

  return $result; // Ovim kažemo da nam funkcija vrati sve oglase koje je pokupila iz baze
}

function get_all_user_ads($id) { // varijabla $id dobija kao vrednost ono sto smo poslali kao argument kada smo pozvali ovu funkciju(u nasem slucaju to je vrednost $_SESSION['id'])
  $sql = "SELECT oglas.id, oglas.user_id, oglas.title, oglas.category, oglas.price, oglas.text, users.name FROM oglas INNER JOIN users ON oglas.user_id = users.id WHERE oglas.user_id = '$id'";
  $query = mysqli_query(db(), $sql);
  $result = mysqli_fetch_all($query, MYSQLI_ASSOC);

  return $result;
}

?>
