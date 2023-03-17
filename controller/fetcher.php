<?php require 'controller/connnect.php';


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
     $topblogquery = $con->query("SELECT * FROM blog ORDER BY  id desc LIMIT 8 ");
    $topblogdata = [];
    if($topblogquery->num_rows > 0){
        while($topblogrow = $topblogquery->fetch_assoc()){
            array_push($topblogdata , $topblogrow);
        }
    }
    
    $allblogquery = $con->query("SELECT * FROM blog ORDER BY  id desc  ");
    $allblogdata = [];
        if($allblogquery->num_rows > 0){
        while($allblogrow = $allblogquery->fetch_assoc()){
            array_push($allblogdata , $allblogrow);
        }
    }


function get_course_detail($name){
    require 'controller/conn.php';
    $coursequery = $con->query("SELECT * FROM course WHERE code = '$name' ");
    $html = '';
    if($coursequery->num_rows > 0){
        while($courserow = $coursequery->fetch_assoc()){
            $html .= '<h1>'.$courserow['name'].'</h1>';
             $html .= '<h6>Faculty : <span class="text-secondary">'.$courserow["faculty"].'</span> </h6>';
            $html .= '<div class="course_detail">'.$courserow['description'].'</div>';
            return $html;
        }
    }else{
        echo ' <h1>404 Course Not Found</h1>';
    }
}

function get_blog_detail($name){
    require 'controller/conn.php';
    $blogquery = $con->query("SELECT * FROM blog WHERE code = '$name' ");
    $html = '';
    if($blogquery->num_rows > 0){
        while($blogrow = $blogquery->fetch_assoc()){
            $html .= ' 
            <h1 class="text-heading">'.$blogrow["title"].'</h1>
            <h6>Posted on : '.$blogrow["created_at"].'</h6>
            <img class="w-100 blog-img" src="'.$blogrow["image"].'" alt="jpg">
            <h6 class="mt-4">'.$blogrow["title"].'</h6>
            <div class="mt-3 text-justify">'.$blogrow["description"].'</div>
            ';
            return $html;
        }
    }else{
        echo ' <h1>404 Blog Not Found</h1>';
    }
}

function string_sub($str , $num ){
    if(strlen($str) > $num ){
        return substr($str , 0 , $num).'...';
    }else{
        return $str;
    }
}

?>
