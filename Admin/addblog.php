<?php require "modal/header.php" ?>
<div class="row">
    <div class="col-md-2">
<?php require "modal/nav.php" ?>
</div>
<div class="col-md-10 mt-5">
<div class="container">
    <div class="card p-3">
        <h4>Add Blog</h4>

        <form action='controller/add.php' method='POST' enctype="multipart/form-data" >
            <div class="mb-3">
                <label for="title" class="form-label">Courses title</label>
                <input type="text" class="form-control" name='title' id="title">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Short Description</label>
                <textarea class="form-control" name="description" id="desc" rows="3"></textarea>
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Choose Image</label>
                <input type="file" class="form-control" name="image" id="img" placeholder="" aria-describedby="fileHelpId">
            </div>
            <label for="" class="form-label">Long Description</label>
            <textarea name="fulldesc" id="fulldesc"></textarea>

            <button type="submit" name='add_blog' class="btn btn-primary">Add</button>
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
                        ed.insertContent('<img src="https://bimash.com.np/Projects/Patan/Admin/controller/uploads/'+fileName+'"/>');
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