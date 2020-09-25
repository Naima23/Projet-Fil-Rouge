<?php
require('nav.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<script src="https://cdn.jsdelivr.net/npm/baffle@0.3.6/dist/baffle.min.js"></script>

<body>

<div class="container">

    <img src="img/Web 1920 – 1.png" alt="">
    <div class="data">welcome - to my Portfolio</div>
   
</div>

<script type="text/javascript">
     const text = baffle(".data");
     text.set({
           characters : '▓▒▒ █░█░▓ ░>>▓█ ▓▓█ ▓▓<>▓ █/▒█ ░▓▓ ░█░▒ ▓██▓',
            speed : 120   
            });
                text.start();
                text.reveal(4000);

            </script>

   <div class="btn_accueil"><a href="Portfolio.php" class="btn_accueil">My Project</a></div> 
    
</body>
</html>