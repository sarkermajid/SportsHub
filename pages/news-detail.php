<?php include 'header.php'; ?>

<section class="py-5 bg-light">
    <div class="container w-75">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <img src="<?php echo $detailNews['image']?>" style="width: 100%" height="500" alt="">
                </div>
                <p class="pt-3"><?php echo $detailNews['content']?></p>
                <span class="text-muted small"><span class="text-dark fw-semibold">Author :</span> <?php echo $detailNews['author'] ?></span>
                <span class="text-muted small float-end"><span class="text-dark fw-semibold">Category :</span> <?php echo $detailNews['category_name'] ?></span>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
