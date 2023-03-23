<?php require '../../controller/connnect.php';
$randmo = substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyz", 5)), 0, 10);

if(isset($_POST['update_blog'])){
    $title = str_replace("'","\'", $_POST['title']);
    $description = str_replace("'","\'", $_POST['description']);
    $fulldesc = str_replace("'","\'", $_POST['fulldesc']);
    $fulldesc = str_replace('"controller/uploads/','"https://bimash.com.np/Projects/Patan/Admin/controller/uploads/' ,  $fulldesc);
    $code = str_replace("'","\'", $_POST['blogid']);
    if(isset($_FILES['image'])){
        $file = $randmo.$_FILES["image"]["name"];
        $file_tmp = $_FILES["image"]["tmp_name"];
        if($file_tmp != '' ){
            move_uploaded_file($file_tmp, "uploads/".$file);
            $image = "https://bimash.com.np/Projects/Patan/Admin/controller/uploads/" . $file;
        }else{
            $image = $_POST['prev_img'];
        }
    }
    else{
        $image = $_POST['prev_img'];
    }
    $sql = "UPDATE `blog` SET `image` = '$image', `description` = '$description', `title` = '$title' , `fulldesc` = '$fulldesc' WHERE `blog`.`code` = '$code' ";
    if($con->query($sql)){
         header('Location: ../Blog');
    } 
}
else if(isset($_POST['update_course'])){
    $department_name =str_replace("'","\'",$_POST['coursetitle']);
    $names = str_replace('Department of', '', $department_name);
    $name = str_replace('Bachelor in', '', $names);
    $code =str_replace("'","\'",$_POST['code']);
    $semester =str_replace("'","\'",$_POST['semester']);
    $course_id =str_replace("'","\'",$_POST['facutly']);
    $fulldesc =str_replace("'","\'",$_POST['fulldesc']);
    $description =str_replace("'","\'",$_POST['description']);
    $mobdesc = 'https://bimash.com.np/Projects/Patan/MobileDesc?b='.$code;
    // $sql = "INSERT INTO `department`( `department_name` , `course_id` , `description` , `semester` , `code` , `name` , `mobdesc` , `fulldesc` ) VALUES ( '$department_name' , '$course_id' , '$description' , '$semester' , '$code' , '$name' , '$mobdesc' , '$fulldesc' )";
    $sql = "UPDATE `department` SET `department_name` = '$department_name', `course_id` = '$course_id', `description` = '$description', `semester` = '$semester', `code` = '$code', `name` = '$name', `mobdesc` = '$mobdesc', `fulldesc` = '$fulldesc' WHERE `department`.`code` = '$code'";
    if($con->query($sql)){
        header('Location: ../Course');
        // echo 'p';
    } 
}

?>