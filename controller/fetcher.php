
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

$coursequery = $con->query("SELECT * FROM department ORDER BY  id desc LIMIT 3 ");
$coursedata = [];
if ($coursequery->num_rows > 0) {
    while ($courserow = $coursequery->fetch_assoc()) {
        array_push($coursedata, $courserow);
    }
}
$galleryquery = $con->query("SELECT * FROM gallery ORDER BY  id desc LIMIT 3 ");
$gallerydata = [];
if ($galleryquery->num_rows > 0) {
    while ($galleryrow = $galleryquery->fetch_assoc()) {
        array_push($gallerydata, $galleryrow);
    }
}
$staffquery = $con->query("SELECT * FROM staff  ");
$staffdata = [];
if ($staffquery->num_rows > 0) {
    while ($staffrow = $staffquery->fetch_assoc()) {
        array_push($staffdata, $staffrow);
    }
}
$noticequery = $con->query("SELECT * FROM notice ORDER BY id desc ");
$noticedata = [];
if ($noticequery->num_rows > 0) {
    while ($noticerow = $noticequery->fetch_assoc()) {
        array_push($noticedata, $noticerow);
    }
}
$publicationquery = $con->query("SELECT * FROM publication  ");
$publicationdata = [];
if ($publicationquery->num_rows > 0) {
    while ($publicationrow = $publicationquery->fetch_assoc()) {
        array_push($publicationdata, $publicationrow);
    }
}
$profesquery = $con->query("SELECT * FROM professor  ");
$profesdata = [];
if ($profesquery->num_rows > 0) {
    while ($profesrow = $profesquery->fetch_assoc()) {
        array_push($profesdata, $profesrow);
    }
}

$campuscheifquery = $con->query("SELECT * FROM campuscheif ORDER BY id desc ");
$campuscheifdata = [];
if ($campuscheifquery->num_rows > 0) {
    while ($campuscheifrow = $campuscheifquery->fetch_assoc()) {
        array_push($campuscheifdata, $campuscheifrow);
    }
}


$allcoursequery = $con->query("SELECT * FROM department ORDER BY  id desc  ");
$allcoursedata = [];
if ($allcoursequery->num_rows > 0) {
    while ($allcourserow = $allcoursequery->fetch_assoc()) {
        array_push($allcoursedata, $allcourserow);
    }
}
$blogquery = $con->query("SELECT * FROM blog ORDER BY  id desc LIMIT 3 ");
$blogdata = [];
if ($blogquery->num_rows > 0) {
    while ($blogrow = $blogquery->fetch_assoc()) {
        array_push($blogdata, $blogrow);
    }
}
$topblogquery = $con->query("SELECT * FROM blog ORDER BY  id desc LIMIT 8 ");
$topblogdata = [];
if ($topblogquery->num_rows > 0) {
    while ($topblogrow = $topblogquery->fetch_assoc()) {
        array_push($topblogdata, $topblogrow);
    }
}

$allblogquery = $con->query("SELECT * FROM blog ORDER BY  id desc  ");
$allblogdata = [];
if ($allblogquery->num_rows > 0) {
    while ($allblogrow = $allblogquery->fetch_assoc()) {
        array_push($allblogdata, $allblogrow);
    }
}


function get_course_detail($name)
{
require 'controller/connnect.php';
//join department table and faculty with department.course_id and faculty.id
    $coursequery = $con->query("SELECT department.* , faculty.name AS faculty_name
FROM department
JOIN faculty ON department.course_id = faculty.id WHERE department.code = '$name';
    
    ");

    // $coursequery = $con->query("SELECT * FROM department  Join faculty WHERE code = '$name' ");
    $html = '';
    if ($coursequery->num_rows > 0) {
        while ($courserow = $coursequery->fetch_assoc()) {
            $html .= '<h1>' . $courserow['department_name'] . '</h1>';
            $html .= '<h6>Faculty : <span class="text-secondary">' . $courserow["faculty_name"] . '</span> </h6>';
            $html .= '<div class="course_detail">' . $courserow['description'] . '</div>';
            return $html;
        }
    } else {
        echo ' <h1>404 Course Not Found</h1>';
    }
}

function get_blog_detail($name)
{
    require 'controller/connnect.php';

    $blogquery = $con->query("SELECT * FROM blog WHERE code = '$name' ");
    $html = '';
    if ($blogquery->num_rows > 0) {
        while ($blogrow = $blogquery->fetch_assoc()) {
            $html .= ' 
            <h1 class="text-heading">' . $blogrow["title"] . '</h1>
            <h6>Posted on : ' . $blogrow["created_at"] . '</h6>
            <img class="w-100 blog-img" src="' . $blogrow["image"] . '" alt="jpg">
            <h6 class="mt-4">' . $blogrow["title"] . '</h6>
            <div class="mt-3 text-justify">' . $blogrow["description"] . '</div>
            ';
            return $html;
        }
    } else {
        echo ' <h1>404 Blog Not Found</h1>';
    }
}

function string_sub($str, $num)
{
    if (strlen($str) > $num) {
        return substr($str, 0, $num) . '...';
    } else {
        return $str;
    }
}


function get_faculties(){
   require 'controller/connnect.php';
    $html = '';
    $data = [];
    $html .= '<ul class="list-group">
        ';
    $sql = "SELECT  * FROM `faculty` ";
        $result = $con->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
            $html.='<li class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">
                        <a class="dropdown-item py-2 ps-3 border-radius-md" href="javascript:void()">
                            <div class="">
                                <div class="icon h-10 me-3 d-flex mt-1">
                                    <i class="ni ni-single-copy-04 text-gradient text-primary"></i>
                                </div>
                                <div class="w-100 d-flex align-items-center justify-content-between">
                                    <div>';
                                    $name = $row['name'];
                                    $fac_id = $row['id'];
                                    $html .= '<h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">'.$name.'</h6>';
                                    $n = array("name" => $name);
                                    $html .='
                                    </div>
                                </div>
                            </div>
                        </a>
                    ';
                        $sql2 = "SELECT  * FROM `department` WHERE course_id = '$fac_id'  ORDER BY id desc ";
                        $result2 = $con->query($sql2);
                        $html .='  <div class="dropdown-menu mt-0 py-3 px-2 mt-3">';
                        if ($result2 -> num_rows > 0) {
                            while ($row2 = $result2->fetch_assoc()) {
                                $data["name"][$name][] = $row2;
                                $html .='
                            <a class="dropdown-item ps-3 border-radius-md mb-1" href="'.$base_url.'Detail/'.$row2['code'].'">'.$row2['department_name'].'</a>
                        ';
                        }
                    }
                    $html .= '</div>
                    </li>';   


            }
        }
$html .=' 
    </ul>';

    return $html;
}