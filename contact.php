<?php
    $pageTitle = "Контакты | Интернет-магазин OFFICESHOP";
?>

    <!--ФОРМА ВХОДА-->
    <?php include("./templates/_avt.php"); ?>
    <!--ОБРАТНЫЙ ЗВОНОК-->
    <?php include("./templates/_call.php"); ?>
    <!--КОРЗИНА-->
    <?php include("./templates/_cart.php"); ?>
    <!--HEADER-->
    <?php include("./templates/_header.php"); ?>

    <!--SECTION КОНТАКТЫ-->
    <section class="contact__section">
        <div class="container">
            <div class="hleb">
                <a href="./index.php" class="link">Главная</a>
                > Контакты
            </div>
            <div class="heading">
                Контакты
            </div>
            <div class="contact__section-block">
                <div class="contact__section__block-text">
                    Адрес: г. Тюмень<br> 
                    Телефон: +7 (902) 628-31-14 <br> 
                    E-mail: officeshop@gmail.ru <br> 
                    График работы: Пн-Сб с 9:00 до 17:00 
                </div>
            </div>
        </div>
    </section>

    <!--FOOTER-->
    <?php include("./templates/_footer.php"); ?>
    <script src="./js/index.js"></script>

</body>
</html>