<?php
    
    $name = $_POST['name'];
    $email= $_POST['email'];
    $date= $_POST['message'];
    
    //email Recieved
    $to = "hr@avtarspace.com";

    //email subject
    $subject = ' Avtar Space Technology from avtarspace.com';
    
    $headers = 'From: '.$email . "\r\n";


    $txt = "Name : ".$name . "\r\n" ."Email : ".$email . "\r\n". "Date : " . $date;
    
    if(mail($to, $subject, $txt , $headers)){
        
        header('Location: ../index.php');
        
    }
    else{
         echo "Failed To Send Mail";
    }

?>