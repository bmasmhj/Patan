<?php require "modal/header.php" ?>
<div class="row">
    <div class="col-md-2">
<?php require "modal/nav.php" ?>
</div>
<div class="col-md-10 mt-5">
<div class="container">
    <div class="card p-3">
        <h4>Notice</h4>
        <form action="controller/add.php" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-5">
                    <input type="text" class="form-control" required name="title">
                </div>
                <div class="col-5">
                    <input type="file" class="form-control" required name="file_input">
                </div>
                <div class="col-2">
                    <input type="submit" class="form-control bg-success text-white" required name="add_notice">
                </div>
            </div>
        </form>
    </div>
    <div class="card mt-3">
        <div class="card-body">
            <div class='table-responsive p-0'>
                <table class="table align-items-center mb-0">
                    <thead>
                        <tr>
                            <th class="p-2 text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" >S.No</th>
                            <th class="p-2 text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" >Title</th>
                            <th class="p-2 text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" >Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach ($noticedata as $key => $noticedataval)
                            {
                                $sn=$key+1;
                                echo ' <tr>
                                <td class="p-2">'.$sn.'</td>
                                <td class="p-2">'.$noticedataval["title"].'</td>
                                <td class="p-2"><a href="'.$noticedataval["file"].'" download class="mx-3" ><i class="fa-solid text-info fa-download"></i></a> <a href="controller/del.php?delete_notice='.$noticedataval["id"].'"><i class="fa-solid fa-trash text-danger"></i></a></td>
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