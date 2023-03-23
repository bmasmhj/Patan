<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://bimash.com.np/Projects/Patan/assets/css/style.css?v=1.2.2">
    <link rel="stylesheet" href="https://bimash.com.np/Projects/Patan/assets/css/main.css?v=1.2.2">
    <title>Patan Bca Guys</title>
</head>
<body>
    <style>
        img{
            width: 100%;
        }
    </style>
<div class="container mt-3">
<?php 
if(isset($_GET['c'])){
$name = $_GET['c'];
 require 'controller/connnect.php';
     $coursequery = $con->query("SELECT department.* , faculty.name AS faculty_name
FROM department
JOIN faculty ON department.course_id = faculty.id WHERE department.code = '$name';
    
    ");
    $html = '';
    if($coursequery->num_rows > 0){
        while($courserow = $coursequery->fetch_assoc()){
            $html .= '<h1>'.$courserow['department_name'].'</h1>';
            $html .= '<h6>Faculty : <span class="text-secondary">'.$courserow["faculty_name"].'</span> </h6>';
            $html .= '<div class="course_detail">'.$courserow['description'].'</div>';
            $html .= '<div class="course_detail">'.$courserow['fulldesc'].'</div>';
            echo $html;
        }
    }else{
        echo ' <h1>404 Course Not Found</h1>';
    }
}
else if(isset($_GET['b'])){
 require 'controller/connnect.php';
$name = $_GET['b'];

    $blogquery = $con->query("SELECT * FROM blog WHERE code = '$name' ");
    $html = '';
    if($blogquery->num_rows > 0){
        while($blogrow = $blogquery->fetch_assoc()){
            $html .= ' 
            <h1 class="text-heading">'.$blogrow["title"].'</h1>
            <h6>Posted on : <span class="text-secondary">'.$blogrow["created_at"].'</span> </h6>
            
            <img class="w-100 blog-img" src="'.$blogrow["image"].'" alt="jpg">
            <h6 class="mt-4">'.$blogrow["title"].'</h6>
            <div class="mt-3 text-justify">'.$blogrow["description"].'</div> 
            <div class="mt-3 text-justify">'.$blogrow["fulldesc"].'</div> 
            ';
            echo $html;
        }
    }else{
        echo ' <h1>404 Blog Not Found</h1>';
    }
    
}
else{
    echo ' <h1>404 Request URL Not Found</h1>';

}
?>
</div>