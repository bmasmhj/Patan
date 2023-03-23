
<div class="min-height-300 bg-primary position-absolute w-100"></div>
<?php 

 $url_array =  explode('/', $_SERVER['REQUEST_URI']) ;
    $url = end($url_array);  


    ?>

    <style>
      .nav_open{
        position: absolute;
        top: 0;
        left: 0;
        z-index: 999;
      }
    </style>
    
    <button class='nav_open d-lg-none' id='iconSidenavop' >open nav</button>

<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 my-3  ms-4 ps" id="sidenav-main">
  <div class="sidenav-header">
    <i class="fas  fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-lg-none" aria-hidden="true" id="iconSidenavcl"></i>

    <a class="navbar-brand m-0" href="" target="_blank">
      <span class="ms-1 font-weight-bold">PATAN</span>
    </a>
  </div>
  <hr class="horizontal dark mt-0">
  <div>
    <ul class="navbar-nav">
      <li class="nav-item">
         <a class="nav-link <?php  if( 'Dashboard' == $url){ echo" active "; }?>" href="<?php echo $base_url; ?>Admin/Dashboard">
          <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
           <i class="fa-duotone fa-house"></i>
          </div>
          <span class="nav-link-text ms-1">Dashboard</span>
        </a>
        <a class="nav-link <?php  if( 'Course' == $url){ echo" active "; }?>" href="<?php echo $base_url; ?>Admin/Course">
          <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fa-solid fa-book"></i>
          </div>
          <span class="nav-link-text ms-1">Courses</span>
        </a>
        <a class="nav-link  <?php  if( 'Photogallery' == $url){ echo" active "; }?> " href="<?php echo $base_url; ?>Admin/Photogallery">
          <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
           <i class="fa-solid fa-book"></i>
          </div>
          <span class="nav-link-text ms-1">Photogallary</span>
        </a>
        <a class="nav-link  <?php  if( 'Publication' == $url){ echo" active "; }?> " href="<?php echo $base_url; ?>Admin/Publication">
          <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
           <i class="fa-solid fa-image"></i>
          </div>
          <span class="nav-link-text ms-1">Publication</span>
        </a>
        <a class="nav-link  <?php  if( 'Blog' == $url){ echo" active "; }?> " href="<?php echo $base_url; ?>Admin/Blog">
          <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fa-sharp fa-solid fa-books"></i>
          </div>
          <span class="nav-link-text ms-1">Blog</span>
        </a>
        <a class="nav-link  <?php  if( 'Notice' == $url){ echo" active "; }?> " href="<?php echo $base_url; ?>Admin/Notice">
          <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fa-sharp fa-solid fa-envelopes-bulk"></i>
          </div>
          <span class="nav-link-text ms-1">Notice</span>
        </a>
        <a class="nav-link  <?php  if( 'Faculities' == $url){ echo" active "; }?> " href="<?php echo $base_url; ?>Admin/Faculities">
          <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
          </div>
          <span class="nav-link-text ms-1">Faculties</span>
        </a>
        <a class="nav-link  <?php  if( 'Admstaff' == $url){ echo" active "; }?> " href="<?php echo $base_url; ?>Admin/Admstaff">
          <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
          </div>
          <span class="nav-link-text ms-1">AdministrationStaff</span>
        </a>
        <a class="nav-link  <?php  if( 'Professor' == $url){ echo" active "; }?> " href="<?php echo $base_url; ?>Admin/Professor">
          <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
          </div>
          <span class="nav-link-text ms-1">Professor Staff</span>
        </a>
        <a class="nav-link  <?php  if( 'CampusChief' == $url){ echo" active "; }?> " href="<?php echo $base_url; ?>Admin/CampusChief">
          <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
          </div>
          <span class="nav-link-text ms-1">Campus Chief</span>
        </a>
      </li>
    </ul>
  </div>
</aside>

<script>
  $(document).ready(function(){
    $("#iconSidenavop").click(function(){
      // $(".sidenav").toggleClass("d-none");
    // change transform: translateX(-17.125rem); into (0rem)
      $(".sidenav").css("transform", "translateX(0rem)");
    });
    $("#iconSidenavcl").click(function(){
      // $(".sidenav").toggleClass("d-none");
    // change transform: translateX(-17.125rem); into (0rem)
      $(".sidenav").css("transform", "translateX(-17.125rem)");
    });
  });
</script>