<?php

$cat = $_GET["cat"];
switch($cat) {
    case 'titlee';
    $cat = 'titlee';
    break;

    default:
    $cat = 'id_categoria DESC';
    break;
?>