<?php 
    require_once('send.php');
    $name = $_POST['name'];
    $mailto = "thebenzzero@gmail.com";
    $mailSub = "เทส";
    $mailMsg = "ข้อความทดสอบ";
    require_once get_template_directory().'/PHPMailer/PHPMailerAutoload.php';
    $mail = new PHPMailer();
    $mail->IsSmtp();
    
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
    $mail->Host = "smtp.creator-webapp.com";
    $mail->Port = 25; // or 587
    //$mail ->IsHTML(true);
    $mail->Username = "admin@creator-webapp.com";
    $mail->Password = "Sk62j?7q";
    $mail->SetFrom("admin@creator-webapp.com", "Creator Webapp");
    $mail->Subject = "=?utf-8?b?".base64_encode($mailSub)."?=";
    $mail->Body = $mailMsg;
    $mail->AddAddress($mailto);
    if(!$mail->Send()){
      echo "Mail Not Sent";
    }
    else{
      echo "Mail Sent";
    }
?>
  