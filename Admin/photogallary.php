<?php require "modal/header.php" ?>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>

<style type="text/css">
  .image_container {
   height: 120px;
   width: 200px;
   border-radius: 6px;
   overflow: hidden;
   margin: 10px;
  }
  #container{
    min-height : 60px;
  }
  .image_container img {
   height: 100%;
   width: auto;
   object-fit: cover;
  }
  .image_container span {
   top: -6px;
   right: 8px;
   color: red;
   font-size: 28px;
   font-weight: normal;
   cursor: pointer;
  }
  .btn-form:hover{
    background: #82d616!important;
    color: #fff;
  }
</style>

<div class="row">
    <div class="col-md-2">
    <?php require "modal/nav.php" ?>
</div>
<div class="col-md-10 mt-5">
   <div class="container">
      <div class="card p-3">
        <h5>Photo Gallery</h5>
        <div class="row">
          <div class="col-md-4 offset-md-2"></div>
          <form class=""  id='uploadForm' enctype="multipart/form-data">
            <div class="card-header">
              <div class="form-group">
                <div class="row">
                  <div class="col-6">
                    <input type="text" class='form-control' placeholder='Title' name='title'>
                  </div>
                  <div class="col-4">
                    <input type="file" required name="files[]"  multiple id="image" class="d-none" onchange="image_select()" >
                    <button class="btn btn-sm btn-primary" type="button" onclick="document.getElementById('image').click()">Choose Images</button>
                  </div>
                  <div class="col-2">
                    <input type="submit" name="addpicture" value="Upload" class="form-control btn-form">
                  </div>
                </div>
                <div class="card-body d-flex flex-wrap justify-content-start" id="container">
                </div>
              </div>
              <div class="form-group">
                <div id="sent_message">

                </div>
                
            
              </div>
          </form>

        
        </div>
      </div>
    </div>
    <div class="container mt-3">
          <div class="row" id='preview_img'>
            <div class="card mt-3">
                <div class="card-body">
                    <div class='table-responsive p-0'>
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="p-2 text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" >S.No</th>
                                    <th class="p-2 text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" >Title</th>
                                    <th class="p-2 text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" >Preview</th>
                                    <th class="p-2 text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" >Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach ($gallerydata as $key => $gallerydataval)
                                    {
                                        $sn=$key+1;
                                        echo ' <tr>
                                        <td class="p-2">'.$sn.'</td>
                                        <td class="p-2">'.$gallerydataval["name"].'</td>
                                        <td class="p-2"><img src="'.$gallerydataval["url"].'" style="width:150px;height:150px"></td>
                                        <td class="p-2"> <a href="controller/del.php?delete_gallery='.$gallerydataval["id"].'"><i class="fa-solid fa-trash text-danger"></i></a></td>
                                    </tr>';
                                    }
                                    ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
          </div>
        </div>
    </div>
<?php require "modal/footer.php" ?>

<script>
     $(document).ready(function(){  
      $('#uploadForm').on('submit', function(e){  
         const un_id = localStorage.getItem('print.bimash.com.np');
         const formData = new FormData(this);
          formData.append('un_id', un_id)
           e.preventDefault();  
           $.ajax({  
                url: "controller/controller.php",  
                type: "POST",  
                data: formData,
                contentType: false,  
                processData:false,  
                success: function(data)  
                {  
                    var msg = '';
                    var sent_msg = document.getElementById("sent_message");
                    msg = `<p id="sent_message" class="mx-4 text-center bg-success text-white p-1">PHOTO SENT SUCCESFULLY</p>`;
                    sent_msg.innerHTML = msg;
                    if(localStorage.getItem('print.bimash.com.np')){
                        const un_id = localStorage.getItem('print.bimash.com.np');
                      images.length=0
                      document.getElementById('container').innerHTML = '';
                    }
                    setTimeout(() => {
                      sent_msg.innerHTML = '';
                      location.reload();
                    }, 2000);
                }  
           });  
      });  
 });  
   var images = [];
 
function image_select() {
    var image = document.getElementById('image').files;
    for (i = 0; i < image.length; i++) {
        if (check_duplicate(image[i].name)) {
        images.push({
            "name" : image[i].name,
            "url" : URL.createObjectURL(image[i]),
            "file" : image[i],
        })
        } else
        {
        alert(image[i].name + " is already added to the list");
        }
    }
    // document.getElementById('form').reset();
    document.getElementById('container').innerHTML = image_show();
}

function image_show() {
    var image = "";
    images.forEach((i) => {
        image += `<div class="image_container d-flex justify-content-center position-relative">
            <img src="`+ i.url +`" alt="Image">
            <span class="position-absolute" onclick="delete_image(`+ images.indexOf(i) +`)">&times;</span>
        </div>`;
    })
    return image;
}


function delete_image(e) {
    images.splice(e, 1);
    document.getElementById('container').innerHTML = image_show();
}


function check_duplicate(name) {
    var image = true;
    if (images.length > 0) {
        for (e = 0; e < images.length; e++) {
        if (images[e].name == name) {
            image = false;
            break;
        }
        }
    }
    return image;
}

function get_image_data() {
    var form = new FormData()
    for (let index = 0; index < images.length; index++) {
        form.append("file[" + index + "]", images[index]['file']);
    }
    return form;
}

</script>