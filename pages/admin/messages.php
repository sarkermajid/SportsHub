<?php

if(!isset($_SESSION['id']))
{
    header('Location: action.php?page=login');
}

?>
<?php include "header.php"; ?>


<div class="col-md-9 mx-auto pt-5">
    <div class="card bg-dark fw-semibold text-white shadow-lg">
        <div class="card-header fw-bold h2 text-center border-info">User's Message</div>
        <div class="card-body">
            <table class="table table-dark table-bordered table-hover">
                <thead>
                <tr class="text-center">
                    <th>User Name</th>
                    <th>User Email</th>
                    <th>User Message</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($singleMessage as $message) { ?>
                    <tr>
                        <td><?php echo $message['name'] ?></td>
                        <td><?php echo $message['email'] ?></td>
                        <td><?php echo $message['message'] ?></td>
                        <td class="text-center">
                            <a href="action.php?page=delete-message&&id=<?php echo $message['id']?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this ?')"><i class="fa-solid fa-trash"></i> Delete</a>
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
