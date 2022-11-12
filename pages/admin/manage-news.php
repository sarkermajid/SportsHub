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
                    <div class="card-header fw-bold h2 text-center border-info">Manage News</div>
                    <div class="card-body">
                        <table class="table table-dark table-bordered table-hover">
                            <thead>
                                <tr class="text-center">
                                    <th>News Title</th>
                                    <th>Author</th>
                                    <th>Category</th>
                                    <th>News Content</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($allNews as $news) { ?>
                                <tr>
                                    <td><?php echo $news['title'] ?></td>
                                    <td><?php echo $news['author'] ?></td>
                                    <td><?php echo $news['category_name'] ?></td>
                                    <td><?php echo $news['content'] ?></td>
                                    <td><img src="<?php echo $news['image'] ?>" alt="" height="50" width="50"></td>
                                    <td class="text-center">
                                        <a href="action.php?page=edit-news&&id=<?php echo $news['id']?>" class="btn btn-primary btn-sm"><i class="fa-sharp fa-solid fa-pen-to-square"></i> Edit</a>
                                        <a href="action.php?page=delete-news&&id=<?php echo $news['id']?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this ?')"><i class="fa-solid fa-trash"></i> Delete</a>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include "footer.php"; ?>
