<?php 
ob_start(); 
error_log();
if(isset($_POST['name']) && isset($_POST['email'])){

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
//$message = $_POST['message'];

$mailHeading = 'EasyGov Contact Form';
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: EasyGov Webite <contact@easygov.co.in>' . PHP_EOL .
'Reply-To: EasyGov <contact@easygov.co.in>' . PHP_EOL .
'X-Mailer: PHP/' . phpversion();

$to = 'contact@easygov.co.in'; 


$messageSent = '<div>Name Sender : '.$name .'</div><div> Name Email : '.$email.' </div><div>Company : '.$subject.'</div>';

if( $name != '' || $message != '' || $email != ''){
mail($to,$subject,$messageSent,$headers);
echo 'Mail Sent, We Will Get Back to You....';
} 
}

?>