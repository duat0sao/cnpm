<?php 
include('config.php');
include('random.php');

$name = trim($_POST['name']);
$ykien = trim($_POST['sdt']); 
$email = trim($_POST['email']);
$chude = trim($_POST['chu']);




$sql = "INSERT INTO signup (name, ykien, email, chude) VALUES (?, ?, ?, ?)";
         
        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssss", $param_name, $param_ykien, $param_email, $param_chude);
            
            // Set parameters
            $param_name = $name;
            $param_ykien = $ykien;
            $param_email =  $email;
            $param_chude = $chude;
           
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
                header("location: index.php");
                
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        //mysqli_stmt_close($stmt);
     








        require 'mailer/PHPMailerAutoload.php';  
        
        $mail = new PHPMailer(true);
        $mail->SMTPDebug = 3;                                  // Enable verbose debug output  
        $mail->isSMTP();                                       // Set mailer to use SMTP  
        $mail->Host = 'smtp.gmail.com;';                       // Specify main and backup SMTP servers  
        $mail->SMTPAuth = true;                                // Enable SMTP authentication  
        $mail->Username = 'tduat183@gmail.com';               // your SMTP username  
        $mail->Password = 'matkhau3';                      // your SMTP password  
        $mail->SMTPSecure = 'tls';                             // Enable TLS encryption, `ssl` also accepted  
        $mail->Port = 587;                                     // TCP port to connect to  
        $mail->setFrom('tduat183@gmail.com', 'BOSS lv1');  
        $mail->addAddress($email);                             // set your BCC email address  
        $mail->isHTML(true);                                   // Set email format to HTML  
        $mail->Subject = 'How to send email from localhost using php with mysqli';  
        $mail->Body  = '<h1>Welcome to ?????ng wibu</h1><h3>Dear '.$name.' </h3>';
        $mail->Body  .= '<p>C???m ??n b???n ???? ????ng g??p ?? ki???n </p>';
        $mail->Body  .= '<p>Ch??ng t??i s??? li??n h??? l???i v???i b???n s???m nh???t c?? th??? </p>';
        
        if($mail->send()) {  
        echo 'Message has been sent';  
        } else {  
        echo 'Message could not be sent';  
        }  
        header("Location:thanks.php");
     









?>