
<form method="POST" class="product__block" action="./cat.php?action=add&id=<?php echo($product["id_product"]); ?>">
    <a href="./cartochka.php?id=<?php echo($product["id_product"]); ?>" class="product__block-wrapper">
        <div class="product__block-block1">
            
            <div class="product__block-cat">
                <?php echo($product["titlee"]); ?>
            </div>   
            <!-- ЦИКЛ ОБЪЯВЛЕНИЯ ТОВАРА УЧАСТИЯ В АКЦИИ -->
            <?php if($product["sale"]) { ?>
                <div class="sale">Sale</div>
            <?php } ?>
        </div>
        <img class="product__block-img" src="./img/<?php echo($product["img"]); ?>" alt="">
        <div class="product__block-name">
            <?php echo($product["title"]); ?>
        </div>   
    </a>
    <input type="text" name="col" class="product__col" value="1">
    <div class="product__block-korz">
        <div id="price_cart" class="product__block-price">
            <?php echo($product["price"]); ?> ₽
        </div>
        <input type="hidden" name="hidden_title" value="<?php echo($product["title"]); ?>">
        <input type="hidden" name="hidden_price" value="<?php echo($product["price"]); ?>">
        <button type="submit" name="addToCart" class="product__block-kup">
            Купить
        </button>
    </div>
    
</form> 