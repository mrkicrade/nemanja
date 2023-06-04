<?php require_once 'partials/header.php'; ?>
<?php require_once 'partials/navbar.php'; ?> 
<?php $oglasi = getAll(); ?> <!-- Ovom funkcijom preuzimamo sve oglase iz baze podataka -->
<?php dd($oglasi); ?>
<div class="container">
  <div class="row">
    <div class="col-10 offset-1">
      <h1 class="display-4 text-center">Mali oglasi</h1>
      <div class="row">

      </div>
    </div>
  </div>
</div>   
<?php require_once 'partials/footer.php'; ?>