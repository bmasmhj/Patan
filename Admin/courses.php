<?php require "modal/header.php" ?>
<div class="row">
    <div class="col-md-2">
<?php require "modal/nav.php" ?>
</div>
<div class="col-md-10 mt-5">
<div class="container">
    <div class="card p-3">
      <div class=' d-flex justify-content-between'>
       <h4>Courses</h4>
       <a href='AddCourse' class='btn btn-add btn-success'>ADD Course</a>
      </div>
        
    </div>
    <div class="row mt-5">
      <?php 
      foreach ($allcoursedata as $key => $allcoursedataval){
     echo ' <div class="col-lg-4 col-md-6 mb-5 courses icon-move-right"  data-aos="fade-up" data-aos-delay="300">
        <div class="card course">
          <div class="card-body border-radius-lg position-relative overflow-hidden pb-4 px-5">
            <h5 class="mt-2">'.$allcoursedataval["name"].'</h5>
            <div class="course-desc text-justify mb-3"> 
              '.Strip_tags(string_sub($allcoursedataval["description"] , 250)).'
             </div>
            <div onclick="window.location.href=\''.$base_url.'Detail/'.$allcoursedataval["code"].'\'" class="font-weight-bold text-xs text-uppercase font-weight-bolder text-info ">
                See more
            <i class="fas fa-arrow-right text-xs ms-1"></i>
            </div>
            <div class="float-end">
              <a href="EditCour?se='.$allcoursedataval["code"].'" class="mx-3" ><i class="fa-solid fa-pen"></i></a> 
              <a href="controller/del.php?delete_course='.$allcoursedataval["id"].'"><i class="fa-solid fa-trash text-danger"></i></a>
            </div>
          </div>
        </div>
      </div>';
      }
      ?>
    </div>
</div>

<?php require "modal/footer.php" ?>