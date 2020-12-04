<?php 
$errors = '';
require_once("ceo/smtpmail.php");

if(empty($_POST['name'])  ||
   empty($_POST['phone']) ||
   empty($_POST['email']) || 
   empty($_POST['subject']) || 
   empty($_POST['message']))
{
    $errors .= "\n Error: all fields are required";
}


$name = $_POST['name']; 
$phone = $_POST['phone'];
$email_address = $_POST['email']; 
$subject = $_POST['subject']; 
$message = $_POST['message']; 

	$email_subject = $subject;
	$email_body = "<h3><u>You have received a new message from website:</u></h3>".
	"<h4><u> Name:</u> $name <br><u> Subject:</u> $subject <br><u> Phone:</u> $phone <br><u> Email:</u> $email_address <br><u> Message:</u> $message </h4>"; 
	
$smtp = new SMTPMail();
$smtp->setDebugPrint(true);
$smtp->createSimpleLetter($email_subject, $email_body, "html");
$smtp->sendLetter();

if ($smtp == true){ ?>    
<script language="javascript" type="text/javascript">  
if (window.alert('Thank you for the message. We will contact you shortly.'))
{
    
window.location = 'index.html';	

}
else
{
window.history.back()
}
  
</script>    
<?php } else { ?> 
<script language="javascript" type="text/javascript">   
alert('Message not sent. Please, notify the site administrator support@foodies.com');  
window.location = 'index.html'; 
</script>    
<?php     } ?> 
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
<html>
<head>
	<title>Contact form handler</title>
</head>

<body>
<!-- This page is displayed only if there is some error -->
<?php
echo nl2br($errors);
?>


</body>
</html>