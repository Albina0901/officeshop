<?php
    $pageTitle = "Карта сайта | Интернет-магазин OFFICESHOP";
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

    <!--SECTION КАРТА САЙТА-->
    <section class="map__section">
        <div class="container">
            <div class="hleb">
                <a href="./index.php" class="link">Главная</a>
                > Карта сайта
            </div>
            <div class="heading">
                Карта сайта
            </div>
            <div class="map__section-block">
                <div class="map__section__block-head">
                   Бумажные изделия:
                </div>
                <ul class="map__section__block-menu">
                    <li>
                        <a class="map__section__block__menu-link" href="">- Бумага для принтеров</a>
                    </li>
                    <li>
                        <a class="map__section__block__menu-link" href="">- Бумага для чертежных работ</a>
                    </li>
                    <li>
                        <a class="map__section__block__menu-link" href="">- Картон</a>
                    </li>
                    <li>
                        <a class="map__section__block__menu-link" href="">- Рулонная бумага</a>
                    </li>
                    <li>
                        <a class="map__section__block__menu-link" href="">- Бумажные изделия</a>
                    </li>
                </ul>
                <div class="map__section__block-head">
                    Канцелярия:
                </div>
                <ul class="map__section__block-menu">
                    <li>
                        <a class="map__section__block__menu-link" href="">- Письменные принадлежности</a>
                    </li>
                    <li>
                        <a class="map__section__block__menu-link" href="">- Клеящие средства</a>
                    </li>
                    <li>
                        <a class="map__section__block__menu-link" href="">- Корректирующие средства</a>
                    </li>
                    <li>
                        <a class="map__section__block__menu-link" href="">- Конторское оборудование</a>
                    </li>
                </ul>
                <div class="map__section__block-head">
                    Техника:
                </div>
                <ul class="map__section__block-menu">
                    <li>
                        <a class="map__section__block__menu-link" href="">- Принтеры и сканеры</a>
                    </li>
                    <li>
                        <a class="map__section__block__menu-link" href="">- Картриджи</a>
                    </li>
                    <li>
                        <a class="map__section__block__menu-link" href="">- Офисная телефония</a>
                    </li>
                    <li>
                        <a class="map__section__block__menu-link" href="">- Калькуляторы</a>
                    </li>
                </ul>
                <div class="map__section__block-head">
                    Мебель:
                </div>
                <ul class="map__section__block-menu">
                    <li>
                        <a class="map__section__block__menu-link" href="">- Кресла и стулья</a>
                    </li>
                    <li>
                        <a class="map__section__block__menu-link" href="">- Шкафы</a>
                    </li>
                    <li>
                        <a class="map__section__block__menu-link" href="">- Сейфы</a>
                    </li>
                    <li>
                        <a class="map__section__block__menu-link" href="">- Столы</a>
                    </li>
                    <li>
                        <a class="map__section__block__menu-link" href="">- Стеллажи</a>
                    </li>
                </ul>
                <div class="map__section__block-head">
                    Конференции:
                </div>
                <ul class="map__section__block-menu">
                    <li>
                        <a class="map__section__block__menu-link" href="">- Папки</a>
                    </li>
                    <li>
                        <a class="map__section__block__menu-link" href="">- Бейджики</a>
                    </li>
                </ul>
                <div class="map__section__block-head">
                    Демооборудование:
                </div>
                <ul class="map__section__block-menu">
                    <li>
                        <a class="map__section__block__menu-link" href="">- Демонстрационные системы</a>
                    </li>
                    <li>
                        <a class="map__section__block__menu-link" href="">- Стойки и стенды</a>
                    </li>
                    <li>
                        <a class="map__section__block__menu-link" href="">- Доски для письма и информации</a>
                    </li>
                    <li>
                        <a class="map__section__block__menu-link" href="">- Держатели и подставки</a>
                    </li>
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