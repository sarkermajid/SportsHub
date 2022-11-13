<?php

if(!isset($_SESSION['id']))
{
    header('Location: action.php?page=login');
}

?>
<?php include "header.php"; ?>


            <div class="col-md-9 mx-auto pt-5">
                <div class="card bg-dark fw-semibold text-white shadow-lg">
                    <div class="card-header fw-bold h2 text-center border-info">Manage Categories</div>
                    <div class="card-body">
                        <table class="table table-dark table-bordered table-hover">
                            <thead>
                            <tr class="text-center">
                                <th>Category Name</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($categories as $category) { ?>
                            <tr>
                                <td><?php echo $category['category_name'] ?></td>
                                <td class="text-center">
                                    <a href="action.php?page=edit-category&&id=<?php echo $category['id']?>" class="btn btn-primary btn-sm"><i class="fa-sharp fa-solid fa-pen-to-square"></i> Edit</a>
                                    &nbsp;
                                    <a href="action.php?page=delete-category&&id=<?php echo $category['id']?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this ?')"><i class="fa-solid fa-trash"></i> Delete</a>
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
