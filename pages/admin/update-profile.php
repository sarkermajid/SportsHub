<?php include "header.php"; ?>

                <div class="col-md-9 mx-auto pt-5">
                    <div class="card bg-dark fw-semibold text-white shadow-lg">
                        <div class="card-header fw-bold h2 text-center border-info">Update Admin Profile</div>
                        <div class="card-body">
                            <form action="action.php" method="post">
                                <div class="row mb-3">
                                    <div class="col-md-3">Name</div>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" value="<?php echo $singleAdmin['name']?>" name="name">
                                        <input type="hidden" class="form-control" value="<?php echo $singleAdmin['id']?>" name="id">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-3">E-mail</div>
                                    <div class="col-md-9">
                                        <input type="email" class="form-control" value="<?php echo $singleAdmin['email']?>" name="email">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-3">Password</div>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" value="<?php echo $singleAdmin['password']?>" name="password">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-outline-info fw-semibold" name="update-admin" value="Update Profile">
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