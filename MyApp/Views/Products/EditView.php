<?php
use MyApp\Controllers\ProductsController;

    require_once(VIEWS_PATH.'inc/header.php'); 
    require_once(VIEWS_PATH.'inc/navbar.php'); 

    new ProductsController();

?>



<section>
  <div class="container">
    <div class="row">
      <div class="col-md-8 mt-3 d-flex m-auto ">
        <form action="" class="form-control" method="post" enctype="multipart/form-data">
        <label for="fname">Title:</label>
        <input type="text"  class="form-control" id="fname" name="Title" value="<?= $this->proData[0]['Title']?>">
        <label for="fname">Category:</label>
        <input type="text"  class="form-control" id="fname" name="Category" value="<?= $this->proData[0]['Category']?>">
        <label for="lname">Text:</label>
        <textarea type="text"  class="form-control" id="lname" rows="3" name="Text" > <?= $this->proData[0]['Text']?> </textarea>
        <label for="lname">Price:</label>
        <input type="text"  class="form-control" id="lname" name="Price" value="<?= $this->proData[0]['Price']?>">
        <label for="lname">Image:</label>
        <input type="file"  class="form-control" id="lname" name="Image" value="<?= $this->proData[0]['Image']?>">
        <input type="submit" name="submitEdit" class="btn btn-warning mt-3 d-flex m-auto" value="Create">
        </form>
      </div>
    </div>
  </div>
</section



<?php require_once(VIEWS_PATH.'inc/footer.php') ?>
