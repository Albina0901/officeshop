<?php
    $pageTitle = "Восстановление пароля | Интернет-магазин OFFICESHOP";
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
        <!--КОНЕЦ SECTION-->     

        <!--FOOTER-->
        <?php include("./templates/_footer.php"); ?>
        <!--КОНЕЦ FOOTER-->

        <script src="./js/index.js"></script>
        
    </body>
</html>