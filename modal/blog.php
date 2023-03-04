<section class="pt-5 pb-0">
  <div class="d-flex justify-content-center">
          <h3>Latest News</h3>
  </div>
  <div class="container">
    <div class="row mt-5">
      <?php
      foreach ($blogdata as $key => $blogdataval)
      echo '<div class="col-lg-4 col-md-6">
        <div class="card card-blog card-plain">
          <div class="position-relative">
            <div style="background-image: url('.$blogdataval["image"].');" class="blog_img d-block blur-shadow-image">
            </div>
          </div>
          <div class="card-body px-1 pt-3">
            <p class="text-gradient text-dark mb-2 text-sm">Entire Apartment • 3 Guests • 2 Beds</p>
            <a href="javascript:;">
              <h5>
                '.$blogdataval["title"].'
              </h5>
            </a>
            <p>
            '.$blogdataval["description"].'
            </p>
            <button type="button" class="btn btn-outline-primary btn-sm">From / Night</button>
          </div>
        </div>
      </div>
      ';
      ?>
      </div>
</section>