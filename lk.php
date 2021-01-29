<?php
session_start();

if($_SESSION['user'] == 1 )
                {
    $pageTitle = "Личный кабинет | Интернет-магазин OFFICESHOP";
    require('config.php');
    $lk_email = $_SESSION['user_email'];
    $info_name = $_POST['info_name'];
    $info_surname = $_POST['info_surname'];
    $info_patronymic = $_POST['info_patronymic'];
    $info_telephone = $_POST['info_telephone'];
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

    <!--SECTION ЛИЧНОГО КАБИНЕТА-->
    <section id="lk" class="lk__section">
        <div class="container">
            <div class="hleb">
                <a href="./index.php" class="link">Главная</a>
                    > Личный кабинет
            </div>
            <div class="lk__section-head">
                <div class="heading">
                    Личный кабинет
                </div>
                <a href="session_stop.php" class="lk__close">
                    Выйти
                </a>
            </div>
            <div class="lk__section-block">
                <div class="lk__section__block-link">
                    Персональные данные
                </div>
                <!-- <div class="lk__section__block-link">
                    Мои заказы
                </div>
                <div class="lk__section__block-link">
                    Обратная связь
                </div> -->
            </div>
            <div class="lk__line"></div>
              
            <div class="dannie">
            <?php
            $sql = "SELECT * FROM Users WHERE `email` = '$lk_email'";
            $result = $db->query($sql);
            $users = $result->fetchAll(PDO::FETCH_ASSOC);
            foreach ($users as $user) {
                if(isset($_POST['lk_submit'])) {
                    $sql=("UPDATE Users SET `name`='$info_name',`surname`='$info_surname',
                    `patronymic`='$info_patronymic',`telephone`='$info_telephone',`adress`='$adress'  WHERE `email` = '$lk_email'");
                    $stmt=$db->query($sql);
                }
            ?>
            
                        <form class="form__reg-avt" method="POST">
                            <div class="form__reg-avt-block">
                                <div class="form__reg-avt-block1">
                                    <p class="form__wrapper-parag">Имя<span class="star">*</span></p>
                                    <input type="text" name="info_name" class="form__input3" value="<?php echo($user["name"]); ?>">
                                </div>
                                <div class="form__reg-avt-block1">
                                    <p class="form__wrapper-parag">Фамилия<span class="star">*</span></p>
                                    <input type="text" name="info_surname" class="form__input3" value="<?php echo($user["surname"]); ?>">
                                </div>
                            </div>
                            <p class="form__wrapper-parag">Отчество</p>
                            <input type="text" name="info_patronymic" class="form__input2" value="<?php echo($user["patronymic"]); ?>">
                            <p class="form__wrapper-parag">Телефон<span class="star">*</span></p>
                            <input type="tel" name="info_telephone" class="form__input2" value="<?php echo($user["telephone"]); ?>">
                            <p class="form__wrapper-parag">E-mail<span class="star">*</span></p>
                            <input type="email" name="email" class="form__input2" value="<?php echo($user["email"]); ?>"  disabled>
                            <p class="form__wrapper-parag">Адрес</p>
                            <input type="text" name="adress" class="form__input2" value="<?php echo($user["adress"]); ?>">
                            <div class="reg__section-btn">
                                <button class="btn" name="lk_submit" type="lk_submit">Сохранить</button>
                            </div>
                        </form>
                        <?php
                    }
                    
                    ?>


                    </div>
                    <div class="orders">
                        <div class="order">
                            <div id="f" class="number__order margin1">Номер заказа: 012</div>
                            <div class="date__order margin1">Дата заказа: 12.12.2012</div>
                            <div class="price__order margin1">Сумма заказа: 12 р.</div>
                            <div class="status__order margin1">Статус заказа: Выполнен</div>
                        </div>
                    </div> 


                    <div class="svaz">
                        <p>Мы с удовольствием выслушаем Ваши отзывы и предложения о магазине OFFICESHOP.
                        <br>Вы получите ответ на Ваш отзыв не позднее следующего дня.</p>
                        <form class="form__reg-avt" action="" method="">
                            <div class="form__reg-avt-block">
                                <div class="form__reg-avt-block1">
                                    <p class="form__wrapper-parag">Имя<span class="star">*</span></p>
                                    <input type="text" name="name" class="form__input3" required>
                                </div>
                                <div class="form__reg-avt-block1">
                                    <p class="form__wrapper-parag">E-mail<span class="star">*</span></p>
                                    <input type="email" name="email" class="form__input3" required>
                                </div>
                            </div>
                            <div class="form__reg-avt-block">
                                <div class="form__reg-avt-block1">
                                    <p class="form__wrapper-parag">Тема отзыва<span class="star">*</span></p>
                                        <select class="form__input2" name="" id="" required>
                                            <option value="">Выберите тему:</option>
                                            <option value="">Заказы и доставка</option>
                                            <option value="">Реклама</option>
                                            <option value="">Аккаунт пользователя</option>
                                            <option value="">Ошибки системы</option>
                                            <option value="">Интернет-магазин (интерфейс, система оплаты и т.д)</option>
                                            <option value="">Идеи и предложения</option>
                                            <option value="">Продукция</option>
                                            <option value="">Другая тема</option>
                                        </select>
                                </div>
                            </div>
                                <textarea type="name" name="adress" class="form__komment-kom form__input2" placeholder="Ваш отзыв" required></textarea>
                                <button class="form__komment-btn" type="submit">Отправить</button>

                        </form> 
                    </div>
        </div>
    </section>
    <!--FOOTER-->
    <?php include("./templates/_footer.php"); ?>

    <script src="./js/index.js"></script>
    <?php
} else {
    header('Location: index.php');
}
?>
</body>
</html>