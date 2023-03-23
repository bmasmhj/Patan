<?php require '../../controller/connnect.php';


if(isset($_GET['delete_staff'])){
    $id = $_GET['delete_staff'];
    $sql = "DELETE FROM `staff` WHERE id = '$id'";
    if($con->query($sql)){
        header('Location: ../Admstaff');
    } 
}
else if(isset($_GET['delete_prof'])){
    $id = $_GET['delete_prof'];
    $sql = "DELETE FROM `professor` WHERE id = '$id'";
    if($con->query($sql)){
        header('Location: ../Professor');
    } 
}
else if(isset($_GET['delete_campuscheif'])){
    $id = $_GET['delete_campuscheif'];
    $sql = "DELETE FROM `campuscheif` WHERE id = '$id'";
    if($con->query($sql)){
        header('Location: ../CampusChief');
    } 
}
else if(isset($_GET['delete_faculty'])){
    $id = $_GET['delete_faculty'];
    $sql = "DELETE FROM `faculty` WHERE id = '$id'";
    if($con->query($sql)){
        header('Location: ../Faculities');
    } 
}
else if(isset($_GET['delete_blog'])){
    $id = $_GET['delete_blog'];
    $sql = "DELETE FROM `blog` WHERE id = '$id'";
    if($con->query($sql)){
        header('Location: ../Blog');
    } 
}
else if(isset($_GET['delete_course'])){
    $id = $_GET['delete_course'];
    $sql = "DELETE FROM `department` WHERE id = '$id'";
    if($con->query($sql)){
        header('Location: ../Course');
    } 
}
else if(isset($_GET['delete_gallery'])){
    $id = $_GET['delete_gallery'];
    $sql = "DELETE FROM `gallery` WHERE id = '$id'";
    if($con->query($sql)){
        header('Location: ../Photogallery');

    } 
}
else if(isset($_GET['delete_notice'])){
    $id = $_GET['delete_notice'];
    $sql = "DELETE FROM `notice` WHERE id = '$id'";
    if($con->query($sql)){
        header('Location: ../Notice');
    } 
}

else if(isset($_GET['delete_publication'])){
    $id = $_GET['delete_publication'];
    $sql = "DELETE FROM `publication` WHERE id = '$id'";
    if($con->query($sql)){
        header('Location: ../Publication');
    } 
}
