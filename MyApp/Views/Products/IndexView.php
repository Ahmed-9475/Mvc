<?php

use MyApp\Controllers\ProductsController;

    require_once(VIEWS_PATH.'inc/header.php'); 
    require_once(VIEWS_PATH.'inc/navbar.php'); 

    new ProductsController();

?>


<!-- start default text -->

<div class="container">
    <div class="row">
        <div class="col-md-12 m-auto">

        <table class="table table-info ">

        <thead class="thead-dark">
            <tr>
            <th scope="col">Id</th>
            <th scope="col">Image</th>
            <th scope="col">Category</th>
            <th scope="col">Title</th>
            <th scope="col">Text</th>
            <th scope="col">Price</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
            </tr>
        </thead>
        <?php $i=1; ?>
        <?php foreach($this->proData as$key=> $products){  ?>            
        <tbody>
        <tr>
            <th scope="row"><?= $i;$i++ ?></th>
            <td><?= $products['Image']  ?></td>
            <td><?= $products['Category'] ?></td>
            <td><?= $products['Title'] ?></td>
            <td><?= $products['Text'] ?></td>
            <td><?= $products['Price'] ?></td>
            <td><a class="btn btn-primary" href="http://firstmvc.com/products/edit/<?php echo $products['Id']?>" role="button">Edit</a></td>
            <td><a class="btn btn-danger" href="http://firstmvc.com/products/delete/<?php echo $products['Id']?>" role="button">Delete</a></td>
        </tr>
        </tbody>
    <?php } ?>

</table>

    </div>
    </div>
</div>


<?php require_once(VIEWS_PATH.'inc/footer.php') ?>
