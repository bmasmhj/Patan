
<section class="py-5 ">
  <div class="container">
    <div class="row">
      <div class="col-md-8 ms-auto me-auto text-center">
        <h3>Our Courses</h3>
      </div>
    </div>
    <div class="row mt-5">

    <?php 
    foreach ($coursedata as $key => $coursedataval)
     echo ' <a href="Detail?id='.$coursedataval["id"].'" class="col-lg-4 col-md-6 mb-5 courses icon-move-right"  data-aos="fade-up" data-aos-delay="300">
        <div class="card course">
          <div class="card-body border-radius-lg position-relative overflow-hidden pb-4 px-5">
            <h5 class="mt-2">'.$coursedataval["name"].'</h5>
            <p class="text-justify mb-3"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem deleniti vitae repudiandae eum reiciendis quia ratione sed eius excepturi, expedita nesciunt qui iure voluptatem. Eligendi consectetur beatae velit eum itaque! </p>
            <div class="font-weight-bold text-xs text-uppercase font-weight-bolder text-info ">
                See more
            <i class="fas fa-arrow-right text-xs ms-1"></i>
            </div>
          </div>
        </div>
      </a>';
      ?>
     
     <a href="courses.php" class="text-center text-info" >See more</a>
    </div>
  </div>
</section>