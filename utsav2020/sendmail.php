<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    
    require $_SERVER['DOCUMENT_ROOT'] . '/mail/Exception.php';
    require $_SERVER['DOCUMENT_ROOT'] . '/mail/PHPMailer.php';
    require $_SERVER['DOCUMENT_ROOT'] . '/mail/SMTP.php';
    
    $mail = new PHPMailer;
    $mail->isSMTP(); 
    $mail->SMTPDebug = 2; 
    $mail->Host = "smtp.gmail.com"; 
    $mail->Port = 587;
    $mail->SMTPSecure = 'tls';
    $mail->SMTPAuth = true;
    $mail->Username = ''; 
    $mail->Password = ''; 
    $mail->From='';
    $mail->FromName='Utsav 2020';
    $mail->addAddress('');
    $mail->Subject = 'Utsav Pass Code';
    $mail->msgHTML("Your Utsav Pass Code :<b> test body</b>");
    $mail->AltBody = 'HTML messaging not supported'; 
    $mail->SMTPOptions = array(
                        'ssl' => array(
                            'verify_peer' => false,
                            'verify_peer_name' => false,
                            'allow_self_signed' => true
                        )
                    );
    if($mail->send())
    {
        echo "Mailer Error: " . $mail->ErrorInfo;
    }
?>