<?php
    $toEmail='hr@avtarspace.com';
    
    $attachmentUploaDir ='uploads/';
    $allowFileTypes =array('pdf', 'doc',  'docx');
    
    $postData = $uploadedFile = $statusMsg = $valErr ='';
    $msgClass ='errordiv';
    
    if(isset($_POST['button'])){
        $postData =$_POST;
        $name = trim($_POST['sender_name']);
        $company_name = trim($_POST['company_name']);
        $select_developer = trim($_POST['sender_email']);
        $name = trim($_POST['select_developer']);
        $project_overview = trim($_POST['project_overview']);
        // $name = trim($_POST['attachment']);
        
        
        // UPLOAD FILE ATTACHEMENT
        if(!empty($_FILES['attachment']['name'])){
            //file path config
            $targetDir = $attachmentUploaDir;
            $fileName = basename($_FILES['attachement']['name']);
            $targetFilePath = $targetDir . $fileName;
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
            
            //ALLOW CERTAIN FILE FORMATS
            if(in_array($fileType, $allowFileTypes)){
                //upload file to server
                if(move_uploaded_file($_FILES['attachment']['temp_name'], $targetFilePath)){
                    $uploadedFile =$targetFilePath;
                }else{
                    $uploadStatus = 0;
                    $statusMsg = "Sorry, there was an error uploading file";
                }
            }else{
                $uploadStatus = 0;
                $statusMsg = "Sorry, only" .implode('/', $allowFileTypes). "filesare allowed to upload.";
                
            }
            
        }
        if($uploadStatus == 1){
            //email subject
            $emailSubject = 'Hire Developer Avtar Space Technology from avtarspace.com';
            
            //email message
            $htmlContent = "Name : ".$name . "\r\n" ."Company Name : ".$company_name . "\r\n" ."Email : ".$email . "\r\n". "Profile : ".$select_developer . "\r\n". "Cover Letter : ".$project_overview ;
            
            $headers = 'From: '.$fromName . "\r\n";
            
            //add attachment to email
            if(!empty($uploadedFile) && file_exists($uploadFile)){
                // Boundry
                $semi_rand = md5(time());
                $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";
                
                //headers for attachment 
                $headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . "boundary=\"  {$mime_boundary}\"";
                
                //multipart boundary
                $message = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" . "Content-transfer-Encoding: 7bit\n\n" . $htmlContent . "\n\n";
                
                //preparing attachment 
                if(is_file($uploadedFile)){
                    $message .= "--{$mime_boundary}\n";
                    $fp = @fopen($uploadedFile, "rb");
                    $data = @fread($fp, filesize($uploadedFile));
                    @fclose($fp);
                    $data = chunk_split(base64_encode($data));
                    $message .= "Content-Type: application/octet-stream; name=\"" .basename($uploadFile)."\"\n".
                    "Content-Description: ".basename($uploadedFile). "\n".
                    "Content-Description: attachment;\n" . " filename=\"".basename($uploadedFile)."\";
                    size=".filename($uploadedFile).";\n".
                    "Content-Transfer-Encoding: base64\n\n" .$data ."\n\n";
                }
                $message .= "--{$mime_boundary}--";
                $returnpath = "-f" . $email;
                
                // send mail
                $mail = mail($toEmail, $emailSubject, $message, $headers, $returnpath);
                
                
                // delete attachement file from the server
                @unlink($uploadedFile);
            }else{
                // set content-type header for sending html email
                $headers .= "\r\n". "MIME-Version: 1.0";
                $headers .="\r\n". "Content-type:text/html;charset=UFT-8";
                
                // SEND Mail
                $mail = mail($toEmail, $emailSubject, $htmlContent, $headers);
            }
            
            // if mail not sent
            if($mail){
                $statusMsg = 'Thanks! Submitted Successfully';
                $msgClass = 'succdiv';
                $postData = '';
            }else{
                $statusMsg = 'Failed to send';
            }
        }
        
    }else{
        $valErr =!empty($valErr)?'<br/>'.trim($valErr, '<br/>'):'';
		$statusMsg = 'all filed are necessary';
        
    }
?>