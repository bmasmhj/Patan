<?php if(isset($_GET['se'])) {  
    require "modal/header.php"; 
      $code = $_GET['se'];
    $departmentquery = $con->query("SELECT * FROM department WHERE code = '$code' ");
    if ($departmentquery->num_rows > 0) {
        while ($departmentrow = $departmentquery->fetch_assoc()) {
            $title = $departmentrow['department_name'];
            $description = $departmentrow['description'];
            $fulldesc = $departmentrow['fulldesc'];
            $course_id = $departmentrow['course_id'];
            $semester = $departmentrow['semester'];
            $code = $departmentrow['code'];
        }
    } else {
        header('Location: Course');
    }
    
    ?>
<div class="row">
    <div class="col-md-2">
<?php require "modal/nav.php" ?>
</div>
<div class="col-md-10 mt-5">
<div class="container">
    <div class="card p-3">
        <h4>Edit Course</h4>

        <form action='controller/update.php' method='POST' enctype="multipart/form-data" >
            <div class="mb-3">
                <div class="row">
                    <div class="col-6">
                        <input type="hidden" name='code' value='<?php echo  $code ?>'>
                        <label for="coursetitle" class="form-label">Courses title</label>
                        <input type="text" placeholder='Eg: Department of BCA' class="form-control" value='<?php echo  $title ?>' name='coursetitle' id="coursetitle">
                    </div>
                    <div class="col-6">
                        <label for="coursetitle" class="form-label">Semester / Year </label>
                        <input type="number" placeholder='Eg: 8' class="form-control" value='<?php echo  $semester ?>' name='semester' >
                    </div>
                </div>
            </div>
          
            <div class="mb-3">
                <label for="" class="form-label">Faculty</label>
                <select class='form-select' name="facutly" >
                    <?php 
                    foreach($facultydata as $key => $facultydataval){
                        if($course_id == $facultydataval['id'] ){ ?>
                            <option value="<?php echo $facultydataval['id'] ?>" selected><?php echo $facultydataval['name'] ?></option>
                        <?php } else { ?>
                            <option value="<?php echo $facultydataval['id'] ?>"><?php echo $facultydataval['name'] ?></option> <?php
                    }
                }?>
                  
                </select>
            </div>

            <label for="" class="form-label">Small Description</label>
            <textarea class='form-control mb-3' name="description" id="description"><?php echo  $description ?></textarea>
            <label for="" class="form-label">Long Description</label>
            <textarea name="fulldesc" id="fulldesc"><?php echo  $fulldesc ?></textarea>
            <button type="submit" name='update_course' class="btn btn-primary">Update</button>
        </form>
    </div>

</div>
<?php require "modal/footer.php" ?>

<script src="assets/tinymce/tinymce.min.js"></script>
<script>
  tinymce.init({
    selector: '#fulldesc',
    plugins: ["code","media","image","paste","link"],
    toolbar: "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link code image_upload | media ",
    menubar:false,
    statusbar: false,
    content_style: ".mce-content-body {font-size:15px;font-family:Arial,sans-serif;}",
    height: 400,
    style_formats: [
		{title: "Headers", items: [
			{title: "Header 1", format: "h1"},
			{title: "Header 2", format: "h2"},
			{title: "Header 3", format: "h3"},
			{title: "Header 4", format: "h4"},
			{title: "Header 5", format: "h5"},
			{title: "Header 6", format: "h6"}
		]},
		{title: "Inline", items: [
			{title: "Underline", icon: "underline", format: "underline"},
			{title: "Strikethrough", icon: "strikethrough", format: "strikethrough"},
			{title: "Superscript", icon: "superscript", format: "superscript"},
			{title: "Subscript", icon: "subscript", format: "subscript"},
		]},
		{title: "Blocks", items: [
			{title: "Paragraph", format: "p"},
			{title: "Blockquote", format: "blockquote"},
			{title: "Div", format: "div"},
			{title: "Pre", format: "pre"}
		]},
	],
    setup: function(ed) {
         
        var fileInput = $('<input id="tinymce-uploader" type="file" name="pic" accept="image/*" style="display:none">');
        $(ed.getElement()).parent().append(fileInput);
         
        fileInput.on("change",function(){           
            var file = this.files[0];
            var reader = new FileReader();          
            var formData = new FormData();
            var files = file;
            formData.append("file",files);
            formData.append('filetype', 'image');               
            jQuery.ajax({
                url: "controller/file.php",
                type: "post",
                data: formData,
                contentType: false,
                processData: false,
                async: false,
                success: function(response){
                    var fileName = response;
                    if(fileName) {
                        ed.insertContent('<img src="bimash.com.np/Projects/Patan/Admin/controller/uploads/'+fileName+'"/>');
                    }
                }
            });     
            reader.readAsDataURL(file);  
        });     
         
        ed.addButton('image_upload', {
            tooltip: 'Upload Image',
            icon: 'image',
            onclick: function () {
                fileInput.trigger('click');
            }
        });
    }
});

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#blah').html('<img src="'+e.target.result+'" class="imagepreview">');
        }
        reader.readAsDataURL(input.files[0]);
    }
}


</script>
<?php 
}else{
    header('Location: Course');
} ?>