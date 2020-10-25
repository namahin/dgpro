<?php 

    if(isset($_POST['btn-send']))
    {
       $UserName = $_POST['name'];
       $Email = $_POST['email'];
       $Company = $_POST['company'];
       $Number = $_POST['phone'];
       $Msg = $_POST['message'];
       $Subject = 'Mail from DGPRO website';

       if(empty($UserName) || empty($Email) || empty($Company) || empty($Number) || empty($Msg))
       {
           header('location:contact.php?error');
       }
       else
       {
           $to = "mahin0w1@gmail.com";

           if(mail($to,$Subject,$Msg,$Email,$Number))
           {
               header("location:contact.php?success");
           }
       }
    }
    else
    {
        header("location:contact.php");
    }
?>