    <?php
    session_start();
        $pageTitle = "Название товара | Интернет-магазин OFFICESHOP";
        require("./config.php");
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
    <!--ЗАКАЗ В 1 КЛИК-->
    <?php include("./templates/_click.php"); ?>

    <!--HEADER-->
    <?php include("./templates/_header.php"); ?>
    <!--КОНЕЦ HEADER-->

    <!--SECTION КАРТОЧКИ-->
    <section class="car__section">
        <div class="container">
            <div class="hleb">
                <a href="./index.php" class="link">Главная</a>
                >
                <a href="./index.php" class="link">Каталог товаров</a>
                >
                <a href="./cart.php" class="link">Бумажные изделия</a>
                > Бумага для принтера
            </div>

            <?php
                $id=$_GET['id'];
                $sql = "SELECT * FROM `Product` WHERE `id_product` = '$id'";
                $result = $db->query($sql);
                $products = $result->fetchAll(PDO::FETCH_ASSOC);
                foreach ($products as $product) {
                    include("./templates/_cartochka.php");
                }
            ?>
            <!--ОТЗЫВЫ-->
        <div class="car__section-otz">
             <?php
             $id=$_GET['id'];
                $sql_com = "SELECT * FROM `Comments` WHERE `id_product` = '$id'";
                $result_com = $db->query($sql_com);
                $products_com = $result_com->fetchAll(PDO::FETCH_ASSOC);
                foreach ($products_com as $product_com) {
                    include("./comments.php");
                }
            ?>
            <form class="form__kommen" action="com.php" method="post">
                <div class="form__reg-avt-block">
                    <div class="form__reg-avt-block1">
                        <input type="text" name="added" class="form__input3" placeholder="Имя" required>
                    </div>
                    <div class="form__reg-avt-block1">
                        <input type="text" name="ozenka" class="form__input3" placeholder="Оценка от 0 - 5" required>
                    </div>
                </div>
                <textarea required type="text" name="text" class="form__komment-kom form__input2" placeholder="Комментарий"></textarea>
                <button  class="btn form__komment-btn" type="submit" ">Отправить</button>
            </form>
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