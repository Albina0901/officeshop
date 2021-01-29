<?php

    if(!empty($_POST['email'])) {

        $headers = 'From: Альбина\r\n';
                   'Reply-To: all@officeshop72.ru\r\n';
                   'X-Mailer: PHP/'.phpversion();
        $theme = 'Новое сообщение';
        $letter = 'Данные сообщения:\r\n';
        $letter .= 'Почта: '.$_POST['email'].'\r\n';
        mail('all@officeshop72.ru', $theme , $letter, $headers);
        echo $_SESSION['message'] = 'все гуд';
        header('Location: ../cat.php');

    } else {
        echo $_SESSION['message'] = 'все печально';
        header('Location: ../index.php');
    }

?>