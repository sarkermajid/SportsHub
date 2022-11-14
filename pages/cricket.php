<?php include 'header.php'; ?>



<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="row">
                    <div class="card card-footer border-0 rounded-0 bg-white text-center">
                        <h4>Cricket News</h4>
                    </div>
                    <?php foreach ($cricketNews as $cnews) { ?>
                        <div class="col-md-6 pb-4">
                            <div class="card pb-0 m-0">
                                <img src="<?php echo $cnews['image'] ?>" class="rounded-top" alt="" height="300">
                                <div class="card-body pb-3">
                                    <a href="action.php?page=news-datail&&id=<?php echo $cnews['id'] ?>" class="text-decoration-none pb-5"><?php echo substr($cnews['title'], '0','110').'...' ?></a>
                                    <p class="text-muted small pt-2 pb-0 mb-0"><?php echo substr($cnews['content'],'0', '150').'...'  ?></p>
                                    <a href="action.php?page=news-datail&&id=<?php echo $cnews['id'] ?>" class="d-inline-block d-block text-decoration-none mt-0">read more...</a>
                                    <span class="text-muted small"><span class="text-dark fw-semibold">Author :</span> <?php echo $cnews['author'] ?></span>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>



<?php include 'footer.php'; ?>
