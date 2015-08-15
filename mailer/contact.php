<?php
session_start();
require_once 'PHPMailerAutoload.php';
$errors = [];

  



if (isset($_POST['name'] ,$_POST['email'] ,$_POST['message'])) {
    $fields = [
        'name' => $_POST['name'],
        'email' => $_POST['email'],
        'message' => $_POST['message']
         ];
         foreach ($fields as $field => $data){
             if (empty($data)) {
                 $error[] = 'The'.$field.'field is required.';
             }
         }

        $mail = new PHPMailer;
        $mail->IsSMTP(); // telling the class to use SMTP
        $mail->SMTPAuth   = true;
        $mail->SMTPSecure = "tls";
        $mail->Host       = "smtp.gmail.com";
        $mail->Port       = 587;

        $mail->Username   = "MAILTODO@gmail.com";  // GMAIL username
        $mail->Password   = "PASS";            // GMAIL password
        
        $mail->SetFrom('MAILTODO@gmail.com', 'ZaraLab');
        $mail->Subject = "ZaraLab";
        $mail->AddReplyTo($fields['email'], "ZaraLab");
        
        $body = 'Name: ' . $fields['name'] . "<br />" ;
        $body .= 'Email: ' . $fields['email'] . "<br /><br /><hr><br />" ;
        $body .= $fields['message'];
        
        $mail->MsgHTML($body);
        
        $address = "barabara123@yopmail.com"; // EDIT ME !!!
        $mail->AddAddress($address, "John Doe");
        if(!$mail->Send()) {
            echo "Mailer Error: Error while sending mail.";
        } else {
            echo "Message sent!";
        }
        
}else{
    $errors[] = 'Somthing went wrong';
}
 

?>
