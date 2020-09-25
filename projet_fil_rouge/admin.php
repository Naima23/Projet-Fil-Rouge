<?php
session_start();
require('navadmin.php');

if(!$_SESSION['email']){
    header("location: ./login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="admin">
        <div class="aprop">
            <img src="img/admin1.svg" alt="">
            <a href="paraport.php">project</a>
        </div>

        <div class="portfolio">
            <img src="img/admin2.svg" alt="">
             <a href="parabout.php">About</a>
        </div>
    </div>
    
</body>
</html>