<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message successfully sent</title>
    <!-- <meta http-equiv="refresh" content="0; url=http://dgpro.mahin.xyz/contact.php"> -->
</head>

<body>
    <?php
  $subject = "Mail from Dgpro.Studio website";
  $to = "dgproduct.studio@gmail.com";
  $msg = 'Name: '.$_POST['name']."\n";
  $msg .= "Email: ".$_POST['email']."\n";
  $msg .= "Company: ".$_POST['company']."\n";
  $msg .= "Phone: " .$_POST['phone']."\n";
  $msg .= "Message: ".$_POST['message']."\n";
  if (isset($_POST['btn-send'])) {
       echo 'Message successfully sent';
       echo $name;
       echo $email;
       echo $company;
       echo $phone;
       echo $message;
       @mail($to,$subject,$msg);
    }
?>
<br>
    Redirecting...
</body>

</html>