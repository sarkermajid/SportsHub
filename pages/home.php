<?php include 'header.php';?>

    <!-- Banner Section -->
    <section class="">
        <div id="banner-owl-demo" class="owl-carousel owl-theme">
            <div class="item col-md-12 p-0 ">
                <div class="card rounded-0 p-0 border-0">
                    <div class="card-header p-0 border-0">
                        <div class="col-12 p-0 w-100" >
                            <img src="assets/img/cr7.jpg" alt="" style="height:500px;width: 100%">
                        </div>
                    </div>
                </div>
            </div>
            <div class="item col-md-12 p-0 ">
                <div class="card rounded-0 p-0 border-0">
                    <div class="card-header p-0 border-0">
                        <div class="col-12 p-0 w-100">
                            <img src="assets/img/cr7-2.jpg" alt="" style="height:500px;width: 100%">
                        </div>
                    </div>
                </div>
            </div>
            <div class="item col-md-12 p-0 ">
                <div class="card rounded-0 p-0 border-0">
                    <div class="card-header p-0 border-0">
                        <div class="col-12 p-0 w-100" >
                            <img src="assets/img/crick-1.jpg" alt="" style="height:500px;width: 100%">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--News section-->
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
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
                <div class="col-md-4 ">
                    <div class="card">
                        <div class="card-header text-center">
                            <h5>Popular News</h5>
                        </div>
                        <div class="card-body pt-0">
                            <?php foreach ($allNews as $news) { ?>
                                <div class="border-bottom py-3">
                                    <a href="action.php?page=news-datail&&id=<?php echo $news['id'] ?>" class="text-decoration-none"><?php echo $news['title']?></a>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="card card-footer border-0 rounded-0 bg-white text-center">
                            <h4>Football News</h4>
                        </div>
                        <?php foreach ($footballNews as $fnews) { ?>
                            <div class="col-md-6 pb-4">
                                <div class="card pb-0 m-0">
                                    <img src="<?php echo $fnews['image'] ?>" class="rounded-top" alt="" height="300">
                                    <div class="card-body pb-3">
                                        <a href="action.php?page=news-datail&&id=<?php echo $fnews['id'] ?>" class="text-decoration-none pb-5"><?php echo substr($fnews['title'], '0','110').'...' ?></a>
                                        <p class="text-muted small pt-2 pb-0 mb-0"><?php echo substr($fnews['content'],'0', '150').'...'  ?></p>
                                        <a href="action.php?page=news-datail&&id=<?php echo $fnews['id'] ?>" class="d-inline-block d-block text-decoration-none mt-0">read more...</a>
                                        <span class="text-muted small"><span class="text-dark fw-semibold">Author :</span> <?php echo $fnews['author'] ?></span>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include 'footer.php';?>