<?php
session_start();
require('navadmin.php');
require('conex.php');

if(!$_SESSION['email']){
    header("location: ./login.php");
}

if(isset($_POST['Add'])){
    $title = $_POST['title'];
    $url = $_POST['url'];
    
    if(!empty(isset($_POST['title'])) && !empty(isset($_POST['url']))){

                $insert = $db->query("INSERT into portfolio (title, url) VALUES ('".$title."', '".$url."')");
                // header("location: homepage.php?uploadsuccess");
                $errmsg = "Your project is loaded with successful";

          }else{
            $errmsg = "missing information!";
        }

      }else{
        $errmsg = "Error sent information to database!";
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
        <div class="title"> <h2>Welcome to settings </h2></div>
    </div>

    <div class="formPortfolio">  
                <form class="projectForm" action="" method="POST">

                    <label for="" class="projectForm__labelName"> Title :</label>
                    <input type="text" class="projectForm__proTitle" name="title" placeholder="Title..." required>

                    <label for="" class="projectForm__labelName">Url :</label>
                    <input type="text" class="projectForm__proUrl" name="url" placeholder="Url..." required>

                    <input class="projectForm__sendBtn" type="submit" value="Add" name="Add">
                </form>
    </div>

    <div class="dataPortfolio">
                <h2 class="titlePortfolio">Table de données</h2>
                <form class="form1" method="POST">
                    <table id="portfolioTable">
                        <tr>
                            <th>Id</th>
                            <th>Title</th>
                            <th>Url</th>
                            <th>Action</th>
                        </tr>
                            <?php   
                                $sql = 'SELECT * FROM portfolio';
                                $stmt = $db->prepare($sql);
                                $stmt->execute();
                                $don = $stmt->fetchAll(PDO::FETCH_OBJ);
                                    foreach($don as $info){
                            ?>        
                                <tr>
                                    <td><?= $info->id ;?></td>
                                    <td><?= $info->title ;?></td>
                                    <td><?= $info->url ;?></td>
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