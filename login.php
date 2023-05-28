<?php 
require_once 'functions.php';

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
$query = mysqli_query(db(), $sql);
$result = mysqli_fetch_assoc($query);

if ($result) {
  logUser($result); // ako smo uspešno unelo podatke, pokreni funkciju logUser, prosledi joj varijablu $result, i ta funkcija će da izvrši logovanje na aplikaciju
} else {
  header("Location: login.view.php");
}

?>