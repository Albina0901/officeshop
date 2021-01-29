<?php
    $pageTitle = "Оплата и доставка | Интернет-магазин OFFICESHOP";
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

    <!--SECTION ОПЛАТА И ДОСТАВКА-->
    <section class="oplata__section">
        <div class="container">
            <div class="hleb">
                <a href="./index.php" class="link">Главная</a>
                > Оплата и доставка
            </div>
            <div class="heading">
                Оплата и доставка
            </div>
            Доставка осуществляется курьером. Доставка бесплатная!
            <div class="oplata__section-block">
                Оплата производится:
                <ul class="oplata__section__block-menu">
                    <li>- Банковской картой во время получения заказа.</li>
                    <li>- Наличными во время получения заказа.</li>
                    <li>- Банковской картой при оформлении заказа.</li>
                </ul>
            </div>
        </div>
    </section>
    <!--КОНЕЦ SECTION-->

    <!--FOOTER-->
    <?php include("./templates/_footer.php"); ?>
    <!--КОНЕЦ FOOTER-->

    <script src="./js/index.js"></script>

</body>
</html>