<?php include "header.php"; ?>

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