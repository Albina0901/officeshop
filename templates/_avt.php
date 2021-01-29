<!--ПОДКЛЮЧЕНИЕ ВХОДА-->
<?php 
 session_start();

   
    include("./config.php");
?> 
<div onclick="show__avt('visible')" id="gray__avt"></div>
<div id="form__avt">
    <div class="form__head">
        <h2 class="form__head-text">Личный кабинет</h2>
        <i onclick="show__avt('hidden')" class="close fas fa-times"></i>
    </div>
    
    <form  action="./avt.php" class="form__wrapper" method="POST">
        <p class="form__wrapper-parag">E-mail<span class="star">*</span></p>
            <input type="email" name="email" class="form__input1" required>
        <p class="form__wrapper-parag">Пароль<span class="star">*</span></p>
            <input type="password" name="password" class="form__input1" required>
        <!-- <div class="form__wrapper-block">
            <a href="./vost_password.php" class="form__wrapper__block-password">Забыли пароль?</a>
        </div> -->
        <div class="form__wrapper__block-btn">
            <button class="btn" name="submit" type="submit">Вход</button>
            <a href="./reg.php" class="form__avt-btn">Регистрация</a>
        </div>
    </form>
</div>