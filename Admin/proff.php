<?php require "modal/header.php" ?>
<div class="row">
    <div class="col-md-2">
<?php require "modal/nav.php" ?>
</div> 
<div class="col-md-10 mt-5">
<div class="container">
    <div class="card mb-3 p-3">
        <h4>Professor</h4>
        <form action="controller/add.php" method="post">
           <div class="row">
                <div class="col-5"> 
                    <input type="text" placeholder="name" class="form-control" required name="name">
                </div>
                 <div class="col-5"> 
                    <input type="text" placeholder="subject" class="form-control" required name="subject">
                </div>
                <div class="col-2">   
                    <input type="submit" class="form-control bg-success text-white" required value='Add' name="add_prof">
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
                            <th>Subject</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                       <?php
                        foreach ($profesdata as $key => $profesdataval)
                        {
                            $sn=$key+1;
                            echo ' <tr>
                                <td>'.$sn.'</td>
                                <td>'.$profesdataval["name"].'</td>
                                <td>'.$profesdataval["subject"].'</td>
                                <td><a href="controller/del.php?delete_prof='.$profesdataval["id"].'"><i class="fa-solid fa-trash text-danger"></i></a></td>
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