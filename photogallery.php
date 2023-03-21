<?php require 'modal/header.php'; ?>
<?php require 'modal/nav.php'; ?>3
<section class='mb-5 py-5'>
  <div class="container mt-5">

  </div>
</section>
  <main id="main">
    <style>
.item {
    cursor: pointer;
  border: none;
  margin-bottom: 30px;
}
.item .item-wrap {
  display: block;
  position: relative;
  overflow: hidden;
}
.item .item-wrap:after {
  z-index: 2;
  position: absolute;
  content: "";
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: rgba(0, 0, 0, 0.4);
  visibility: hidden;
  opacity: 0;
  transition: 0.3s all ease-in-out;
}
.item .item-wrap img {
  transition: 0.3s transform ease;
  transform: scale(1);
}
.item .item-wrap > .work-info {
  position: absolute;
  top: 50%;
  width: 100%;
  text-align: center;
  z-index: 3;
  transform: translateY(-50%);
  color: #fff;
  opacity: 0;
  visibility: hidden;
  margin-top: 20px;
  transition: 0.3s all ease;
}
.item .item-wrap > .work-info h3 {
  font-size: 20px;
  margin-bottom: 0;
}
.item .item-wrap > .work-info span {
  font-size: 14px;
  text-transform: uppercase;
  letter-spacing: 0.2rem;
}
.item .item-wrap:hover {
  text-decoration: none;
}
.item .item-wrap:hover img {
  transform: scale(1.05);
}
.item .item-wrap:hover:after {
  opacity: 1;
  visibility: visible;
}
.item .item-wrap:hover .work-info {
  margin-top: 0px;
  opacity: 1;
  visibility: visible;
}
.filters a {
  text-decoration: none;
  color: #000;
  display: inline-block;
  padding-left: 10px;
  padding-right: 10px;
  position: relative;
}
.filters a:hover, .filters a:focus, .filters a:active {
  text-decoration: none;
}
.filters a:hover:before {
  content: "";
  position: absolute;
  left: 10px;
  right: 10px;
  bottom: 0;
  height: 1px;
  background-color: #000;
}
.filters a.active {
  color: #000;
}
.filters a.active:before {
  content: "";
  position: absolute;
  left: 10px;
  right: 10px;
  bottom: 0;
  height: 1px;
  background-color: #000;
}
.box {
    margin: auto;
    top: 25%;
    width: 50%;
    position: relative;
}
.closebtn {
     position: absolute;
    top: 25%;
    top: 8px;
    /* line-height: 2px; */
    font-weight: 900;
    right: 16px;
    font-size: 36px;
    cursor: pointer;
    -webkit-text-fill-color: white;
    -webkit-text-stroke-width: 1.3px;
    -webkit-text-stroke-color: black;
}
.portfolio-boxsize{
    max-width : 80%;
        padding-right: var(--bs-gutter-x,12px);
    padding-left: var(--bs-gutter-x,12px);
    margin-right: auto;
    margin-left: auto;
}

.portfolio #portfolio-flters {
    padding: 0;
    margin: 0 auto 25px auto;
    list-style: none;
    text-align: center;
    background: #fff;
    border-radius: 50px;
    padding: 2px 15px;
  }
  
  .portfolio #portfolio-flters li {
    cursor: pointer;
    display: inline-block;
    padding: 10px 15px;
    font-size: 14px;
    font-weight: 600;
    line-height: 1;
    text-transform: uppercase;
    color: #272829;
    margin-bottom: 5px;
    transition: all 0.3s ease-in-out;
  }
  
  .portfolio #portfolio-flters li:hover, .portfolio #portfolio-flters li.filter-active {
    color: #0563bb;
  }
  
  .portfolio #portfolio-flters li:last-child {
    margin-right: 0;
  }

  .filters-img{
      display: none;
  }
  .show{
      display: inline-block;
  }
  
    </style>
 

    <section class="mt-4 site-portfolio" id="blurthis">
      <div class="container">
        <div class="row mb-5 align-items-center">
          <div id="myBtnContainer" class="col-lg-12 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
      </div>      
         
        </div>
        <div id="portfolio-grid" class="row no-gutter" data-aos="fade-up" data-aos-delay="200">
             <?php 
          foreach($gallerydata as $key => $gallerysname){ 
            $time = rand(0 ,4);
          ?>
          <div onclick="popimage('<?php echo $gallerysname['url']?>');"  class="item <?php echo $gallerysname['name']; ?> col-sm-6 col-md-4 col-lg-4">
            <div class="item-wrap fancybox">
              <div class="work-info">
                <h3 class='text-white'><?php echo $gallerysname['name']; ?></h3>
              </div>
              <img class="img-fluid w-100" src="<?php echo $gallerysname['url']?>" alt="<?php echo $gallerysname['name']; ?>">
            </div>
          </div>
          <?php }?>
           
        </div>
      </div>
    </section>
  


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<script>

  function popimage(imgsz) {
    document.getElementById('model').style.display = "block";
    var expandImg = document.getElementById("expandedImg");
    var imgText = document.getElementById("imgtext");
    var url = imgsz;
    var urls = url.replace('")',' '); 
    expandImg.src = urls;
    expandImg.parentElement.style.display = "flex";
    stop();
  }
  function stop(){
    document.getElementById("blurthis").style.filter = "blur(10px)";
    var body = document.body.style.overflow = "hidden";
  }
  
  function hide(){
    document.getElementById("model").style.display = "none";
    document.getElementById("blurthis").style.filter = "none";
    var body = document.body.style.overflow = "scroll";

  }

  
</script>
<div class="modal" tabindex="-1" role="dialog" id="model" style="display: none;">
      <div class="box" style="display: flex;">
        <span onclick="hide()" class="closebtn">×</span>
        <img id="expandedImg" style="width:100%" src="">
        <div id="imgtext"></div>
      </div>
      
    </div>

  <script src="https://bimash.com.np/Projects/Travel/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="https://bimash.com.np/Projects/Travel/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="https://bimash.com.np/Projects/Travel/assets/js/main.js"></script>
<?php require 'modal/footer.php'; ?>
