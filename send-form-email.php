<?php
error_reporting(-1);
ini_set('display_errors', 'On');
if(isset($_POST['email'])) {

// EDIT THE 2 LINES BELOW AS REQUIRED
$email_to = "info@quickworksuae.com";
$email_subject = "Message From Website";
$email_from = "Website";

$email_message = "Form details below.\n\n";

function clean_string($string) {
  $bad = array("content-type","bcc:","to:","cc:","href");
  return str_replace($bad,"",$string);
}

$email_message .= "First Name: ".clean_string($_POST["first_name"])."\n";
$email_message .= "Last Name: ".clean_string($_POST["last_name"])."\n";
$email_message .= "Telephone: ".clean_string($_POST["telephone"])."\n";    
$email_message .= "Email: ".clean_string($_POST["email"])."\n";

$email_message .= "Message: ".clean_string($_POST["comments"])."\n";


// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
$retval = mail($email_to, $email_subject, $email_message, $headers); 

if( $retval == true ) {
  echo "Message sent successfully...";
  header("Location:http://www.pellucidstudios.com/");
}else {
  echo "Message could not be sent...";
}
?>

<?php
}
?>
    