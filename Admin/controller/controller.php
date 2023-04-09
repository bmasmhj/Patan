<?php 
 require '../../controller/connnect.php';
     
if(isset($_POST['un_id'])){ 
    // File upload configuration 
    print_r($_POST);
    $targetDir = "uploads/";
    $title = $_POST['title'];
    $allowTypes = array('jpg','png','jpeg','gif'); 
    $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = ''; 
    $fileNames = array_filter($_FILES['files']['name']); 
    $randmo = substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyz", 5)), 0, 10);
    if(!empty($fileNames)){ 
        foreach($_FILES['files']['name'] as $key=>$val){ 
            // File upload path 
            $fileName = basename($_FILES['files']['name'][$key]); 
            $targetFilePath = $targetDir . $randmo.$fileName; 
             
            // Check whether file type is valid 
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
            if(in_array($fileType, $allowTypes)){ 
                // Upload file to server 
                if(move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)){ 
                    // Image db insert sql 
                    $insertValuesSQL = 'https://bimash.com.np/Projects/Patan/Admin/controller/uploads/'.$randmo.$fileName; 
                    if(!empty($insertValuesSQL)){ 
                         // Insert image file name into database 
                        $insert = $con->query("INSERT INTO gallery (`url` , `name` ) VALUES ( '$insertValuesSQL' , '$title') "); 
                        if($insert){ 
                            $statusMsg = "Files are uploaded successfully.".$errorMsg; 
                        }else{ 
                            $statusMsg = "Sorry, there was an error uploading your file."; 
                        } 
                    }else{ 
                        $statusMsg = "Upload failed! ".$errorMsg; 
                    } 
                }else{ 
                    $errorUpload .= $_FILES['files']['name'][$key].' | '; 
                } 
            }else{ 
                $errorUploadType .= $_FILES['files']['name'][$key].' | '; 
            } 
        } 
         
        // Error message 
        $errorUpload = !empty($errorUpload)?'Upload Error: '.trim($errorUpload, ' | '):''; 
        $errorUploadType = !empty($errorUploadType)?'File Type Error: '.trim($errorUploadType, ' | '):''; 
        $errorMsg = !empty($errorUpload)?'<br/>'.$errorUpload.'<br/>'.$errorUploadType:'<br/>'.$errorUploadType; 
         
     
    }else{ 
        $statusMsg = 'Please select a file to upload.'; 
    } 
} 
 
?>