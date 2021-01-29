<?php
 session_start();
 require('./config.php');
    $pageTitle = "Оформление заказа | Интернет-магазин OFFICESHOP";
?>

    <!--ФОРМА ВХОДА-->
    <?php include("./templates/_avt.php"); ?>
    <!--ОБРАТНЫЙ ЗВОНОК-->
    <?php include("./templates/_call.php"); ?>
    <!--КОРЗИНА-->
    <?php include("./templates/_cart.php"); ?>
    <!--HEADER-->
    <?php include("./templates/_header.php"); ?>

    <!--SECTION ПОДТВЕРЖДЕНИЕ ЗАКАЗА-->
    <section class="oforml__section">
        <div class="oforml__section-block">
            <div class="oforml__section__block-img">
                <img src="./img/gal.png" alt="">
            </div>
            <div class="oforml__section__block-head">
                Ваш заказ оформлен!
            </div>
            <div class="oforml__section__block-podtv">
            Спасибо, <?php echo $_SESSION['user_email']; ?>! Ваш заказ <span class="number__order">014</span> принят!
            </div>
            <div class="oforml__section__block-text">
                В ближайшее время мы с вами свяжемся для уточнения деталей заказа и доставки.
            </div>
            <a href="./index.php" class="btn">
                Перейти на главную
            </a>
        </div>
    </section>

    <!--FOOTER-->
    <?php include("./templates/_footer.php"); ?>
    <script src="./js/index.js"></script>  
</body>
</html>