<div onclick="show__call('visible')" id="gray__call"></div>
<div id="form__call">
    <div class="form__head">
        <h2 class="form__head-text">Обратный звонок</h2>
        <i onclick="show__call('hidden')" class="close fas fa-times"></i>
    </div>
    <form class="form__wrapper" action="./obratn_zvonok.php" method="POST">
        <p class="form__wrapper-parag">Имя<span class="star">*</span></p>
        <input type="text" name="name" class="form__input1" required>
        <p class="form__wrapper-parag">Телефон<span class="star">*</span></p>
        <input type="tel" name="phone" class="form__input1" required>
        <div class="form__wrapper__call-btn">
            <input class="btn" type="submit" value="Отправить">
        </div>
    </form>
</div>
