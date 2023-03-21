<?php require "modal/header.php" ?>
<div class="row">
    <div class="col-2">
<?php require "modal/nav.php" ?>
</div> 
<div class="col-10 mt-5">
<div class="container">
    <div class="card p-3">
        <h4>Proffessor Staff</h4>

        <form action="controller/add.php" method="post">
            
        <input type="text" placeholder="name" class="form-control" required name="name">
        <input type="text" placeholder="subject" class="form-control" required name="subject">
        <input type="submit" class="form-control" required name="add_prof">
        </form>

     
    </div>

    <div class="card">
         
    <table>
            <tr>
                <th>S.No</th>
                <th>Name</th>
                <th>Subject</th>
                <th>action</th>
            </tr>
        

<?php
foreach ($profesdata as $key => $profesdataval)
{
    $sn=$key+1;
    echo ' <tr>
        <td>'.$sn.'</td>
        <td>'.$profesdataval["name"].'</td>
        <td>'.$profesdataval["subject"].'</td>
        <td><a href="controller/del.php?delete_prof='.$profesdataval["id"].'">Delete</a></td>
    </tr>';

}
           

?>
        </table>
    </div>
</div>
<?php require "modal/footer.php" ?>