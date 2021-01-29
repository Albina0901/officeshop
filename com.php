
<?php

     session_start();
     require('config.php');

     $id = $_GET['id_product'];
     $added = $_POST['added'];
     $ozenka = $_POST['ozenka'];
     $text = $_POST['text'];

        $sql="INSERT INTO `Comments` (`id_product`, `added`, `ozenka`, `text`) VALUES ('$id', '$added', '$ozenka', '$text')";
        $stmt = $db->prepare($sql);
        
       header('Location: ./cartochka.php');

    ?>