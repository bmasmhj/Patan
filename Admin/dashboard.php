<?php require "modal/header.php" ?>
<style>
.terminal {
    background : black;
  color: lightgreen;
  width: 100%;
  height: 90vh;
  text-shadow: 0px 0px 3px white;
  font-family: monospace;
  font-size: 1.3em;
  overflow-y: scroll;
  padding-right: 1em;
  animation-duration: 0.5s;
  animation-name: colorthing;
  animation-iteration-count: infinite;
  animation-direction: alternate;
}
@keyframes colorthing {
  from {
    color: rgb(0, 255, 0);
  }
  to {
    color: rgb(0, 200, 0);
  }
}

</style>
<div class="row">
    <div class="col-md-2">
<?php require "modal/nav.php" ?>
</div>
<div class="col-md-10 mt-5">
<div class="container">
    <div class="card p-3">
        <h4>Dashboard</h4>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="card mt-3">
              <div class="card-body">
            <h6>Publications</h6>

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
        <div class="col-md-6">
          <div class="card mt-3">
            <div class="card-body">
            <h6>Notices</h6>
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
    </div>
    <div class="row mt-3">
        <div class="col-12">
               <div class="card">
          <div class="card-body">
            <h6>Professor</h6>
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
    </div>
</div>

<?php require "modal/footer.php" ?>

