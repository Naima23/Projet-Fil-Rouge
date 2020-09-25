<?php
require('conex.php');
session_start();
require('nav.php');

// $hash = md5("naima");
// print_r($hash);

if(isset($_POST['login'])){
    $email = htmlspecialchars($_POST['email']) ;
    $pass = htmlspecialchars($_POST['pass']);
    $hash = md5($pass);
     $query = $db->query("SELECT * FROM login WHERE email='$email' AND pass='$hash' ");
         if($query->rowCount() > 0){
 
                 $_SESSION['email']=$email;
                     header("location: ./admin.php");
                     exit();
 
 
         }else{
             echo '<script>alert("Your email or password wrong!")</script>';
 
         }
 
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>
<div class="login">
        <form action=""  method="POST">
        <div class="login2">
              <h2>Welcome Admin</h2>

            <input type="text" id="email" name="email" placeholder="Your mail" required> <br>
            
            <input type="password" id="pass" name="pass" placeholder="Your password" pattern=[A-Z\sa-z]{3,20} required> <br>
            <button type="submit" class="btnLogin" name="login">Log in</button>
            
            </div>
          </form>
    
</body>
</html>