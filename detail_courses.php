<?php require 'modal/header.php'; ?>
<?php require 'modal/nav.php'; ?>
<section class='py-5'>
</section>
<section class="mt-5 py-5">
    <div class="container mt-5">
        <div class="row">
            <?php
                $directoryURI = $_SERVER['REQUEST_URI'];
                $path = parse_url($directoryURI, PHP_URL_PATH);
                $components = explode('/', $path);
                $name = $components[$components_placement];
                if($name !== '' ){
                    echo get_course_detail($name);
                }else{
                    echo ' <h1>Something went wrong</h1>';
                }
            ?>
        </div>
    </div>  
</section>
<?php require 'modal/inquiry.php'; ?>




<?php require 'modal/contact-us.php'; ?>
<script src="https://bimash.com.np/Projects/Patan/assets/js/main.js"></script>
<script src="https://bimash.com.np/Projects/Patan/assets/js/script.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
</body>
</html>
