<?php

$sorting = $_GET["sort"];
switch($sorting) {
    case 'price-desc';
    $sorting = 'price DESC';
    break;

    case 'price-asc';
    $sorting = 'price ASC';
    break;

    case 'sales';
    $sorting = 'sale DESC';
    break;

    default:
    $sorting = 'id_product DESC';
    break;

}

?>