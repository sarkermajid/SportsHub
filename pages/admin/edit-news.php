<?php

if(!isset($_SESSION['id']))
{
    header('Location: action.php?page=login');
}

?>
<?php include "header.php"; ?>

                <div class="col-md-9 mx-auto pt-5">
                    <div class="card bg-dark fw-semibold text-white shadow-lg">
                        <div class="card-header fw-bold h2 text-center border-info">Edit News</div>
                        <div class="card-body">
                            <h4 class="text-success text-center"><?php echo $message; ?></h4>
                            <form action="action.php" method="post" enctype="multipart/form-data">
                                <div class="row mb-3">
                                    <div class="col-md-3">Title</div>
                                    <div class="col-md-9">
                                        <input type="text" value="<?php echo $singleNews['title']?>" class="form-control" name="title">
                                        <input type="hidden" name="id" value="<?php echo $singleNews['id']?>">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-3">Author</div>
                                    <div class="col-md-9">
                                        <input type="text" value="<?php echo $singleNews['author']?>" class="form-control" name="author">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-3">Category</div>
                                    <div class="col-md-9">
                                        <input type="text" value="<?php echo $singleNews['category_name']?>" class="form-control" name="category_name">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-3">Content</div>
                                    <div class="col-md-9">
                                        <textarea type="text" name="content" class="form-control"><?php echo $singleNews['title']?></textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-3">Image</div>
                                    <div class="col-md-9">
                                        <input type="file" class="form-control" name="image">
                                        <img src="<?php echo $singleNews['image']?>" width="100" height="100" class="mt-3" alt="">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-outline-info fw-semibold" name="news-update-btn" value="Update News">
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