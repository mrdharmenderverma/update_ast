<?php
    if(isset($_POST['button']) && isset($_FILES['attachment']))
    {
        //email Recieved
        $recipient_email = 'hr@avtarspace.com'; //recipient email address
        
        $name = $_POST['sender_name'];
        $company_name = $_POST['company_name'];
        $email= $_POST['sender_email'];
        $select_developer = $_POST['select_developer'];
        $project_overview= $_POST['project_overview'];
        
        //Get uploaded file data using $_FILES array
        $tmp_name = $_FILES['attachment']['tmp_name']; // get the temporary file name of the file on the server
        $fname     = $_FILES['attachment']['name']; // get the name of the file
        $size     = $_FILES['attachment']['size']; // get size of the file for size validation
        $type     = $_FILES['attachment']['type']; // get type of the file
        $error     = $_FILES['attachment']['error']; // get the error (if any)
     
        //validate form field for attaching the file
        if($error > 0)
        {
            die('Upload error or No files uploaded');
        }
     
        //read from the uploaded file & base64_encode content
        $handle = fopen($tmp_name, "r"); // set the file handle only for reading the file
        $content = fread($handle, $size); // reading the file
        fclose($handle);                 // close upon completion
     
        $encoded_content = chunk_split(base64_encode($content));
        $boundary = md5("random"); // define boundary with a md5 hashed value
     
        //header
        $headers = "MIME-Version: 1.0\r\n"; // Defining the MIME version
        // $headers .= "From:".$from_email."\r\n"; // Sender Email
        $headers .= "Reply-To: ".$email."\r\n"; // Email address to reach back
        $headers .= "Content-Type: multipart/mixed;"; // Defining Content-Type
        $headers .= "boundary = $boundary\r\n"; //Defining the Boundary
             
        //plain text
        $body = "--$boundary\r\n";
        $body .= "Content-Type: text/plain; charset=ISO-8859-1\r\n";
        $body .= "Content-Transfer-Encoding: base64\r\n\r\n";
        $body .= chunk_split(base64_encode("Name: " . $name."\r\n"));
        $body .= chunk_split(base64_encode("Company Name: ".$company_name."\r\n"));
        $body .= chunk_split(base64_encode("Company Email: ".$email."\r\n"));
        $body .= chunk_split(base64_encode("Profile: ". $select_developer."\r\n"));
        $body .= chunk_split(base64_encode("Developer Detail: ". $project_overview));
             
        //attachment
        $body .= "--$boundary\r\n";
        $body .="Content-Type: $type; name=".$fname."\r\n";
        $body .="Content-Disposition: attachment; filename=".$fname."\r\n";
        $body .="Content-Transfer-Encoding: base64\r\n";
        $body .="X-Attachment-Id: ".rand(1000, 99999)."\r\n\r\n";
        $body .= $encoded_content; // Attaching the encoded file with email
        
        //email subject
        $subject = 'Hire Developer Avtar Space Technology from avtarspace.com';
        
        if(mail($recipient_email, $subject, $body, $headers)){
            
            header('Location: ../index.php');
            
        }
        else{
             echo "Failed To Send Mail";
        }
    }
?>