<?php
session_start();
include('./config.php');

echo $_SESSION['message'];
unset($_SESSION['message']);


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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="./js/index.js"></script>
        <link rel="stylesheet" href="./css/style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/x-icon" href="./img/icons.png">
        <title><?php echo("$pageTitle"); ?></title>
        <meta name="enot" content="1131592387940HvH8p0DPFe6-Y3Pq4Os5sQniUo5NLk_E" />
    </head>
    
    <body>
<header class="header">
    <div class="container">
        <div class="header__top">
            <div class="map">
                <i class="fas fa-map-marker-alt"></i>
                    Тюмень
            </div>
            <ul class="header__top-menu">
                <li>
                    <a href="./about.php" class="header__top-menu__link">О компании</a>
                </li>
                <li>
                    <a href="./oplata_dostavka.php" class="header__top-menu__link">Оплата и доставка</a>
                </li>
                <li>
                    <a href="./vozvrat.php" class="header__top-menu__link">Возврат</a>
                </li>
                <li>
                    <a href="./contact.php" class="header__top-menu__link">Контакты</a>
                </li>
            </ul>
            <?php
            if($_SESSION['user'] == 1)
                {
            ?>
                <a href="./lk.php" class="user">
                <i class="fas fa-user"></i>
                <?php echo $_SESSION['user_email']?>
            </a>
        <?php
            } elseif($_SESSION['admin'] == 1) {
                ?>
                <a href="./admin.php" class="user">
                <i class="fas fa-user"></i>
                Админ панель
            </a>
        <?php
            }
            else {
                ?>
                <button onclick="show__avt('visible')" href="" class="user">
                <i class="fas fa-user"></i>
                Войти
            </button>

                
            <?php
            }
        ?>
            
        </div>
    </div>
    <div class="header__line"></div>
    <div class="container">
        <div class="header__bottom">
            <a href="./index.php" class="header__logo">
                <img src="./img/logo.png" class="logo" alt="OFFICESHOP">
            </a>
            <div class="header__phone">
                <div class="header__phone-top">
                    +7 (902) 628-31-14
                </div>
                <button href="" onclick="show__call('visible')" class="header__phone-bottom">
                    <i class="fas fa-phone-alt"></i>
                    Обратный звонок
                </button>
            </div>
        </div>
    </div>
    <nav class="nav">
        <div class="container">
            <div class="nav__wrapper">
                <div class="nav__catalog">
                    <div class="nav__catalog-text">
                        <img src="./img/catalog.png" class="nav__catalog-img" alt="">
                            Каталог товаров
                        <i class="fas fa-chevron-down arrow"></i>
                    </div>
                    <div class="catalog__wrapper">
                        <ul class="catalog__wrapper-menu">
                            <li>
                                <a class="catalog__wrapper-menu__link" href="./cat.php">
                                    <img class="catalog__wrapper-img" src="./img/4.1.png" alt="">
                                    Бумажные изделия
                                </a>
                            </li>
                            <li>
                                <a class="catalog__wrapper-menu__link" href="">
                                    <img class="catalog__wrapper-img" src="./img/4.2.png" alt="">
                                    Канцелярия
                                </a>
                            </li>
                            <li>
                                <a class="catalog__wrapper-menu__link" href="">
                                    <img class="catalog__wrapper-img" src="./img/4.3.png" alt="">
                                    Техника
                                </a>
                            </li>
                            <li>
                                <a class="catalog__wrapper-menu__link" href="">
                                    <img class="catalog__wrapper-img" src="./img/4.4.png" alt="">
                                    Мебель
                                </a>
                            </li>
                            <li>
                                <a class="catalog__wrapper-menu__link" href="">
                                    <img class="catalog__wrapper-img" src="./img/4.5.png" alt="">
                                    Конференции
                                </a>
                            </li>
                            <li>
                                <a class="catalog__wrapper-menu__link" href="">
                                    <img class="catalog__wrapper-img" src="./img/4.6.png" alt="">
                                    Демооборудование
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <form action="./cat.php?q=" class="search" method=GET>
                    <input name="q" type="text" class="search__text" placeholder="Поиск товаров" required>
                    <button type="submit" class="search__btn">
                        <i class="fas fa-search"></i>
                    </button>
                </form>
                <button onclick="show__cart('visible')" class="nav__cart">
                    <img src="./img/cart.png" alt="CART">
                    <div class="nav__cart-price">
                    <?php echo number_format($total, 2); ?> ₽
                    </div>
                </button>
            </div>
        </div>
    </nav>
</header>

