<!--ПОДКЛЮЧЕНИЕ РЕГИСТРАЦИИ-->
<?php
 if (session_id() == '')
 {
     session_start();
 }
    require('config.php');
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $patronymic = $_POST['patronymic'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password_povt = $_POST['password_povt'];
        $telephone = $_POST['telephone'];
        if($password === $password_povt) {
        //ХЕШИРОВАНИЕ ПАРОЛЯ ДЛЯ БД
        $password = md5($password."gdhgdhsg6635635");   
   
        //ПРОВЕРКА НА ДОСТУПНОСТЬ email
        $sql="SELECT `email` FROM `Users` WHERE `email` = '$email' ";
        $stmt = $db->prepare($sql);
        $stmt->execute(array('$email' => $_POST['email']));

        $num=$stmt->rowCount();
        if($num < 1) {
            $db->query("INSERT INTO `Users` (`name`, `surname`, `patronymic`, `email`, `password`, `telephone`) VALUES 
            ('$name', '$surname', '$patronymic', '$email', '$password', '$telephone')");
            $_SESSION['message'] = 'Вы успешно зарегистрировались!';
            header('Location: ../reg.php');
        } else {
            $_SESSION['message'] = 'Такая учетная запись уже существует!';
            header('Location: ../reg.php');
        }
        
        } else {
            $_SESSION['message'] = 'Пароли не совпадают!';
            header('Location: ../reg.php');
        }
    ?>