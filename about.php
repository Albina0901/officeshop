<?php
    $pageTitle = "О компании | Интернет-магазин OFFICESHOP";
?>
    <!--ФОРМА ВХОДА-->
    <?php include("./templates/_avt.php"); ?>
    <!--ОБРАТНЫЙ ЗВОНОК-->
    <?php include("./templates/_call.php"); ?>
    <!--КОРЗИНА-->
    <?php include("./templates/_cart.php"); ?>
    <!--HEADER-->
    <?php include("./templates/_header.php"); ?>

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

    <!--FOOTER-->
    <?php include("./templates/_footer.php"); ?>
    <script src="./js/index.js"></script>
</body>
</html>