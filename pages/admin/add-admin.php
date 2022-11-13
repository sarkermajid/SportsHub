<?php

if(!isset($_SESSION['id']))
{
    header('Location: action.php?page=login');
}

?>
<?php include "header.php"; ?>

    <div class="col-md-9 mx-auto pt-5">
        <div class="card bg-dark fw-semibold text-white shadow-lg">
            <div class="card-header fw-bold h2 text-center border-info">Add Admin</div>
            <div class="card-body">
                <h4 class="text-success text-center"><?php echo $message; ?></h4>
                <form action="action.php" method="post">
                    <div class="row mb-3">
                        <div class="col-md-3">Name</div>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="name">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-3">Email</div>
                        <div class="col-md-9">
                            <input type="email" class="form-control" name="email">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-3">Password</div>
                        <div class="col-md-9">
                            <input type="password" class="form-control" name="password">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-3"></div>
                        <div class="col-md-9">
                            <input type="submit" class="btn btn-outline-info fw-semibold" name="add-admin-btn" value="Add Admin">
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