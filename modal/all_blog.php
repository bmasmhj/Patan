<section class='mb-5 py-5'>
</section>
<div class="container">
  
<section class="pt-5 pb-0">
  <div class="d-flex justify-content-center">
          <h3>Latest News</h3>
  </div>
  <div class="container">
    <div class="row mt-5">
      <?php
      foreach ($allblogdata as $key => $allblogdataval)
     echo '<div class="col-lg-4 col-md-6">
        <div class="card card-blog card-plain">
          <div class="position-relative">
            <div style="background-image: url('.$allblogdataval["image"].');" class="blog_img d-block blur-shadow-image">
            </div>
          </div>
          <div class="card-body px-1 pt-3">
            <a href="'.$base_url.'Preview/'.$allblogdataval["code"].'">
              <h5>
              '.string_sub($allblogdataval["title"], 37).'
              </h5>
            </a>
            <p class="text-gradient text-dark mb-2 text-sm">'.$allblogdataval["created_at"].'</p>
            <div class="blog-desc">  '.string_sub($allblogdataval["description"], 120).' </div>
            <a href="'.$base_url.'Preview/'.$allblogdataval["code"].'" class="btn btn-outline-primary btn-sm mt-2">Read More</a>
          </div>
        </div>
      </div>
      ';
      ?>
      </div>
</section>  
</div>