<?php
require('nav.php');
?>

<?php
if(isset($_POST['submit'])){

  $username = htmlspecialchars(stripslashes(trim($_POST['name'])));
  $usermail = htmlspecialchars(stripslashes(trim($_POST['mail'])));
  $usersobjict = htmlspecialchars(stripslashes(trim($_POST['sobjict'])));
  $usermessage = htmlspecialchars(stripslashes(trim($_POST['message'])));

  if(!preg_match("/^[A-Za-z .'-]+$/", $username)){
    $name_error = 'Invalid full name';
  }
  if(!preg_match("/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/", $usermail)){
    $email_error = 'Invalid email';
  }
  if(!preg_match("/^[A-Za-z .'-]+$/", $usersobjict)){
    $subject_error = 'Invalid subjcet';
  }
  if(strlen($usermessage) === 0){
    $message_error = 'Your message should not be empty';
  }

  $to = "naimanajja4@gmail.com";
  $subject = "'$username' has sent a mail";

  $message ="
  <html>
      <body>
          <table style='width:600px'>
              <tbody>
                  <tr>
                      <td style='width:150px'><strong>Name: </strong></td>
                      <td style='width:400px'>$username</td>
                  </tr>
                  <tr>
                      <td style='width:150px'><strong>Email ID: </strong></td>
                      <td style='width:400px'>$usermail</td>
                  </tr>
                  <tr>
                      <td style='width:150px'><strong>Subject : </strong></td>
                      <td style='width:400px'>$usersobjict</td>
                  </tr>
                  <tr>
                      <td style='width:150px'><strong>Message: </strong></td>
                      <td style='width:400px'>$usermessage</td>
                  </tr>
              </tbody>
          </table>
      </body>
  </html>
  ";

$headers ="MIME-Version: 1.0" . "\r\n";
$headers .="Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: developre <naimanajja4@gmail.com>' . "\r\n";

        if(mail($to,$subject,$message,$headers)&& !isset($name_error) && !isset($subject_error) && !isset($email_error) && !isset($message_error)){
            
              echo"<script>alert('votre message à été envoyé, je vous répondrais dans meilleur délais, merci.')</script>";
              header("location: ./contact.php");
              echo "<meta http-equiv='refresh' content='0'>";
              
            
        }

        else{
            echo"<script>alert('votre message n\'a pas été envoyé veuillez réessayer!')</script>";
            
        }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>

  <div class="form">
            <form action=""  method="POST">
                <div class="form2">

                      <h2>Contact</h2>

                        <input type="text" id="name" name="name" placeholder="Your Name"  required>
                        <p class="contactForm__alertmsg"><?php if(isset($name_error)) echo $name_error; ?></p>

                        
                        <input type="text" id="mail" name="mail" placeholder="Your Mail"  required>
                        <p class="contactForm__alertmsg"><?php if(isset($email_error)) echo $email_error; ?></p>
                        

                        <input type="text" id="sobjict" name="sobjict" placeholder="Your sabject"  required>
                        <p class="contactForm__alertmsg"><?php if(isset($subject_error)) echo $subject_error; ?></p>


                        <textarea name="message" id="message"  rows="10" placeholder="Your message"></textarea>
                        <p class="contactForm__alertmsg"><?php if(isset($message_error)) echo $message_error; ?></p>


                        <div class="button">
                        <input class="contactForm__sendBtn" type="submit" value="Envoyer" name="submit">
                        </div>
                 </div>
             </form>
   </div>

</body>
</html>