<?php require 'modal/header.php'; ?>
<?php require 'modal/nav.php'; ?>
<section class='mb-5 py-5'>
  <div class="container mt-5">

  </div>
</section>
<div class="container">
<div class="row">
    <div class="col-8 offset-2">
        <div class="card">
            <div class="card-body">
                <div class='table-responsive p-0'>
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="p-2 text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" >S.No</th>
                                <th class="p-2 text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" >Designation</th>
                                <th class="p-2 text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" >Name</th>
                                <th class="p-2 text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" >Mobile No. </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach ($staffdata as $key => $staffdataval)
                                {
                                    $sn=$key+1;
                                    echo ' <tr>
                                    <td class="p-2">'.$sn.'</td>
                                    <td class="p-2">'.$staffdataval["designation"].'</td>
                                    <td class="p-2">'.$staffdataval["name"].'</td>
                                    <td class="p-2">'.$staffdataval["number"].'</td>
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

<?php require 'modal/footer.php'; ?>
