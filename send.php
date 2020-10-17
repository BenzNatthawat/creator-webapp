<?php 
    $mailto = "thebenzzero@gmail.com";
    $nameMsg = $_POST["name"];
    $messageMsg = $_POST["message"];
    $mailMsg = $_POST["mail"];
    $telMsg = $_POST["tel"];
    require_once './PHPMailer/PHPMailerAutoload.php';
    $mail = new PHPMailer();
    $mail->IsSmtp();
    
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
    $mail->Host = "smtp.creator-webapp.com";
    $mail->Port = 25; // or 587
    $mail ->IsHTML(true);
    $mail->Username = "admin@creator-webapp.com";
    $mail->Password = "Ur8_1v6i";
    $mail->SetFrom("admin@creator-webapp.com", "Creator Webapp");
    $mail->Subject = "=?utf-8?b?".base64_encode("ติดต่อโดย: ".$nameMsg)."?=";
    $mail->Body = "
      <html>
        <div><b>ชื่อ: </b><b>".$nameMsg."</b></div>
        <div><b>อีเมล: </b>".$mailMsg."</div>
        <div><b>เบอร์โทรศัพท์: </b>".$telMsg."</div>
        <div><b>ข้อความ: </b>".$messageMsg."</div>
      </html>
    ";
    $mail->AddAddress($mailto);
    if(!$mail->Send()){
      echo "Mail Not Sent";
    }
    else{
      echo "Mail Sent";
    }
?>
  