<?php
    $pageTitle = "О компании | Интернет-магазин OFFICESHOP";
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

    <!--SECTION О КОМПАНИИ-->
    <section class="about__section">
        <div class="container">
            <div class="hleb">
                <a href="./index.php" class="link">Главная</a>
                > О компании
            </div>
            <div class="heading">
                О компании
            </div>
            <div class="about__section-block">
                <div class="about__section__block-head">
                    Мы предлагаем комплексное обеспечение товарами, которое включает в себя:
                </div>
                <div class="about__section__block-text">
                    <ul>
                        <li>- Бумага отечественных и зарубежных производителей.</li>
                        <li>- Товары для офиса, канцелярские товары.</li>
                        <li>- Офисная техника и мебель.</li>
                    </ul> 
                </div>
                <div class="about__section__block-head">
                    Наше преимущество:
                </div>
                <div class="about__section__block-text">
                    <ul>
                        <li>- Цены на предлагаемую нами продукцию одни из самых низких в регионе.</li>
                        <li>- Любая форма оплаты.</li>
                        <li>- Бесплатная доставка.</li>
                        <li>- Быстрая доставка.</li>
                        <li>- Скидки.</li>
                    </ul> 
                </div>
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