<?php include "header.php"; ?>


    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3 pt-5 bg-dark p-5 rounded-3 shadow-lg">
                    <a href="action.php?page=admin" class="btn btn-outline-info btn-lg d-inline-block d-block fw-semibold mb-3">Admin</a>
                    <a href="action.php?page=add-news" class="btn btn-outline-info btn-lg d-inline-block d-block fw-semibold mb-3">Add News</a>
                    <a href="action.php?page=manage-news" class="btn btn-outline-info btn-lg d-inline-block d-block fw-semibold mb-3">Manage News</a>
                    <a href="action.php?page=add-category" class="btn btn-outline-info btn-lg d-inline-block d-block fw-semibold mb-3">Add Category</a>
                    <a href="action.php?page=manage-category" class="btn btn-outline-info btn-lg d-inline-block d-block fw-semibold mb-3">Manage Category</a>
                    <a href="" class="btn btn-outline-info d-inline-block btn-lg d-block fw-semibold mb-3">Logout</a>
                </div>
                <div class="col-md-9 mx-auto pt-5">
                    <div class="card bg-dark fw-semibold text-white shadow-lg">
                        <div class="card-header fw-bold h2 text-center border-info">Edit Category</div>
                        <div class="card-body">
                            <h4 class="text-success text-center"><?php echo $message; ?></h4>
                            <form action="action.php" method="post">
                                <div class="row mb-3">
                                    <div class="col-md-3">Category Name</div>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" value="<?php echo $singleCategory['category_name']?>" name="category_name">
                                        <input type="hidden" name="id" value="<?php echo $singleCategory['id']?>" >
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-outline-info fw-semibold" name="update_category_btn" value="Update Category">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php include "footer.php"; ?>