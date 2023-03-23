
<?php

$fileNames = $_FILES['file']['name'];
$renamed =  substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyz", 5)), 0, 10);
$fileName = $renamed.$fileNames;
$fileType = $_POST['filetype'];
if($fileType == 'image'){
  $validExtension = array('png','jpeg','jpg');
}
$uploadDir = "uploads/".$fileName;
$fileExtension = pathinfo($uploadDir, PATHINFO_EXTENSION);
$fileExtension = strtolower($fileExtension);
if(in_array($fileExtension, $validExtension)){
   if(move_uploaded_file($_FILES['file']['tmp_name'],$uploadDir)){ 
    echo $fileName;
  }
}
?>
