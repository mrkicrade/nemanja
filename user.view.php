<?php 
require_once 'functions.php';
?>
<?php require_once 'partials/header.php'; ?>
<?php require_once 'partials/navbar.php'; ?> 
<?php 
  if (isset($_SESSION['id'])) {
    $oglasi = get_all_user_ads($_SESSION['id']);
    // dd($oglasi);
  } else {
    header("Location: index.php");
  }
  
?>
<div class="container">
  <div class="row">
    <div class="col-10 offset-1">
      <div class="row">
        <div class="col-6 offset-3 mt-3 mb-5">
          <a href="new.add.view.php" class="btn btn-info form-control">Novi oglas</a>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <?php foreach($oglasi as $oglas): ?>
      <div class="col-4">
        <div class="card mb-2 mt-2">
          <div class="card-header">
            <a href="category.from.user.php?category=<?php echo $oglas['category']; ?>&id=<?php echo $_SESSION['id']; ?>" class="btn btn-secondary">
              <?php echo $oglas['category']; ?>
            </a>
            <a href="delete.php?id=<?php echo $oglas['id']; ?>" class="btn btn-primary btn-sm float-end">Delete</a>
          </div>
          <div class="card-body text-center">
            <h5><?php echo $oglas['title'] ?></h5>
            
          </div>
          <div class="card-footer">
            <a href="" class="btn btn-warning btn-sm float-start">
              <?php echo $oglas['name']; ?>
            </a>
            <a href="" class="btn btn-danger btn-sm float-end">
              <?php echo $oglas['price']; ?>
            </a>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>
   
<?php require_once 'partials/footer.php'; ?>