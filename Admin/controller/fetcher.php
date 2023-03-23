<?php require '../controller/connnect.php';

$coursequery = $con->query("SELECT * FROM department ORDER BY  id desc LIMIT 3 ");
$coursedata = [];
if ($coursequery->num_rows > 0) {
    while ($courserow = $coursequery->fetch_assoc()) {
        array_push($coursedata, $courserow);
    }
}
$facultyquery = $con->query("SELECT * FROM faculty ORDER BY  id desc");
$facultydata = [];
if ($facultyquery->num_rows > 0) {
    while ($facultyrow = $facultyquery->fetch_assoc()) {
        array_push($facultydata, $facultyrow);
    }
}
$galleryquery = $con->query("SELECT * FROM gallery ORDER BY  id desc ");
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
function string_sub($str, $num)
{
    if (strlen($str) > $num) {
        return substr($str, 0, $num) . '...';
    } else {
        return $str;
    }
}

?>