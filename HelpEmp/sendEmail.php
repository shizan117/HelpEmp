<?php
    //use PHPMailer\PHPMailer\PHPMailer;

    function sendOTP($email,$otp){
        require('PHPMailer\PHPMailer.php');
        require('PHPMailer\SMTP.php');
        $message_body="Password for login is :<br/><br/>".$otp;
        $mail=new PHPMailer\PHPMailer\PHPMailer();

        $mail-> AddAddress($email);
        $mail-> SetFrom('180204128@aust.edu','180204128');
        $mail-> MsgHTML($message_body);
        $mail-> Subject="OTP for attendence";
        $result=$mail->Send();
        if(!$resut){
            echo "Mailer Error: ".$mail->ErrorInfo;
        }else{
            return $result;
        }
        

    }



?>