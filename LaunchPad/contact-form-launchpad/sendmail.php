<?php
//composer require mailgun/mailgun-php:~1.7.2
# Include the Autoloader (see "Libraries" for install instructions)
require 'vendor/autoload.php';
use Mailgun\Mailgun;


if (isset($_POST['sname'])) {
$sname=$_POST['sname'];
$email=$_POST['email'];
$subject = $_POST['subject'];
$msg = $_POST['msg'];
$mgClient = new Mailgun('key-143fc4e771c69f63ceabe577aea84796');
//enter domain which you find in Default Password 
$domain = "mg.galacticlab.com";

# Make the call to the client.
$result = $mgClient->sendMessage($domain, array(
	"from" => "$sname <mailgun@mg.galacticlab.com>",
	"to" => "akshay.bawane@gmail.com",
	"subject" => "$subject",
	"html" => "$email<br><br>$msg"
));
echo '<script>
        window.location = "http://themes.galacticlab.com/html-cloud/launchpad/thank-you.html";
    </script>';
// echo "<script>alert('Email Sent Successfully.. !!');</script>";
}
?>

