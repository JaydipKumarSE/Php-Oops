<html>

<head>
    <title>
        Main send
    </title>

    <link rel="stylesheet" href="style.css">
</head>

<body>



    <?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    //Import PHPMailer classes into the global namespace
    //These must be at the top of your script, not inside a function


    if (isset($_POST['send'])) {

        $username = $_POST['name'];
        $usermail = $_POST['email'];
        $usersubject = $_POST['subject'];

        //Load Composer's autoloader (created by composer, not included with PHPMailer)
        require 'phpmailer/Exception.php';
        require 'phpmailer/PHPMailer.php';
        require 'phpmailer/SMTP.php';

        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            //Server settings

            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'jaydipkumar4083@gmail.com';                     //SMTP username
            $mail->Password   = 'ymknuhtvdaygxpsf';
            //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;
            //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('jaydipkumar4083@gmail.com', 'contact form');
            $mail->addAddress('jaydipkumar.wmail@gmail.com', 'Jaydip kumar');     //Add a recipient




            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Inquiry';
            $mail->Body    = "Name- $username <br>Mail- $usermail <br> Subject- $usersubject";

            $mail->send();
            echo "<div class='sucess'>Message has been sent </div>";
        } catch (Exception $e) {
            echo "<div class='alert'>Message has been  could not sent </div>";
        }
    }

    ?>

    <div class="form-container">
        <form action="" method="POST">
            <label class="input-feild" for="username"> User Name:-</label><br>
            <input class="input-section" type="text" id="name" name="name" placeholder="enter the  name" required></br></br>
            <label class="input-feild" for="emailid"> Email Id:- </label><br>
            <input class="input-section" type="text" id="email" name="email" placeholder="enter the mail" required></br></br>
            <label class="input-feild" for="subject"> Subjects:-</label></br>
            <textarea class="input-section" type="textarea" id="subject" name="subject" rows="6" cols="30" required> </textarea><br><br>

            <button class="input-button" type="submit" name="send">Send</button>
        </form>
    </div>



</body>

</html>