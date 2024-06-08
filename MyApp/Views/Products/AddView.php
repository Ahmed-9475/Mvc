
<?php require_once(VIEWS_PATH.'inc/header.php') ?>
<?php require_once(VIEWS_PATH.'inc/navbar.php') ?>



<div class="container">
  <div class="row">
    <div class="col-md-8 mx-auto">
      <?php if(isset($success)){?>
        <div class='alert alert-success text-center'><?= $success ?> </div>
      <?php }if(isset($Error)){?>
        <div class='alert alert-danger text-center'><?= $Error ?> </div>
        <?php }?>
    </div>
  </div>
</div>

<section>
  <div class="container">
    <div class="row">
      <div class="col-md-8 mt-3 d-flex m-auto ">
        <form action="" class="form-control" method="post" enctype="multipart/form-data">
        <label for="fname">Title:</label>
        <input type="text"  class="form-control" id="fname" name="Title">
        <label for="fname">Category:</label>
        <input type="text"  class="form-control" id="fname" name="Category">
        <label for="lname">Text:</label>
        <textarea type="text"  class="form-control" id="lname" rows="3" name="Text"> </textarea>
        <label for="lname">Price:</label>
        <input type="text"  class="form-control" id="lname" name="Price">
        <label for="lname">Image:</label>
        <input type="file"  class="form-control" id="lname" name="Image">
        <input type="submit" name="submit" class="btn btn-warning mt-3 d-flex m-auto" value="Create">
        </form>
      </div>
    </div>
  </div>
</section



<?php require_once(VIEWS_PATH.'inc/footer.php') ?>
