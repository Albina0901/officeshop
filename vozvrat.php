<?php
    $pageTitle = "Возврат | Интернет-магазин OFFICESHOP";
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

    <!--SECTION ВОЗВРАТ-->
    <section class="vozvrat__section">
        <div class="container">
            <div class="hleb">
                <a href="./index.php" class="link">Главная</a>
                > Возврат
            </div>
            <div class="heading">
                Возврат
            </div>
            <div class="vozvrat__section-block">
                <div class="vozvrat__section__block-head">
                    Обмен и возврат товара
                </div>
                <div class="vozvrat__section__block-text">
                    Вы можете обменять товар надлежащего качества, если он не подошёл по форме, 
                    габаритам, фасону, расцветке, размеру или комплектации, на аналогичный товар. 
                    Обмен товара производится в течение 14 дней, не считая дня покупки, при условии, 
                    что товар не был в употреблении, сохранены его товарный вид, потребительские свойства, 
                    пломбы, фабричные ярлыки, а также имеется товарный чек или кассовый чек, либо иной документ 
                    подтверждающий оплату указанного товара. Отсутствие у Вас кассового чека либо иного подтверждающего 
                    оплату документа не лишает Вас возможности ссылаться на свидетельские показания.
                </div>
                <div class="vozvrat__section__block-head">
                    Возврат денег
                </div>
                <div class="vozvrat__section__block-text">
                    Сумма, уплаченная за товар, возвращается таким же способом, каким она была внесена. 
                    Для возврата денежных средств, необходимо предъявить: кассовый чек и паспорт.
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