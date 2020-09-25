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
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
</head>
<body>
<div class="about">
    <!-- <div class="dirip">
<h2 >Abuot</h2>
</div> -->
<?php
       
       $query = $db->query("SELECT * FROM about ORDER BY id LIMIT 5");
           if($query->rowCount() > 0){
             while($row = $query->fetch(PDO::FETCH_ASSOC)){
               $para1 = $row['para1'];
               $para2 = $row['para2'];
               $para3 = $row['para3'];
              

        

               echo " 

                            <div class='text_about'>
                        
                            <h2 >Abuot</h2>
                              
                            <h4>$para1 </h4>
                            <h4> $para2  </h4>
                            <h4>  $para3  </h4>
                            <a  class='icon_about' href='https://linkedin.com/in/naima-najjar-66966b1a3'> <img class='icon' src='img/linkedin.svg' alt=''> </a>
                            <a  href='https://github.com/Naima23'> <img   class='icon' src='img/github.svg' alt=''> </a>

                            </div> ";

                }

         
                }else{
                ?>
                </div>
                <p class="">No data found...</p>
                <?php
                    }
                ?>

</div>
                


   
</div>
</body>
</html>