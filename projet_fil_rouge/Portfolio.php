<?php
require('nav.php');
require('conex.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php
       
       $query = $db->query("SELECT * FROM portfolio ORDER BY id LIMIT 5");
           if($query->rowCount() > 0){
             while($row = $query->fetch(PDO::FETCH_ASSOC)){
               $title = $row['title'];
               $url = $row['url'];

               echo "<div class='flex'>

                        <div class='imag'>
                            <img src='img/pexels8.jpg' alt=''>
                        </div>

                        <div class='zoom'>
                            <p>$title</p>
                            <a href='$url' target='_blank'>View</a>
                        </div>
                </div>";
                }

                }else{
                ?>
                </div>
                <p class="">No data found...</p>
                <?php
                    }
                ?>

</body>
</html>