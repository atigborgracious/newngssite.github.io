<?php
error_reporting(-1);
ini_set('display_errors', 'On');
if(isset($_POST['email'])) {

// EDIT THE 2 LINES BELOW AS REQUIRED
$email_to = "atigborgracious@gmail.com";
$email_subject = "Message From Website";
$email_from = "Website";

$email_message = "Form details below.\n\n";

function clean_string($string) {
  $bad = array("content-type","bcc:","to:","cc:","href");
  return str_replace($bad,"",$string);
}

$email_message .= "Name: ".clean_string($_POST["full_name"])."\n";
$email_message .= "Telephone: ".clean_string($_POST["telephone"])."\n";    
$email_message .= "Email: ".clean_string($_POST["email"])."\n";

$email_message .= "Message: ".clean_string($_POST["comments"])."\n";


// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
mail($email_to, $email_subject, $email_message, $headers); 
?>


<center>
<!--img src="img/logo.png" /-->
  <br>
  <br>
  Thank you for contacting us.  We will be in touch.<br>
<br>
 <a href="index.html">HOME</a></center>

<?php
}
?>
    
    
 