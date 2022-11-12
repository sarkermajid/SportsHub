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
                        <div class="card-header fw-bold h2 text-center border-info">Admin Profile</div>
                        <div class="card-body">
                            <?php foreach ($admins as $admin) { ?>
                            <div class="row mb-3">
                                <div class="col-md-3">Name</div>
                                <div class="col-md-9">
                                    <p><?php echo $admin['name'] ?></p>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-3">E-mail</div>
                                <div class="col-md-9">
                                    <p><?php echo $admin['email'] ?></p>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-3"></div>
                                <div class="col-md-9">
                                    <a href="action.php?page=update-profile&&id=<?php echo $admin['id'] ?>" class="btn btn-outline-info">Update Profile</a>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php include "footer.php"; ?>