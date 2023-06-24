<?php require_once 'partials/header.php'; ?>
<?php require_once 'partials/navbar.php'; ?>
<?php $oglas = getOne($_GET['id']); ?> 

<div class="container">
  <div class="row">
    <div class="col-10 offset-1">
      <h3 class="display-4 text-center"></h3>
      <div class="row">
        <div class="col-6 offset-3">
          <div class="card mb-2 mt-2">
            <div class="card-header">
              <a href="" class="btn btn-secondary btn-sm"><?php echo $oglas['category'] ?></a>
            </div>
            <div class="card-body text-center">
              <?php echo $oglas['title']; ?>
              <?php echo $oglas['text']; ?>
            </div>
            <div class="card-footer">
              <a href="" class="btn btn-warning btn-sm float-start"><?php echo $oglas['name']; ?></a>
              <a href="" class="btn btn-warning btn-sm float-end"><?php echo $oglas['price']; ?></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php require_once 'partials/footer.php'; ?>