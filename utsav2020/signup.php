<?php
    ob_start();
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
                
    require $_SERVER['DOCUMENT_ROOT'] . '/mail/Exception.php';
    require $_SERVER['DOCUMENT_ROOT'] . '/mail/PHPMailer.php';
    require $_SERVER['DOCUMENT_ROOT'] . '/mail/SMTP.php';

	$conn=new mysqli('localhost','id12318894_utsav2020','utsav2020','id12318894_utsav2020');

	$regenerateNumber=true;
	do
	{
    	$id=rand(11111,99999);
    	$checkRegNum="SELECT * FROM pass WHERE Id='$id'";
    	$result=mysqli_query($conn,$checkRegNum);
	    if(mysqli_num_rows($result)==0)
	    {
        	$regenerateNumber=false;
    	}
	}while($regenerateNumber);

	if(mysqli_connect_error())
	{
		die('Connection error ('.mysqli_connect_errno().')'.mysqli_connect_errno());
	}
	else
	{
		if(isset($_POST['submit']))
		{
			$queryl="SELECT Email FROM pass where email='$_POST[email]'";
	        $result=mysqli_query($conn,$queryl);
	        $user=mysqli_fetch_all($result,MYSQLI_ASSOC);
	        if($user)
			{
				echo "Already Purchase Pass On This Detail";
	        }
			else
			{
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
                $mail->addAddress($_POST['email']);
                $mail->Subject = 'Utsav Pass Code';
                $mail->msgHTML('Your Utsav Pass Code :<b>'.$id.'</b><br>Verify Your Pass Code <a href="http://utsav2020.000webhostapp.com/login.php">Here</a>');
                $mail->SMTPOptions = array(
                                    'ssl' => array(
                                        'verify_peer' => false,
                                        'verify_peer_name' => false,
                                        'allow_self_signed' => true
                                    )
                                );
				$sql="INSERT INTO pass (Id,Name,Contact,Email) values ('$id','$_POST[name]','$_POST[contact]','$_POST[email]')";
    			if($mail->send() && $conn->query($sql))
	    		{	
		    		header('Location:index.php');
		    		ob_end_flush();
		    	}
			}
			$conn->close();
		}
	}
?>