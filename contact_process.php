<html>
<body>
<?php

    $to = "omariio1000@gmail.com";
    $from = $_POST['email'];
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    //$number = $_POST['number'];         //you don't have a field called number
    $cmessage = $_POST['message'];

    //$headers = "From: $from";
	$headers = "From: " . $from; //. "\r\n";
	//$headers .= "Reply-To: ". $from . "\r\n";
	//$headers .= "MIME-Version: 1.0\r\n";
	//$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $subject = "You have a message from your website!";

    $logo = 'img/logo.png';
    $link = 'https://omarpdxpics.com';

	/*$body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Express Mail</title></head><body>";
	$body .= "<table style='width: 100%;'>";
	$body .= "<thead style='text-align: center;'><tr><td style='border:none;' colspan='2'>";
	$body .= "<a href='{$link}'><img src='{$logo}' alt=''></a><br><br>";
	$body .= "</td></tr></thead><tbody><tr>";
	$body .= "<td style='border:none;'><strong>Name:</strong> {$name}</td>";
	$body .= "<td style='border:none;'><strong>Email:</strong> {$from}</td>";
	$body .= "</tr>";
	$body .= "<tr><td style='border:none;'><strong>Subject:</strong> {$csubject}</td></tr>";
	$body .= "<tr><td></td></tr>";
	$body .= "<tr><td colspan='2' style='border:none;'>{$cmessage}</td></tr>";
	$body .= "</tbody></table>";
	$body .= "</body></html>";*/
    $body = $cmessage;

	//$echo ($from); 
    $send = mail($to, $subject, $body, $headers);
    
    if($send)
        echo '<div > Thanks for contacting us, will get back to you shortly!</div>';
    else
        echo '<div > Sorry something went wrong, try to contact us again later.</div>';

?>
</body>
</html>