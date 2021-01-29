<?php
    $pageTitle = "Восстановление пароля | Интернет-магазин OFFICESHOP";
?>
    <!--ФОРМА ВХОДА-->
    <?php include("./templates/_avt.php"); ?>
    <!--ОБРАТНЫЙ ЗВОНОК-->
    <?php include("./templates/_call.php"); ?>
    <!--КОРЗИНА-->
    <?php include("./templates/_cart.php"); ?>
    <!--HEADER-->
    <?php include("./templates/_header.php"); ?>

    <!--SECTION ВОССТАНОВЛЕНИЯ ПАРОЛЯ-->
    <section class="password__section">
        <div class="password__section-block">
            <div class="password__section__block-text">
                Если вы забыли пароль, введите E-Mail.<br>
                Новый пароль будет выслан Вам на электронную почту!
            </div>
            <form action="" class="voct__password">
                <input type="name" name="email" placeholder="Введите e-mail" class="form__input2">
            </form>
            <div class="password__section__block-btn">
                <button class="btn">
                    Выслать пароль
                </button>
                <a href="./reg.php" class="btn">
                    Регистрация
                </a>
            </div>
        </div>
    </section>
    <!--FOOTER-->
    <?php include("./templates/_footer.php"); ?>
    <script src="./js/index.js"></script>
        
</body>
</html>