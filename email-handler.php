<?php
$myemail = 'riley.barnett0197@gmail.com';

$name = $_POST['name'];
$email_address = $_POST['email'];
$message = $_POST['message'];

$to = $myemail;
$email_subject = "Contact form submission: $name";
$email_body = "You have received a new message. ".
" Here are the details: \nName: $name \nEmail: $email_address\nMessage: $message";

$headers = "Reply Email: $email_address";

mail($to,$email_subject,$email_body,$headers);
header('Location: contact-after.html');

?>
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
