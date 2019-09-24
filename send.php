<?php 

	
	$name = $_POST['nm'];
	$email = $_POST['em'];
	$contact = $_POST['ph'];
	$requirement = $_POST['msg'];

$t_mails = array("kushkhurana0002@gmail.com", "nikhilkhurana354@gmail.com");

foreach($t_mails as $mails)
{
	$to = $mails;
	$message = "<p>here are the clients details</p>";
	
	if(!empty($name))
	{
		$message .= "<p>Name: " . $name . "</p>";
	}
	if(!empty($contact))
	{
		$message .= "<p>Mobile: " . $contact . "</p>";
	}
	if(!empty($email))
	{
		$message .= "<p>Email: " . $email . "</p>";
	}
	
	if(!empty($requirement))
	{
		$message .= "<p>Message: " . $requirement . "</p>";
	}
	
	$sub = "Online Enquiry";
	
	$headers  = 'MIME-Version: 1.0' . "\r\n";

    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	
	$headers .= 'From:  Nutrition Help Center <info@globalads.co.in>' . "\r\n";
	
	
mail($to, $sub, $message, $headers);

}
if(!mail)
{
	echo "Mail not sent";
	
}
else
{
	echo "<h1>Your Details has been submitted successfully</h1>";
	echo '<meta http-equiv="refresh" content="5; url=index.html" />';
	//header('Location: thanks.html');
	}


?>