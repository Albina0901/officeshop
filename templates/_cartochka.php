<h3 class="product__name">
    <?php echo($product["title"]); ?>
</h3>
<form class="car__section-block1" method="POST">
    <img src="./img/<?php echo($product["img"]); ?>" alt="" class="car__section__block1-img">
    <div class="car__section-block2">
        <div class="cod__product">
            Код: <?php echo($product["id_product"]); ?>
        </div>
        <div class="car__section__block2-name"> 
            <?php echo($product["title"]); ?> 
        </div>
        <div id="price_cart" class="car__section__block2-price">
            <?php echo($product["price"]); ?> ₽
        </div>

        <!-- БЛОК ДЛЯ УВЕЛИЧЕНИЯ КОЛИЧЕСТВА ТОВАРА -->
        <div class="margin uvel">
        <input type="text" name="col" class="product__col" value="1">

            <!-- <span class="uvel1">-</span>
            <span id="uvel_cart" class="uvel2">1 шт.</span>
            <span class="uvel3">+</span> -->
        </div>

        <div class="car__section__block2-btn">
            <button onclick="show__click('visible')" class="cart__btn">
                Купить в 1 клик
            </button>
            <input type="hidden" name="hidden_title" value="<?php echo($product["title"]); ?>">
            <input type="hidden" name="hidden_price" value="<?php echo($product["price"]); ?>">
            <button name="addToCart" class="car__section__block2__btn-btn cart__btn">
                В корзину
            </button>
        </div>
    </div>   
    <div class="car__section-block3">
        <div class="car__section-block4">
            <div class="car__section-block3__link">
                <img class="car__section-block3-img" src="./img/3_1.png" alt="">Бесплатная доставка
            </div>
            <div class="car__section-block3__link">
                <img class="car__section-block3-img" src="./img/3_2.png" alt="">Быстрая доставка
            </div>
            <div class="car__section-block3__link">
                <img class="car__section-block3-img" src="./img/3_3.png" alt="">Скидки
            </div>
            <div class="car__section-block3__link">
                <img class="car__section-block3-img" src="./img/3_4.png" alt="">Низкие цены
            </div>
        </div>
    </div>
    </form>
    <div class="lk__section-block">
        <!-- <div class="lk__section__block-link">
            Описание
        </div>
        <div class="lk__section__block-link">                                                   
            Характеристика
        </div> -->
        <div class="lk__section__block-link">
            Отзывы
        </div>
    </div>
    <div class="lk__line"></div>

    <!--ОПИСАНИЕ-->
   
        <div class="product__desc">
            <?php echo($product["description"]); ?>
        </div> 

        <!--ХАРАКТЕРИСТИКИ-->
        <div class="product__harakter">
            <?php echo($product["characteristic"]); ?>
        </div> 
        
       
