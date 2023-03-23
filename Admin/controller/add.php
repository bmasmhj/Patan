<?php require '../../controller/connnect.php';
$randmo = substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyz", 5)), 0, 10);

if(isset($_POST['add_staff'])){
    $designation = $_POST['designation'];
    $name = $_POST['name'];
    $number = $_POST['number'];
    $sql = "INSERT INTO `staff`(`designation`, `name`, `number`) VALUES ('$designation' , '$name' , '$number')";
    if($con->query($sql)){
        header('Location: ../Admstaff');

    } 
}
else if(isset($_POST['add_prof'])){
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $sql = "INSERT INTO `professor`( `name`, `subject`) VALUES ( '$name' , '$subject')";
    if($con->query($sql)){
        header('Location: ../Professor');
        
    } 
}
else if(isset($_POST['add_campuscheif'])){
    $name = $_POST['name'];
    $sql = "INSERT INTO `campuscheif`( `names`) VALUES ( '$name' )";
    if($con->query($sql)){
        header('Location: ../CampusChief');
    } 
}
else if(isset($_POST['add_faculty'])){
    $name = $_POST['name'];
    $sql = "INSERT INTO `faculty`( `name` ) VALUES ( '$name' )";
    if($con->query($sql)){
        header('Location: ../Faculities');
    } 
}
else if(isset($_POST['add_blog'])){
    $title = str_replace("'","\'" , $_POST['title']);
    $description = str_replace("'","\'" , $_POST['description']);
    $fulldesc = str_replace("'","\'" , $_POST['fulldesc']);
    $fulldesc = str_replace('"controller/uploads/','"https://bimash.com.np/Projects/Patan/Admin/controller/uploads/' ,  $fulldesc);



    $code = str_replace(' ', '', $title).$randmo;
    $code = str_replace('?', '', $code);
    $mobdesc = 'https://bimash.com.np/Projects/Patan/MobileDesc?b='.$code;
    $file = $randmo.$_FILES["image"]["name"];
    $file_tmp = $_FILES["image"]["tmp_name"];
    move_uploaded_file($file_tmp, "uploads/".$file);
    $image = "https://bimash.com.np/Projects/Patan/Admin/controller/uploads/" . $file;

    $sql = "INSERT INTO `blog`(`image`, `code`, `description` , `title`, `mobdesc` , `fulldesc`) VALUES ( '$image' , '$code' , '$description' , '$title' , '$mobdesc' ,'$fulldesc')";
    if($con->query($sql)){
         header('Location: ../Blog');
    } 

    // https://bimash.com.np/Projects/Patan/Admin/
}
else if(isset($_POST['add_course'])){
    $department_name = str_replace("'","\'",$_POST['coursetitle']);
    $names = str_replace('Department of', '', $department_name);
    $name = str_replace('Bachelor in', '', $names);
    $code = $randmo.str_replace(' ', '', $name);
    $semester = str_replace("'","\'",$_POST['semester']);
    $course_id = str_replace("'","\'",$_POST['facutly']);
    $fulldesc = str_replace("'","\'",$_POST['fulldesc']);
    $description = str_replace("'","\'",$_POST['description']);
    $mobdesc = 'https://bimash.com.np/Projects/Patan/MobileDesc?b='.$code;
    $sql = "INSERT INTO `department`( `department_name` , `course_id` , `description` , `semester` , `code` , `name` , `mobdesc` , `fulldesc` ) VALUES ( '$department_name' , '$course_id' , '$description' , '$semester' , '$code' , '$name' , '$mobdesc' , '$fulldesc' )";
    if($con->query($sql)){
        header('Location: ../Course');
    } 
}
else if(isset($_POST['add_notice'])){
    $title = $_POST['title'];
    $file = $randmo.$_FILES["file_input"]["name"];
    $file_tmp = $_FILES["file_input"]["tmp_name"];
    move_uploaded_file($file_tmp, "uploads/".$file);
    $file_tmp_url = "https://bimash.com.np/Projects/Patan/Admin/controller/uploads/" . $file;
    $sql = "INSERT INTO `notice`(`file`, `title`) VALUES ( '$file_tmp_url' , '$title' )";
    if($con->query($sql)){
        header('Location: ../Notice');
    } 
}

else if(isset($_POST['add_publication'])){
    $title = $_POST['title'];
    $issn = $_POST['issn'];
    $file = $randmo.$_FILES["file_input"]["name"];
    $file_tmp = $_FILES["file_input"]["tmp_name"];
    move_uploaded_file($file_tmp, "uploads/".$file);
    $file_tmp_url = "https://bimash.com.np/Projects/Patan/Admin/controller/uploads/" . $file;
    $sql = "INSERT INTO `publication`(`url`, `issn`, `title`) VALUES ( '$file_tmp_url' , '$issn', '$title' )";
    if($con->query($sql)){
        header('Location: ../Publication');
    } 
}

