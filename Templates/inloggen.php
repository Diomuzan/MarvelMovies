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
        <form method="post">
            <div class="mb-3">
                <label for="email" class="form-label">Email/Gebruikersnaam</label>
                <input type="text" class="form-control" id="email" name="email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Wachtwoord</label>
                <input type="password" class="form-control" name="password" id="password">
            </div>
            <button type="submit" name="login" class="btn btn-primary">Login</button>

        </form>
    </div>

    <hr>
    <?php
    global $message;
    echo $message;
    include_once('defaults/footer.php');

    ?>
</div>

</body>
</html>
