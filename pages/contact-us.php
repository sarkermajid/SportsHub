<?php include 'header.php'; ?>

<section class="py-5">
    <div class="container">
        <div class="row py-5">
            <div class="col-md-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3651.1056932026017!2d90.4209995145027!3d23.779250343591553!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1skh-198%2Cmiddle%20badda%2Cgoni%20road!5e0!3m2!1sen!2sbd!4v1665329235917!5m2!1sen!2sbd" height="400" style="border:0; width: 100%" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-md-6 rounded-1">
                <h3 class="text-dark mb-4">Send Your Message</h3>
                <h4 class="text-success text-center"><?php echo $confirmMessage ?></h4>
                <form action="action.php" method="post">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="" class="">Your Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="" class="">Your Email</label>
                            <input type="email"  name="email" class="form-control">
                        </div>

                        <div class="col-md-12 mt-3">
                            <label for="" class="">Your Comment</label>
                            <textarea type="text" name="message" class="form-control" cols="30" rows="5"></textarea>
                        </div>

                        <div class="col-md-12 py-3">
                            <input type="submit" name="message-btn" class="btn btn-success w-100 form-control-sm" value="Submit"/>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
