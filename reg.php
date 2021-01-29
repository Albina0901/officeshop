<?php
    if (session_id() == '')
    {
        session_start();
    }
    require('config.php');
    $pageTitle = "Регистрация | Интернет-магазин OFFICESHOP";
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

    <!--SECTION РЕГИСТРАЦИЯ-->
    <section class="reg__section">
        <div class="container">
            <div class="hleb">
                <a href="./index.php" class="link">Главная</a>
                > Регистрация
            </div> 
            <div class="heading">
                Создать учетную запись
            </div>
            <div class="msg_errors">
                <?php 
                    echo $_SESSION['message'];
                    unset($_SESSION['message']);
                    
                ?>
            </div>
            <form action="_reg.php" class="form__reg-avt" method="post">
                <div class="form__reg-avt-block">
                    <div class="form__reg-avt-block1">
                        <p class="form__wrapper-parag">Имя<span class="star">*</span></p>
                        <input type="text" name="name" class="form__input3" required>
                    </div>
                    <div class="form__reg-avt-block1">
                        <p class="form__wrapper-parag">Фамилия<span class="star">*</span></p>
                        <input type="text" name="surname" class="form__input3" required>
                    </div>
                </div>
                <p class="form__wrapper-parag">Отчество</p>
                <input type="text" name="patronymic" class="form__input2">
                <p class="form__wrapper-parag">Телефон<span class="star">*</span></p>
                <input type="text" name="telephone" class="form__input2" required>
                <p class="form__wrapper-parag">E-mail<span class="star">*</span></p>
                <input type="email" name="email" class="form__input2" required>
                <div class="form__reg-avt-block">
                    <div class="form__reg-avt-block1">
                        <p class="form__wrapper-parag">Пароль<span class="star">*</span></p>
                        <input type="password" name="password" class="form__input3" required>
                    </div>
                    <div class="form__reg-avt-block1">
                        <p class="form__wrapper-parag">Подтверждение пароля<span class="star">*</span></p>
                        <input type="password" name="password_povt" class="form__input3" required>
                    </div>
                </div>
                <div class="reg__section-btn">
                    <button class="btn" type="submit">Регистрация</button>
                </div>
            </form>
            
        </div>
    </section>
    <!--КОНЕЦ SECTION-->

    <!--FOOTER-->
    <?php include("./templates/_footer.php"); ?>
    <!--КОНЕЦ FOOTER-->

    <script src="./js/index.js"></script>

</body>
</html>