<?php 
include('../config.php');
include('../random.php');
 $errors = array(); // Initialize an error array. 

	// Check for a first name:                        
		$first_name = trim($_POST['tenkhach']);
	if (empty($first_name)) {
		$errors[] = 'Không bỏ trống ô này.';
	}
	// Check for a last name:
		$last_name = trim($_POST['sdt']);
	if (empty($last_name)) {
		$errors[] = 'Không bỏ trống ô này.';
	}
	// Check for an email address:
		$email = trim($_POST['email']);
	if (empty($email)) {
		$errors[] = 'Không bỏ trống ô này.';
    }
    $diachi = trim($_POST['diachi']);
	if (empty($diachi)) {
		$errors[] = 'Không bỏ trống ô này.';
    }
    










    $sql1="select * from khach where email='$email'";
    $result=mysqli_query($conn,$sql1);
    if(mysqli_num_rows($result)>0){
        $errors[] = 'Your email address already used.';
    }
	// Check for a password and match against the confirmed password:
			$password1 = trim($_POST['password1']);
			$password2 = trim($_POST['password2']);
	if (!empty($password1)) {
		if ($password1 !== $password2) { //#4
			$errors[] = 'Your two password did not match.';
		} 
	} else {
		$errors[] = 'You forgot to enter your password.';
    }
    
    if (empty($errors)) {
    //hashing the password
    
    //generate randomstrin


    
    $randstring=generateRandomString();
    //execute query
    $sql="insert into khach(tenkhach, sdt, email, matkhaukhach, diachi, activation_code)
    VALUES ('$first_name','$last_name','$email', '$password1', '$diachi', '$randstring')";
    mysqli_set_charset($conn,'UTF8');
     if(mysqli_query($conn,$sql)){
        $sql1="select idkhach from khach where email='$email'";
        $result=mysqli_query($conn,$sql1);
        if(mysqli_num_rows($result)>0){
            $id=mysqli_fetch_assoc($result);
        }   



        require '../mailer/PHPMailerAutoload.php';  
        
        $mail = new PHPMailer(true);
        $mail->SMTPDebug = 3;                                  // Enable verbose debug output  
        $mail->isSMTP();                                       // Set mailer to use SMTP  
        $mail->Host = 'smtp.gmail.com;';                       // Specify main and backup SMTP servers  
        $mail->SMTPAuth = true;                                // Enable SMTP authentication  
        $mail->Username = 'tduat183@gmail.com';               // your SMTP username  
        $mail->Password = 'matkhau3';                      // your SMTP password  
        $mail->SMTPSecure = 'tls';                             // Enable TLS encryption, `ssl` also accepted  
        $mail->Port = 587;                                     // TCP port to connect to  
        $mail->setFrom('tduat183@gmail.com', 'Sleepping Beauty');  
        $mail->addAddress($email);                             // set your BCC email address  
        $mail->isHTML(true);                                   // Set email format to HTML  
        $mail->Subject = 'How to send email from localhost using php with mysqli';  
        $mail->Body  = '<h1>Welcome to động wibu</h1><h3>Dear '.$first_name.' </h3>';
        $mail->Body  .= '<p>Thank you for signing up <br>We just need you to confirm your email address and finish setting up a new  account we created just for you. <br>You can do it super-quickly by clicking follow link:</p>';
        $mail->Body  .= '<b> click here http://localhost/cnpm1/khach/activate.php?idkhach='.$id['idkhach'].'&code='.$randstring.' </b>';  
        if($mail->send()) {  
        echo 'Message has been sent';  
        } else {  
        echo 'Message could not be sent';  
        }  
        header("Location:../thanks.php");
     }
     else{
         $e= mysqli_error($conn);
        header("Location:../error.php?error=$e");
     }
    }else { // Report the errors.                                            
		$errorstring = "Error! <br /> The following error(s) occurred:<br>";
		foreach ($errors as $msg) { // Print each error.
			$errorstring .= " - $msg<br>";
		}
		$errorstring .= "Please try again.<br>";
        header("Location:../error.php?error=$errorstring");
		}// End of if (empty($errors)) IF.






?>