    <?php
        $pageTitle = "Главная страница | Интернет-магазин OFFICESHOP";
    ?>
   <?php include("./templates/_avt.php"); ?>
    <!--ОБРАТНЫЙ ЗВОНОК-->
    <?php include("./templates/_call.php"); ?>
    <!--КОРЗИНА-->
    <?php include("./templates/_cart.php"); ?>

    <!--HEADER-->
    <?php include("./templates/_header.php"); ?>
    <!--КОНЕЦ HEADER-->

    <!--SECTION_1-->

    <section class="index__section1">
        <img src="./img/1_1.jpg" alt="img" class="index__section1__img">
        <div class="index__section1__text">
            <h1 class="index__section1__head">
                officeshop
            </h1>
            <p class="index__section1__parag">
                Офисная мебель, канцелярия и<br> 
                другие товары для вашего офиса
            </p>
            <a href="./cat.php" class="btn">
                Перейти к покупкам
            </a>
        </div>
        <div class="index__section1__img">
            <img src="./img/1_2.jpg" alt="IMG">
            <img src="./img/1_3.jpg" alt="IMG">
        </div>
    </section>

    <!--КОНЕЦ SECTION_1-->

    <!--SECTION_2-->

    <section class="index__section2">
        <div class="container">
            <div class="head">
                Товары по разделам
            </div>
            <div class="index__section2-wrapper">
                <a href="./cat.php" class="index__section2__wrapper-img">
                    <div class="index__section2__wrapper-block">
                        <div class="index__section2__wrapper__block-img">
                            Бумажные изделия
                        </div>
                    </div>
                </a>
                <a href="" class="index__section2__wrapper-img">
                    <div class="index__section2__wrapper-block ">
                        <div class="index__section2__wrapper__block-img">
                            Канцелярия
                        </div>
                    </div>
                </a>
                <a href="" class="index__section2__wrapper-img">
                    <div class="index__section2__wrapper-block ">
                        <div class="index__section2__wrapper__block-img">
                            Техника
                        </div>
                    </div>
                </a>
                <a href="" class="index__section2__wrapper-img">
                    <div class="index__section2__wrapper-block ">
                        <div class="index__section2__wrapper__block-img">
                            Мебель
                        </div>
                    </div>
                </a>
                <a href="" class="index__section2__wrapper-img">
                    <div class="index__section2__wrapper-block ">
                        <div class="index__section2__wrapper__block-img">
                            Конференции
                        </div>
                    </div>
                </a>
                <a href="" class="index__section2__wrapper-img">
                    <div class="index__section2__wrapper-block ">
                        <div class="index__section2__wrapper__block-img">
                            Демооборудование
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!--КОНЕЦ SECTION_2-->

    <!--SECTION_3-->

    <section class="index__section3">
        <div class="container">
            <div class="head">
                Почему выбирают нас
            </div>
            <div class="index__section3-wrapper">
                <div class="index__section3__wrapper-block">
                    <div class="index__section3__wrapper__block-img">
                        <img src="./img/3_1.png" alt="">
                    </div>
                    <p class="index__section3__wrapper__block-text index__section3__wrapper-span">
                        Бесплатная доставка
                    </p>
                </div>
                <div class="index__section3__wrapper-block">
                    <div class="index__section3__wrapper__block-img">
                        <img src="./img/3_2.png" alt="">
                    </div>
                    <p class="index__section3__wrapper__block-text">
                        Быстрая доставка
                    </p>
                </div>
                <div class="index__section3__wrapper-block">
                    <div class="index__section3__wrapper__block-img">
                        <img src="./img/3_3.png" alt="">
                    </div>
                    <p class="index__section3__wrapper__block-text">
                        Скидки
                    </p>
                </div>
                <div class="index__section3__wrapper-block">
                    <div class="index__section3__wrapper__block-img">
                        <img src="./img/3_4.png" alt="">
                    </div>
                    <p class="index__section3__wrapper__block-text">
                        Низкие цены
                    </p>
                </div>
            </div>
            <a href="./cat.php" class="btn index__section3__wrapper-btn">
                Перейти к покупкам
            </a>
        </div>
    </section>

    <!--КОНЕЦ SECTION_3-->

    <!--FOOTER-->
    <?php include("./templates/_footer.php"); ?>

    

</body>
</html>