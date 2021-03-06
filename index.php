<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="dist/css/app.css">
        <script src="https://kit.fontawesome.com/6619c90159.js" crossorigin="anonymous"></script>
        <title>Php Dischi</title>
    </head>
    <body>

        <header>
            <div class="header-container clearfix">
                <div class="logo-container">
                    <a href="#">
                        <img src="img/logo.png" alt="logo">
                    </a>
                </div>
                <div class="header-title">
                    <h1>Dischify</h1>
                </div>
            </div>
        </header>

        <main>
            <div class="container clearfix">
                <div class="card-container">
                    <?php
                        include 'data.php';
                    ?>

                    <?php foreach ($responses as $key => $response) { ?>
                        <div class="card">
                        <img src="<?php echo $response['poster']; ?>" alt="poster">
                        <h4><?php echo $response['title'];?></h4>
                        <span><?php echo $response['author'];?></span>
                        <span><?php echo $response['year'];?></span>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </main>

        <footer>
            <div class="footer-container clearfix">
                <div class="barra-azioni">
                    <i class="fas fa-backward"></i>
                    <i class="fas fa-play"></i>
                    <i class="fas fa-stop"></i>
                    <i class="fas fa-forward"></i>
                </div>
            </div>
        </footer>

    </body>
</html>
