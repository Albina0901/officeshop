<?php
    $pageTitle = "Возврат | Интернет-магазин OFFICESHOP";
?>
    <!--ФОРМА ВХОДА-->
    <?php include("./templates/_avt.php"); ?>
    <!--ОБРАТНЫЙ ЗВОНОК-->
    <?php include("./templates/_call.php"); ?>
    <!--КОРЗИНА-->
    <?php include("./templates/_cart.php"); ?>
    <!--HEADER-->
    <?php include("./templates/_header.php"); ?>

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

    <!--FOOTER-->
    <?php include("./templates/_footer.php"); ?>
    <script src="./js/index.js"></script>
</body>
</html>