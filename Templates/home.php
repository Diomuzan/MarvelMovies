<!DOCTYPE html>
<html>
    <?php
    include_once('defaults/head.php');
    ?>
    <body>
        <div class="container">
            <?php
            include_once ('defaults/header.php');
            include_once ('defaults/menu.php');
            include_once ('defaults/pictures.php');
            ?>
            <?php if(!empty($message)): ?>
                <div class="alert alert-success" role="alert">
                    <?=$message?>
                </div>
            <?php endif;?>
            <h4>Marvel</h4>
            De Marvel Cinematic Universe (MCU) films zijn een serie Amerikaanse superheldenfilms geproduceerd door Marvel Studios. Deze films zijn gebaseerd op personages die voorkomen in publicaties van Marvel Comics.
            <br>
            De MCU is het gedeelde universum waarin alle films zich afspelen. De films zijn in productie sinds 2007.
            <hr>
            <?php
            include_once ('defaults/footer.php');
            ?>
        </div>
    </body>
</html>
