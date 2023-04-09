<?php require "modal/header.php" ?>
<div class="row">
    <div class="col-2">
<?php require "modal/nav.php" ?>
</div>
<div class="col-10 mt-5">
<div class="container">
    <div class="card p-3">
                <h4>Courses</h4>

                <form>
                        <div class="mb-3">
                                <label for="coursetitle" class="form-label">Courses title</label>
                                <input type="text" class="form-control" id="coursetitle">
                        </div>

                        <div class="mb-3">
                                <label for="" class="form-label">Description</label>
                                <textarea class="form-control" name="desc" id="desc" rows="3"></textarea>
                        </div>

                        <div class="mb-3">
                                <label for="" class="form-label">Choose Image</label>
                                <input type="file" class="form-control" name="img" id="img" placeholder="" aria-describedby="fileHelpId">
                                <div id="fileHelpId" class="form-text">Help text</div>
                        </div>


                        <button type="submit" class="btn btn-primary">Add</button>
                </form>
        </div>

</div>
<?php require "modal/footer.php" ?>