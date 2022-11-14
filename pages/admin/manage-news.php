<?php

if(!isset($_SESSION['id']))
{
    header('Location: action.php?page=login');
}

?>
<?php include "header.php"; ?>


            <div class="col-md-9 mx-auto pt-5">
                <div class="card bg-dark fw-semibold text-white shadow-lg">
                    <div class="card-header fw-bold h2 text-center border-info">Manage News</div>
                    <div class="card-body">
                        <table class="table table-dark table-bordered table-hover">
                            <thead>
                                <tr class="text-center">
                                    <th>News Title</th>
                                    <th>Author</th>
                                    <th>News Content</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($allNews as $news) { ?>
                                <tr>
                                    <td><?php echo substr($news['title'], '0','25').'...' ?></td>
                                    <td><?php echo $news['author'] ?></td>
                                    <td><?php echo substr($news['content'], '0','50').'...' ?></td>
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
