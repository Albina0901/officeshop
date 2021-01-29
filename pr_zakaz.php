<?php
 session_start();
 require('./config.php');
    $pageTitle = "Оформление заказа | Интернет-магазин OFFICESHOP";
?>
    <!-- HEAD СТРАНИЦЫ -->
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--ПОДКЛЮЧЕНИЕ AWESOME-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
        <!--ПОДКЛЮЧЕНИЕ GOODLE FONTS-->
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap&subset=cyrillic" rel="stylesheet">
        <!--ПОДКЛЮЧЕНИЕ CSS-->
        <link rel="stylesheet" href="./css/style.css">
        <link rel="shortcut icon" type="image/x-icon" href="./img/icons.png">
        <title><?php echo("$pageTitle"); ?></title>
    </head>

    <body>
        
        <!--ФОРМА ВХОДА-->
        <?php include("./templates/_avt.php"); ?>
        <!--ОБРАТНЫЙ ЗВОНОК-->
        <?php include("./templates/_call.php"); ?>
        <!--КОРЗИНА-->
        <?php include("./templates/_cart.php"); ?>
        
        <!--HEADER-->
        <?php include("./templates/_header.php"); ?>
        <!--КОНЕЦ HEADER-->

        <!--SECTION ПОДТВЕРЖДЕНИЕ ЗАКАЗА-->
        <section class="oforml__section">
            <div class="oforml__section-block">
                <div class="oforml__section__block-img">
                    <img src="./img/gal.png" alt="">
                </div>
                <div class="oforml__section__block-head">
                    Ваш заказ оформлен!
                </div>
                <div class="oforml__section__block-podtv">
                Спасибо, <?php echo $_SESSION['user_email']; ?>! Ваш заказ <span class="number__order">014</span> принят!
                </div>
                <div class="oforml__section__block-text">
                    В ближайшее время мы с вами свяжемся для уточнения деталей заказа и доставки.
                </div>
                <a href="./index.php" class="btn">
                    Перейти на главную
                </a>
            </div>
        </section>
        <!--КОНЕЦ SECTION-->     

        <!--FOOTER-->
        <?php include("./templates/_footer.php"); ?>
        <!--КОНЕЦ FOOTER-->

        <script src="./js/index.js"></script>
        
    </body>
</html>