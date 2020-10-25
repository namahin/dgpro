<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message successfully sent</title>
    <meta http-equiv="refresh" content="0; url=http://dgpro.mahin.xyz/contact.php">
</head>

<body>
    <?php
  $subject = "Mail from DGPRO website";
  $to = "mahin0w1@gmail.com";
  $message1 = 'Name: '.$_POST['name']."\n";
  $message1 .= "Email: ".$_POST['email']."\n";
  $message1 .= "Company: ".$_POST['company']."\n";
  $message1 .= "Phone: " .$_POST['phone']."\n";
  $message1 .= "Message: ".$_POST['message']."\n";
  if (isset($_POST['btn-send'])) {
       echo 'Message successfully sent';
       echo $name;
       echo $email;
       echo $company;
       echo $phone;
       echo $message;
       @mail($to,$subject,$message1);
    }
?>
<br>
    Redirecting...
</body>

</html>