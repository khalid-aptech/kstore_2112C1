<?php include "header.php"; ?>
<div id="admin-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="admin-heading">Add New Category</h1>
            </div>
            <div class="col-md-offset-3 col-md-6">
                <!-- Form Start -->
                <form action="" method="POST" autocomplete="off">
                    <div class="form-group">
                        <label>Category Name</label>
                        <input type="text" name="cat" class="form-control" placeholder="Category Name" required>
                    </div>
                    <input type="submit" name="save" class="btn btn-primary" value="Save" required />
                </form>
                <!-- /Form End -->

                <?php

                if(isset($_POST["save"]))
                {
                    $category_name = $_POST["cat"];
                    include "config.php";
                    $query = "INSERT INTO `category`(`category_name`) VALUES ('{$category_name}')";
                    mysqli_query($conn,$query);
                    header("location:http://localhost:82/kstore/admin/category.php");


                }
               

                ?>
            </div>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>