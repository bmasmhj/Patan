<?php require "modal/header.php" ?>
<div class="row">
    <div class="col-md-2">
<?php require "modal/nav.php" ?>
</div> 
<div class="col-md-10 mt-5">
<div class="container">
    <div class="card mb-3 p-3">
        <h4>Campus Chief</h4>
        <form action="controller/add.php" method="post">
           <div class="row">
                <div class="col-10"> 
                    <input type="text" placeholder="name" class="form-control" required name="name">
                </div>
                <div class="col-2">   
                    <input type="submit" class="form-control bg-success text-white" required name="add_faculty" value='Add'>
                </div>
           </div>
        </form>

     
    </div>
    <div class="card">
        <div class="card-body">
            <div class='table-responsive p-0'>
                <table class="table align-items-center mb-0">
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                         foreach ($facultydata as $key => $facultydataval)
                            {
                                $sn=$key+1;
                                echo ' <tr>
                                <td>'.$sn.'</td>
                                <td>'.$facultydataval["name"].'</td>
                                <td><a href="controller/del.php?delete_faculty='.$facultydataval["id"].'"><i class="fa-solid fa-trash text-danger"></i></a></td>
                            
                            </tr>';
                            }           
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php require "modal/footer.php" ?>