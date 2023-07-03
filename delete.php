<?php 
require_once 'functions.php';
$id = $_GET['id'];
// dd($id);

delete($id);
?>


<!-- 

1. Na stranici user.view.php napravi dugme "edit"
2. Kada se klikne na to dugme treba da se pojavi popunjena forma sa podacima iz "kliknutog" oglasa
3. Promeni neke podatke
4. Kada kliknes na dugme iz forme, treba da se pojavi izmenjen oglas umesto prvobitnog oglasa.

 -->