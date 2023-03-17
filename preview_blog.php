<?php require 'modal/header.php'; ?>
<?php require 'modal/nav.php'; ?>
<section class='mb-5 py-5'>
  <div class="container mt-5">

  </div>
</section>
<div class="container">
    <div class="row">
        <div class="col-9">
              <?php
                $directoryURI = $_SERVER['REQUEST_URI'];
                $path = parse_url($directoryURI, PHP_URL_PATH);
                $components = explode('/', $path);
                $name = $components[$components_placement];
                if($name !== '' ){
                    echo get_blog_detail($name);
                }else{
                    echo ' <h1>Something went wrong</h1>';
                }
            ?>
           
            <?php ?>
        </div>
        <div class="col-3">
            <div class="card p-2 mx-3">
                <h4>Top News</h4>
                <div class="card-body">
                  <?php foreach($topblogdata as $key=> $topblogdataval) {
                    echo '<a href="'.$base_url.'Preview/'.$topblogdataval["code"].'" class="h6">'.$topblogdataval["title"].'</a>
                          <hr>';
                    }?>
                </div>
            </div>
            <?php require 'modal/newsletter.php' ?>
        </div>
    </div>
</div>



<?php require 'modal/contact-us.php'; ?>
<?php require 'modal/footer.php'; ?>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
</body>
</html>

