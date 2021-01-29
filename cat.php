<?php
session_start();
    $pageTitle = "Бумажные изделия | Интернет-магазин OFFICESHOP";
    require("./config.php");
    include("sort.php");
    

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

    <!--SECTION КАТЕГОРИЯ-->
    <section class="cat__section">
        <div class="container">
            <div class="hleb">
                <a href="./index.php" class="link">Главная</a>
                >
                <a href="./index.php" class="link">Каталог товаров</a>
                    > Бумажные изделия
            </div>
            <div class="cat__section-block">  

                <!--КАТЕГОРИЯ-->
                <?php include("./templates/_cat.php"); ?>

                <div class="cat__section-block2">
                    <div class="cat__section__block2-head">
                        Бумажные изделия
                    </div>
                    <div class="cat__line"></div>
                    <div class="cat__section__block2-block">
                        <div class="cat__section__block2__block-sort">
                            <div class="cat__section__block2__block__sort-name">
                                Сортировка: 
                            </div>
                            <a href="cat.php?sort=price-desc" class="btn__sort">Цена по убыванию</a>
                            <a href="cat.php?sort=price-asc" class="btn__sort">Цена по возрастанию</a>
                            <a href="cat.php?sort=sales" class="btn__sort">Скидки</a>
                        </div>
                        <div class="cat__section__block2__block-per">
                            <span class="per1">1</span>
                            <span class="per1">2</span>
                            <i class=" arrow fas fa-chevron-right"></i>
                        </div>
                    </div>
                    <div id="nav__product" class="cat__section__block2-product">

                        <!--КАРТОЧКИ ТОВАРОВ В КАТЕГОРИИ-->
                        <?php
                            //Выводятся товары с сортировкой+поиск
                            $search = ($_GET['q']);
                            $id=$_GET['id'];
                            $sql = "SELECT * FROM Product INNER JOIN Podcategoria using(id_podcategoria) WHERE title 
                            LIKE '%$search%' ORDER BY $sorting";
                            $result = $db->query($sql);
                            $products = $result->fetchAll(PDO::FETCH_ASSOC);
                            foreach ($products as $product) {
                            include("./templates/_product.php");
                            } 
                            
                        ?>

                    </div>
                    <div class="cat__section__block2__block-per">
                        <span class="per1">1</span>
                        <span class="per1">2</span>
                        <i class=" arrow fas fa-chevron-right"></i>
                    </div>
                </div>
            </div> 
        </div>
    </section>
    <!--КОНЕЦ КАТЕГОРИИ-->

    <!--FOOTER-->
    <?php include("./templates/_footer.php"); ?>
    <!--КОНЕЦ FOOTER-->
    <script src="./js/index.js"></script>

</body>
</html>
