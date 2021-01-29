<?php
    $pageTitle = "Оплата и доставка | Интернет-магазин OFFICESHOP";
?>

    <!--ФОРМА ВХОДА-->
    <?php include("./templates/_avt.php"); ?>
    <!--ОБРАТНЫЙ ЗВОНОК-->
    <?php include("./templates/_call.php"); ?>
    <!--КОРЗИНА-->
    <?php include("./templates/_cart.php"); ?>
    <!--HEADER-->
    <?php include("./templates/_header.php"); ?>

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

    <!--FOOTER-->
    <?php include("./templates/_footer.php"); ?>
    <script src="./js/index.js"></script>

</body>
</html>