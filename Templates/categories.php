<!DOCTYPE html>
<html>
<?php
include_once('defaults/head.php');
?>

<body>

<div class="container">
    <?php
    include_once('defaults/header.php');
    include_once('defaults/menu.php');
    include_once('defaults/pictures.php');
    ?>


    <div class="row gy-3 ">
        <?php global $categories ?>
        <?php foreach ($categories as $category): ?>
            <div class="col-12 col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <h2 class="card-title mb-3"><?= $category->name ?></h2>
                        <div class="card-text mb-3"><?= $category->description ?></div>

                        <a class="btn btn-dark" href="/category/<?= $category->id ?>">
                            Laat de films zien.
                        </a>
                    </div>

                </div>
            </div>
        <?php endforeach; ?>

    </div>

    <hr>
    <?php
    include_once('defaults/footer.php');

    ?>
</div>

</body>
</html>

