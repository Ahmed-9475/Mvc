<?php require_once(VIEWS_PATH.'inc/header.php') ?>
<?php require_once(VIEWS_PATH.'inc/navbar.php') ?>


<!-- start default text -->
<section class="introduction">
    <div class="container">
        <div class="row">
            <div class="col-md-12 title">
                <h2>Learn Php Mvc </h2>
                <p>MVC was introduced by Dr. Trygve Reenskaug into Smalltalk-76 programming language when he visited the Xerox Palo Alto Research Center (PARC) in mid-1970</p>
            </div>

            <div class="col-md-12 title-action">
                <p>Hierarchical model-view-controller (HMVC)</p>
                <a class="btn btn-primary" href="<?= BURL."products/index"?>" role="button">show products</a>
                <a class="btn btn-primary" href="<?= BURL."products/add"?>" role="button">Add products</a>
            </div>
        </div>
    </div>
</section>
<?php require_once(VIEWS_PATH.'inc/footer.php') ?>
