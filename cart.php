<?php
    session_start();
    require('./functions/config.php');
    $pageTitle = "Оформление заказа | Интернет-магазин OFFICESHOP";
    $cart_email = $_SESSION['user_email'];
    $cart_dost = $_POST['cart_dost'];
    $id_user = $user["id_user"];
    $paymentType = $_POST['paymentType'];
    $adress = $_POST['adress'];
?>

    <!--ФОРМА ВХОДА-->
    <?php include("./templates/_avt.php"); ?>
    <!--ОБРАТНЫЙ ЗВОНОК-->
    <?php include("./templates/_call.php"); ?>
    <!--КОРЗИНА-->
    <?php include("./templates/_cart.php"); ?>
    <!--HEADER-->
    <?php include("./templates/_header.php"); ?>

    <!--SECTION КОРЗИНА ТОВАРОВ-->
    <section class="cart__section">
        <div class="container">
            <div class="hleb">
                <a href="./index.php" class="link">Главная</a>
                    > Оформление заказа
            </div>
            <div class="heading">
                Оформление заказа
            </div>
            <?php
            $sql = "SELECT * FROM Users WHERE `email` = '$cart_email'";
            $result = $db->query($sql);
            $users = $result->fetchAll(PDO::FETCH_ASSOC);
            foreach ($users as $user) {
                // if(isset($_POST['submit'])) {
                //     $sql=("INSERT INTO Orders (`id_user`,`price`,`tip_dostavki`, `tip_oplati`, `adress`) VALUES ('$id_user','$total' '$cart_dost', '$paymentType', '$adress')");
                //     $stmt=$db->query($sql);
                // }
            ?>
            <form class="form__reg-avt" method="POST" action="https://money.yandex.ru/quickpay/confirm.xml">   
                <div class="form__reg-avt-block">
                    <div class="form__reg-avt-block1">
                        <p class="form__wrapper-parag">Имя<span class="star">*</span></p>
                        <input type="text" name="cart_name" value="<?php echo($user["name"]); ?>" class="form__input3" disabled>
                    </div>
                    <div class="form__reg-avt-block1">
                        <p class="form__wrapper-parag">Фамилия<span class="star">*</span></p>
                        <input type="text" name="cart_surname" class="form__input3" disabled value="<?php echo($user["surname"]); ?>">
                    </div>
                </div>
                <p class="form__wrapper-parag">Отчество</p>
                <input type="text" name="cart_patronymic" class="form__input2" value="<?php echo($user["patronymic"]); ?>" disabled>
                <p class="form__wrapper-parag">Телефон<span class="star">*</span></p>
                <input type="tel" name="cart_telephone" class="form__input2" value="<?php echo($user["telephone"]); ?>" disabled>
                <p class="form__wrapper-parag">E-mail<span class="star">*</span></p>
                <input type="name" name="cart_email" class="form__input2" value="<?php echo($user["email"]); ?>" disabled>
                <div class="form__reg-avt-block">
                    <div class="form__reg-avt-block1">
                        <p class="form__wrapper-parag">Способ доставки<span class="star">*</span></p>
                            <select class="form__input3" name="cart_dost" id="">
                                <option value="">Курьер</option>
                            </select>
                    </div>
                    <div class="form__reg-avt-block1">
                        <p class="form__wrapper-parag">Способ оплаты<span class="star">*</span></p>
                            <select class="form__input3" name="paymentType"">
                                <option value="">Наличные</option>
                                <option value="">Картой при получении</option>
                                <option value="PC">Яндекс.Деньгами</option>
                                <option value="AC">Банковской картой</option>
                            </select>
                    </div>
                </div>
                    <p class="form__wrapper-parag">Адрес доставки<span class="star">*</span></p>
                    <input type="name" name="adress" class="form__input2" placeholder="Например, Обдорская 1, 3 подъезд, 9 этаж, кв. 325" value="<?php echo($user["adress"]); ?>" required>
                <input type="hidden" name="receiver" value="410018743350125">   
                <input type="hidden" name="label" value="$id_order">    
                <input type="hidden" name="quickpay-form" value="shop">   
                <input type="hidden" name="targets" value="Оплата заказа <?php echo $_SESSION['user_email']; ?>">   
                <input type="hidden" name="sum" value="<?php echo number_format($total);?>">   
                <input type="hidden" name="successURL" value="https://www.officeshop72.ru/pr_zakaz.php">   
                    <div class="cart__itog">
                    <div class="cart__itog-price">
                        Итого: <?php echo number_format($total, 2); ?> ₽
                    </div>
                    <input class="btn" name="submit" type="submit" value="Оплатить">
                </div>
            </form>
            <?php
                    }

            ?>
            <div class="cart__line"></div>
            <div class="cart__itog-block">
                <div class="cart__itog__block-head">
                    Состав заказа
                </div>
                <div onclick="show__cart('visible')" class="cart__itog__block-red">
                    Редактировать
                </div>
            </div>
            <?php
            if(!empty($_SESSION['shopCart'])) {
                $total = 0;
                foreach($_SESSION['shopCart'] as $keys => $values) {
            ?>
            <div class="cart__itog-block">
                <div class="cartochka__name">
                    <?php echo($values['item_name']); ?>
                </div>
                <span class="uvel2"><?php echo($values['item_col']); ?> шт.</span>
                <div class="cartochka__price">
                <?php echo($values['item_price']); ?> ₽
                </div>
            </div>
            <?php
                    }
                }
            ?>
        </div>
    </section>
    <!--FOOTER-->
    <?php include("./templates/_footer.php"); ?>
    <script src="./js/index.js"></script>
</body>
</html>