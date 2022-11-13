<?php

if(!isset($_SESSION['id']))
{
    header('Location: action.php?page=login');
}

?>
<?php include "header.php"; ?>


                <div class="col-md-9 mx-auto pt-5">
                    <div class="card bg-dark fw-semibold text-white shadow-lg">
                        <div class="card-header fw-bold h2 text-center border-info">Add News</div>
                        <div class="card-body">
                            <h4 class="text-success text-center"><?php echo $message; ?></h4>
                            <form action="action.php" method="post" enctype="multipart/form-data">
                                <div class="row mb-3">
                                    <div class="col-md-3">Title</div>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="title">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-3">Author</div>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="author">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-3">Category</div>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="category_name">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-3">Content</div>
                                    <div class="col-md-9">
                                        <textarea type="text" name="content" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-3">Image</div>
                                    <div class="col-md-9">
                                        <input type="file" class="form-control" name="image">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-outline-info fw-semibold" name="news-btn" value="Add News">
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