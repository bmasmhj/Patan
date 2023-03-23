<?php require "modal/header.php" ?>
<div class="row">
    <div class="col-md-2">
<?php require "modal/nav.php" ?>
</div>
<div class="col-md-10 mt-5">
<div class="container">
    <div class="card p-3">
      <div class=' d-flex justify-content-between'>
       <h4>Blog</h4>
       <a href='AddBlog' class='btn btn-add btn-success'>Add Blog</a>
      </div>
        
    </div>
</div>
<div class="container mt-3">
<div class="row">
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
            <br/>
            <a href="'.$base_url.'Admin/EditBl?og='.$allblogdataval["code"].'" class="btn btn-outline-primary btn-sm mt-2">Edit Blog</a>
            <a href="controller/del.php?delete_blog='.$allblogdataval["id"].'" class="btn btn-outline-primary btn-sm mt-2">Delete Blog</a>
          </div>
        </div>
      </div>
      ';
      ?>
</div>
</div>
<?php require "modal/footer.php" ?>
