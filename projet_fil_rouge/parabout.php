<?php
session_start();
require('navadmin.php');
require('conex.php');

if(!$_SESSION['email']){
    header("location: ./login.php");
}

if(isset($_POST['Ajouter'])){
    $para1 = $_POST['para1'];
    $para2 = $_POST['para2'];
    $para3 = $_POST['para3'];
    
    if(!empty(isset($_POST['para1'])) && !empty(isset($_POST['para2'])) && !empty(isset($_POST['para3']))){
                    
        $stmt = $db->prepare("INSERT INTO about (para1, para2, para3) VALUES (:para1, :para2, :para3)");
        $stmt -> execute(array(
                'para1'=>"$para1",
                'para2'=>"$para2",
                'para3'=>"$para3"

        ));
          
            $err = "Your informations is loaded with successful";

}else{
$err = "please try again!";

}
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
        <div class="title2"> <h2>Welcome to settings </h2></div>
        <p><?php if(isset($err)) echo $err; ?></p>
    </div>
    
    <div class="formPortfolio">  
                <form class="projectForm" class="felx_about " action="" method="POST">

                    <!-- <label for="" class="projectForm__labelName"> Paragraphe 1 :</label> -->
                  <br>  <textarea type="text" name="para1" class="aboutext"  placeholder="Paragraphe 1 ..."></textarea>

                    <!-- <label for="" class="projectForm__labelName">Paragraphe 2 :</label> -->
                 <br>   <textarea type="text" name="para2" class="aboutext" placeholder="Paragraphe 2 ..."></textarea>

                    <!-- <label for="" class="projectForm__labelName">paragraphe 3 :</label> -->
                   <br> <textarea type="text" name="para3"class="aboutext"  placeholder="Paragraphe 3 ..."></textarea>

                    <br> <input class="btn_about" class="projectForm__sendBtn" type="submit" value="Ajouter" name="Ajouter">
                </form>
    </div>

    <div class="dataPortfolio">
                <h2 class="titlePortfolio">Table de données</h2>
                <form class="form1" method="POST">
                    <table id="portfolioTable">
                        <tr>
                            <th>Id</th>
                            <th>Paragraphe 1</th>
                            <th>Paragraphe 2</th>
                            <th>Paragraphe 3</th>
                            <th>Action</th>
                        </tr>
                            <?php   
                                $sql = 'SELECT * FROM about';
                                $stmt = $db->prepare($sql);
                                $stmt->execute();
                                $don = $stmt->fetchAll(PDO::FETCH_OBJ);
                                    foreach($don as $info){
                            ?>        
                                <tr>
                                    <td><?= $info->id ;?></td>
                                    <td><?= $info->para1 ;?></td>
                                    <td><?= $info->para2 ;?></td>
                                    <td><?= $info->para3 ;?></td>
                                    <td>

                                <label class="labelBtns" ><a class="btnFrm colorRed" href="./delete.php?id=<?= $info->id ?>" onclick="return confirm('Are you sure you want to delete this entry!')">DELETE</a>
                                </label>
                                
                                </td>

                                </tr>    
                            <?php
                                }
                        
                            ?> 
                    </table>
                </form>
            </div>

    
</body>
</html>