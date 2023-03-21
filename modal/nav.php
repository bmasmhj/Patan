<div class="position-fixed w-100 bg-white z-index-3">
  <div class='d-flex align-items-center justify-content-center' style='min-height:100px'>
    <img style='max-height:70px' class='' src="https://seeklogo.com/images/T/tribhuvan-university-tu-logo-AD67A28902-seeklogo.com.png" alt="logog">
    <h1 class="text-center">Patan Multiple Campus</h1>
  </div>
  <nav class="navbar navbar-expand-lg navbar-light bg-white z-index-3 py-3">
    <div class="w-100 d-flex align-items-center justify-content-center">
      <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon mt-2">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </span>
      </button>
      <div class="collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0" id="navigation">
        <ul class="navbar-nav navbar-nav-hover mx-auto">
          <li class="nav-item  mx-5">
            <a href="<?php echo $base_url; ?>Home" class="nav-link nav_item p-0 d-flex justify-content-between cursor-pointer align-items-center">
              Home
            </a>
          </li>

          <li class="nav-item dropdown dropdown-hover mx-5">
            <a class="nav-link nav_item p-0 d-flex justify-content-between cursor-pointer align-items-center" id="dropdownMenuBlocks" data-bs-toggle="dropdown" aria-expanded="false" role="button">
              Faculties
            </a>
            <div class="dropdown-menu dropdown-menu-animation dropdown-lg dropdown-lg-responsive p-3 border-radius-lg mt-0 mt-lg-3" aria-labelledby="dropdownMenuBlocks">
              <div class="d-none d-lg-block">
                <?php echo get_faculties(); ?>
              </div>
            </div>
          </li>
          <li class="nav-item  mx-5">
            <a href="<?php echo $base_url; ?>PhotoGallery" class="nav-link nav_item p-0 d-flex justify-content-between cursor-pointer align-items-center">
              Photo Gallery
            </a>
          </li>
          
                  
    
          <li class="nav-item dropdown dropdown-hover mx-5">
            <a class="nav-link nav_item p-0 d-flex justify-content-between cursor-pointer align-items-center" id="dropdownMenuBlocks" data-bs-toggle="dropdown" aria-expanded="false" role="button">
              Organization Structure
            </a>
            <div class="dropdown-menu dropdown-menu-animation dropdown-lg dropdown-lg-responsive p-3 border-radius-lg mt-0 mt-lg-3" aria-labelledby="dropdownMenuBlocks">
              <div class="d-none d-lg-block">
                <ul class="list-group">
                  <li class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">
                    <a class="dropdown-item py-2 ps-3 border-radius-md" href="<?php echo $base_url; ?>Staff">
                      <div class="d-flex">
                        <div class="icon h-10 me-3 d-flex mt-1">
                          <i class="ni ni-single-copy-04 text-gradient text-primary"></i>
                        </div>
                        <div class="w-100 d-flex align-items-center justify-content-between">
                          <div>
                            <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0" >Administration of Staff</h6>
                          </div>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">
                    <a class="dropdown-item py-2 ps-3 border-radius-md" href="<?php echo $base_url; ?>Professor">
                      <div class="d-flex">
                        <div class="icon h-10 me-3 d-flex mt-1">
                          <i class="ni ni-single-copy-04 text-gradient text-primary"></i>
                        </div>
                        <div class="w-100 d-flex align-items-center justify-content-between">
                          <div>
                            <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0" >List of Professor</h6>
                          </div>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">
                    <a class="dropdown-item py-2 ps-3 border-radius-md" href="<?php echo $base_url; ?>CampusCheif">
                      <div class="d-flex">
                        <div class="icon h-10 me-3 d-flex mt-1">
                          <i class="ni ni-single-copy-04 text-gradient text-primary"></i>
                        </div>
                        <div class="w-100 d-flex align-items-center justify-content-between">
                          <div>
                            <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Foundation of PMC</h6>
                          </div>
                        </div>
                      </div>
                    </a>
                  </li>
                </ul>
              </div>

            </div>
          </li>
          <li class="nav-item mx-5">
            <a href="<?php echo $base_url; ?>Publication" class="nav-link nav_item p-0 d-flex justify-content-between cursor-pointer align-items-center">
              Publication
            </a>
          </li>




          <li class="nav-item  mx-5">
            <a href="<?php echo $base_url; ?>Courses" class="nav-link nav_item p-0 d-flex justify-content-between cursor-pointer align-items-center">
              Courses
            </a>
          </li>

          <li class="nav-item  mx-5">
            <a href="<?php echo $base_url; ?>Blog" class="nav-link nav_item p-0 d-flex justify-content-between cursor-pointer align-items-center">
              Blog
            </a>
          </li>
           <li class="nav-item  mx-5">
            <a href="<?php echo $base_url; ?>Notice" class="nav-link nav_item p-0 d-flex justify-content-between cursor-pointer align-items-center">
              Notice
            </a>
          </li>

          <li class="nav-item  mx-5">
            <a href="<?php echo $base_url; ?>About" class="nav-link nav_item p-0 d-flex justify-content-between cursor-pointer align-items-center">
              About
            </a>
          </li>

          <li class="nav-item  mx-5">
            <a data-bs-toggle="modal" data-bs-target="#exampleModalSignup" class="nav-link nav_item p-0 d-flex justify-content-between cursor-pointer align-items-center">
              Contact US
            </a>
          </li>

        </ul>
      </div>
    </div>
  </nav>
</div>