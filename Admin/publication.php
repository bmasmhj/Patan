<?php require "modal/header.php" ?>
<div class="row">
    <div class="col-md-2">
<?php require "modal/nav.php" ?>
</div>
<div class="col-md-10 mt-5">
<div class="container">
    <div class="card p-3">
        <h4>Publication</h4>
        <form action="controller/add.php" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-5">
                    <input type="text" class="form-control" required placeholder='Title' name="title">
                </div>
                <div class="col-2">
                    <input type="text" class="form-control" placeholder='ISSN' required name="issn">
                </div>
                <div class="col-3">
                    <input type="file" class="form-control" required name="file_input">
                </div>
                <div class="col-2">
                    <input type="submit" class="form-control bg-success text-white" required name="add_publication">
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
                                <th class="p-2 text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" >ISSN</th>
                                <th class="p-2 text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" >Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach ($publicationdata as $key => $publicationdataval)
                                {
                                    $sn=$key+1;
                                    echo ' <tr>
                                    <td class="p-2">'.$sn.'</td>
                                    <td class="p-2">'.$publicationdataval["title"].'</td>
                                    <td class="p-2">'.$publicationdataval["issn"].'</td>
                                    <td class="p-2"><a href="'.$publicationdataval["url"].'" download class="mx-3" ><i class="fa-solid text-info fa-download"></i></a> <a href="controller/del.php?delete_publication='.$publicationdataval["id"].'"><i class="fa-solid fa-trash text-danger"></i></a></td>
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