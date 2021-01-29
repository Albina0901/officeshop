 <?php
session_start();

require('config.php');
$email = $_POST['email'];
$password = md5($_POST['password']);

   if (isset($_POST['submit'])) {
   try
   {

   $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $sql="SELECT * FROM `Users` WHERE `email` = '$email'";
   $stmt = $db->prepare($sql);
   $stmt->execute(array('$email' => $_POST['email']));
   $num=$stmt->rowCount();
      
   if($num < 1) { 
      $_SESSION['message'] = 'Ошибка!';
      header('Location: ../index.php');
      }
      elseif($_POST['email'] == 'admin@admin.ru') {
         $_SESSION['admin'] = 1;
         header('Location: ../admin.php');
      }
      
       else{
         $_SESSION['user'] = 1;
         $_SESSION['user_email'] = $email;
         $_SESSION['user_id'] = $num['id_user'];
         $_SESSION['user_name'] = $num['name'];
         header('Location: ../index.php');
         }
      }
   catch (Exception $e)
   {
   echo 'Caught exception: ',  $e->getMessage(), "\n";
   }
}
   ?>
