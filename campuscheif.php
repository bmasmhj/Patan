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
                <h4 class='p-3'>
                    Campus Chiefs Since the Foundation of PMC
                </h4>
                 <div class='table-responsive p-0'>
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($campuscheifdata as $key => $campuscheifdataval)
                            {
                                $sn=$key+1;
                                echo ' <tr>
                                <td>'.$sn.'</td>
                                <td>'.$campuscheifdataval["names"].'</td>
                            
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
