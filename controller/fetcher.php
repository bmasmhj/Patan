<?php require 'controller/conn.php';


// $query = $db->query("SELECT * FROM picture WHERE uniqid = '$id' ORDER BY id DESC");
// $data = [];
//     if($query->num_rows > 0){
//         while($row = $query->fetch_assoc()){
//             array_push($data , $row)
//         }
//     }else{
//         echo 'no data';
//     }

$coursequery = $con->query("SELECT * FROM course ORDER BY  id desc LIMIT 3 ");
$coursedata = [];
    if($coursequery->num_rows > 0){
        while($courserow = $coursequery->fetch_assoc()){
            array_push($coursedata , $courserow);
        }
    }
    
$allcoursequery = $con->query("SELECT * FROM course ORDER BY  id desc  ");
$allcoursedata = [];
    if($allcoursequery->num_rows > 0){
        while($allcourserow = $allcoursequery->fetch_assoc()){
            array_push($allcoursedata , $allcourserow);
        }
    }
    $blogquery = $con->query("SELECT * FROM blog ORDER BY  id desc LIMIT 3 ");
$blogdata = [];
    if($blogquery->num_rows > 0){
        while($blogrow = $blogquery->fetch_assoc()){
            array_push($blogdata , $blogrow);
        }
    }
    
$allblogquery = $con->query("SELECT * FROM blog ORDER BY  id desc  ");
$allblogdata = [];
    if($allblogquery->num_rows > 0){
        while($allblogrow = $allblogquery->fetch_assoc()){
            array_push($allblogdata , $allblogrow);
        }
    }
?>
