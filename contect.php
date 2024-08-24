<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
if (isset($_POST['submit'])) {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $add=$_POST['add'];
    $phone=$_POST['phone'];
    $message=$_POST['message'];

    //Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function


//Load Composer's autoloader
require 'New folder/Exception.php';
require 'New folder/PHPMailer.php';
require 'New folder/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
                       //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'jugnumsd786@gmail.com';                     //SMTP username
    $mail->Password   = 'azlp ilsh yvsl szyy';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('jugnumsd786@gmail.com', 'contect');
    $mail->addAddress('55624@students.riphah.edu.pk', 'riphah');     //Add a recipient
   

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Test contect';
    $mail->Body    = "Sender Name - $name <br> Sender Email - $email <br> phone - $phone <br> address -$add <br> message - $message";
  

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: {$mail->ErrorInfo}';
}
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>
<section id="contect" class="contect scroll-scale" >
    <div class="main-text">
        <span>Ask Me Question</span>
        <h2>CONTECT ME</h2>
    </div>
<form action="#" class=" scroll-bottom" method="POST">
    <input type="text" name="name" placeholder="Your Name">
    <input type="text" name="email" placeholder="Your Email">
    <input type="text" name="add" placeholder="Your Address">
    <input type="number" name="phone" placeholder="Phone Number">
    <textarea name="message" id="" cols="30" rows="10"  placeholder="Your Message"></textarea>
    <div class="btn-box form-Btn">
        <button type="submit" name="submit" class="btn">Send Message</button>
    </div>
</form>
</section>
    

<script src="mixitup.min.js"></script>
    <script src="script.js"></script>
</body>
</html>