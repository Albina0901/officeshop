<?php
session_start();
include('./config.php');

//ДОБАВЛЕНИЕ ТОВАРА В КОРЗИНУ
if(isset($_POST['addToCart'])) {
    if(isset($_SESSION['shopCart'])) {
        $item_array_id = array_column($_SESSION['shopCart'], 'item_id');
        if(!in_array($_GET['id'], $item_array_id)) {
            $count = count($_SESSION['shopCart']);
            $item_array = array(
                'item_id' => $_GET['id'],
                'item_name' => $_POST['hidden_title'],
                'item_price' => $_POST['hidden_price'],
                'item_col' => $_POST['col']
            );
            array_push($_SESSION['shopCart'], $item_array);

        } else {
            
        }
    } else {
        $item_array = array(
            'item_id' => $_GET['id'],
            'item_name' => $_POST['hidden_title'],
            'item_price' => $_POST['hidden_price'],
            'item_col' => $_POST['col']
        );
        $_SESSION['shopCart'] [0] = $item_array;

    }
}
//УДАЛЕНИЕ ТОВАРА
if(isset($_GET['action'])) {
    if($_GET['action'] == 'delete') {
        foreach($_SESSION['shopCart'] as $keys => $values) {
            if($values['item_id'] == $_GET['id']) {
                unset($_SESSION['shopCart'][$keys]);
            }
        }
    }
}
?>

<div class="cart__product">
    
    <div id="form__cart">
        <div class="form__cart-head">
            <h3 class="form__cart__head-text">
                Корзина заказов
            </h3>
            <i onclick="show__cart('hidden')" class="cart__close fas fa-times"></i>
        </div>
        <table class="cart__block">
            <tr>
                <th class="cart__block-head">Название</th>
                <th class="cart__block-head">Кол.</th>
                <th class="cart__block-head">Цена</th>
                <th class="cart__block-head">Сумма</th>
                <th class="cart__block-head">Удалить</th>
            </tr>
       
            <?php
                 if(!empty($_SESSION['shopCart'])) {
                    $total = 0;
                    foreach($_SESSION['shopCart'] as $keys => $values) {
            ?>
            <tr>
                <th class="cart__block-text"><?php echo($values['item_name']); ?></th>
                <th class="cart__block-text"><?php echo($values['item_col']); ?></th>
                <th class="cart__block-text"><?php echo($values['item_price']); ?></th>
                <th class="cart__block-text"><?php echo number_format($values['item_col'] * $values['item_price'], 2); ?></th>
                <th class="cart__block-text"><a class="cart__block__text-item" href="cat.php?action=delete&id=<?php echo($values['item_id']); ?>">Удалить</a></th>
            </tr>
            <?php
                $total = $total + ($values['item_col'] * $values['item_price']);
                    }
                }
            ?>
        </table>
        <div class="form__cart-block3">
            <div class="itog__price">
                Итого: <?php echo number_format($total, 2); ?> ₽
            </div>
            <?php
            if($_SESSION['user'] == 1)
                {
            ?>
            <a href="./cart.php" class="cart__btn">
                Оформить заказ
            </a>
            <?php
            }
            else {
                ?>
                <a href="./_reg.php" class="cart__btn">
                    Регистрация
                </a>
            <?php
            }
        ?>
        </div>
    </div>
    
</div>