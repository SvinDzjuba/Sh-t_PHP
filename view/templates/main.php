<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/default.css">
    <link rel="stylesheet" href="public/css/header.css">
    <!-- <script src="public/js/app.js"></script> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
    <title>Estates24/7</title>
    
    <script src="public/js/jquery.min.js"></script>

    <script src="public/lib/slider/slider.js" ></script>
    <link rel="stylesheet" href="public/lib/slider/slider.css">
    <script src="public/lib/lightbox/lightbox.js"></script>
    <link rel="stylesheet" href="public/lib/lightbox/lightbox.css">

    <script src="public/js/filter.js"></script>
    <script src="public/js/app.js" defer></script>
    <script src="public/js/modal.js" defer></script>
</head>
<body id = "body">
    <header>

        <div class="logo">
            <a href="main"><img src="images/logo.png" alt=""></a>
        </div>

        <div class="buttonContainer">
            <div class="linksContainer">
                <a href="macklers">Маклеры</a>
            </div>
            <div class="favouritesContainer">
                <a href="favourites"><img src="images/pngimg.com - like_PNG61.png" alt=""></a>
            </div>
            <div>
                <a href="addAdv">Добавить объявление</a>
            </div>
            <?php
                if (isset($_SESSION['status'])) {
                }else{
                    echo '
                    <div class="loginContainer">
                        <a class="login">Войти</a>
                    ';
                }
            ?>
        </div>

    </header>
    <main>
        <?php
            if (isset($content)) {
                echo $content;
            }
        ?>
    </main>
</body>
</html>