<?php
    ini_set('display_errors', '1');
    require './header.php';
    require './newsbox.php';
    require './footer.php';
    require './main.php';
    require_once './IDview.php';
    require '../controllers/newsID.php';
    require_once '../models/news.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../static/css/index.css">
    <link rel="stylesheet" href="../../static/css/header.css">
    <link rel="stylesheet" href="../../static/css/footer.css">
    <title>Новости</title>
</head>

<body>
    <div class="container">
        <?php
            $header = new Header;
            $header->show();
        ?>

        <div class="main">
            <?php
                $main = new Main;
                $main->show();
            ?>
        </div>
        <div class="footer">
            <?php
                $footer = new Footer;
                $footer->show();
            ?>
        </div>
    </div>
</body>
</html>