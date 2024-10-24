<?php
include("templates/header.php");
?>
        <div class="create-form w-100 mx-auto p-4" style="max-width:700px;">
            <form action="process.php" method="post">
                <div class="form-field mb-4">
                    <input type="text" name="title" class="form-control" id="" placeholder="Enter title:">
                </div>
                <div class="form-field mb-4">
                    <textarea name="summary" class="form-control" id="" cols="30" rows="10" placeholder="Enter summary:"></textarea>
                </div>
                <div class="form-field mb-4">
                    <textarea name="content" class="form-control" id="" cols="30" rows="10" placeholder="Enter content:"></textarea>
                </div>
                <input type="hidden" name="date" value=" <?php echo date("Y/m/d"); ?>">
                <div class="form-field">
                    <input type="submit" class="btn btn-primary" value="Submit" name="save">
                </div>
            </form>
        </div>
 <?php
 include("templates/footer.php");
 ?>   