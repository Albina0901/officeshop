<?php
session_start();
if($_SESSION['admin'] == 1 )
                {
    $pageTitle = "Админ панель | Интернет-магазин OFFICESHOP";
    require('config.php');
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="http://jqueryjs.googlecode.com/files/jquery-1.3.1.min.js" > </script>
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
     <section class="admin__panel">
        <div class="container">
            <div class="admin__panel-header">
                <a href="index.php" class="admin__panel__header-index">Главная</a>
                <div class="admin__panel__header-menu">
                    <a href="session_stop.php" class="admin__panel__menu-link admin__close">Выйти</a>
                </div>
            </div>
    <div class="v">
    <div class="cat__section-block1">
    <ul class="catalog__wrapper-menu">
        <li>
            <a class="catalog__wrapper-menu__link" onclick="show__admin('visible')">
                Заказы
            </a>
        </li>
        <li>
            <a class="catalog__wrapper-menu__link">
                Пользователи
            </a>
        </li>
        <li>
            <a class="catalog__wrapper-menu__link" href="cat.php?cat=titlee">
                Продажи
            </a>
        </li>
        <li>
            <a class="catalog__wrapper-menu__link" href="cat.php?cat=titlee">
                Комментарии
            </a>
        </li>
        <li>
            <a class="catalog__wrapper-menu__link" href="cat.php?cat=titlee">
                Рассылка
            </a>
        </li>
        <li>
            <a class="catalog__wrapper-menu__link" href="cat.php?cat=titlee">
                Другое
            </a>
        </li>
    </ul>
</div>
<div class="admin__panel-block">
            <div id="print-content" class="admin__panel-content">
             <table>
                <tr>
                    <th>Код продажи</th>
                    <th>Код товара</th>
                    <th>Количество</th>
                    <th>Название</th>
                </tr>
            <?php
                $sql = "SELECT * FROM Prodazhi INNER JOIN Product using(id_product)";
                $result = $db->query($sql);
                $products = $result->fetchAll(PDO::FETCH_ASSOC);
                foreach ($products as $product) {
                include("./templates/_admin.php");
                } 
            ?> 
             <!-- <tr>
    <td colspan="5" style="text-align:right">ИТОГО:</td><td>1168,80</td><!-- Задаем количество ячеек по горизонтали для объединения-->
  <!-- </tr> --> 
</table> 
</div>

             </div>
             </div>
             <a onClick="javascript:CallPrint('print-content');" title="Распечатать">Вывести на печать таблицу по продажам</a>

        </div>

     </section> 







<script src="./js/print.js"></script>
<script src="./js/index.js"></script>

<?php
} else {
    header('Location: index.php');
}
?>

</body>
</html>
