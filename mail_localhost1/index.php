<?php
	function SendMail( $ToEmail) {
  require_once ( 'class.phpmailer.php' ); 
  $Mail = new PHPMailer();
  $Mail->IsSMTP(); // Use SMTP
  $Mail->Host        = "smtp.gmail.com"; 
  $Mail->SMTPDebug   = 0; 
  $Mail->SMTPAuth    = TRUE; 
  $Mail->SMTPSecure  = "tls"; 
  $Mail->Port        = 587; 
  $Mail->Username    = 'patelsiddharth930@gmail.com'; // google username
  $Mail->Password    = 'sid942108'; // google password
  $Mail->Priority    = 1; 
  $Mail->CharSet     = 'UTF-8';
  $Mail->Encoding    = '8bit';
  $Mail->Subject     = 'Test Email Using Gmail';  //subject of email
  $Mail->ContentType = 'text/html; charset=utf-8\r\n';
 // $Mail->From        = 'demo@gmail.com';  
  $Mail->FromName    = 'Virtual Drive'; //from name
  $Mail->WordWrap    = 900; 

  $Mail->AddAddress( $ToEmail ); // To
  $Mail->isHTML( TRUE );
  $Mail->Body    = 'hi';
  $Mail->Send();
  $Mail->SmtpClose();

  if ( $Mail->IsError() ) { // ADDED - This error checking was missing
    return FALSE;
  }
  else {
    return TRUE;
  }
}

$ToEmail = 'arnikapatel9@gmail.com'; //to email
$ToName  = 'test';

$Send = SendMail( $ToEmail);
if ( $Send ) {
  echo "<h2> Mail Sent</h2>";
}
else {
  echo "<h2> ERROR</h2>";
}
die;
?>