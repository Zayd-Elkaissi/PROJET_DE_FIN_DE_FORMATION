
<!-- connection include -->
<?php
include '../inc/conn.php';
?>

<!DOCTYPE html>
<html lang="en">

<!-- Nav -->

<?php
include '../component/Nav.php';
?>

<section>
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <img src="../img/headr0.png" class="d-block w-100 mt-0 " id="img0" alt="pr">

        <div class="carousel-caption ">

            <section class="page-section my-5" id="contact">
                <div class="container">
                    <div class="row row-content justify-content-center">
                        <div class="col-xs-12 col-sm-6 col-md-5 col-md-offset-2 bg-white rounded p-5 ">
                            <div class="slide--action text-secondary text-start">
                                <h6 class="text-center text-dark">Si vous avez des questions, n'hésitez pas à me demander</h6>
                                <?php
                                include './insert.php';
                                @$connect = new mysqli('localhost', 'root', '', 'hunting');
                                ?>
                                <form action="" method="POST" enctype="multipart/form-data">
                                    <!-- Name input-->
                                    <div>
                                        <label>Nam *</label>
                                        <input class="form-control" name="nom" value="<?php echo $nom ?>" id="name" type="text">
                                    </div>
                                    <!-- Email address input-->
                                    <div>
                                        <label>Email *</label>
                                        <input class="form-control" name="email" value="<?php echo $email ?>" id="email" type="email">
                                    </div>
                                    <!-- Message input-->
                                    <div>
                                        <label>Message *</label>
                                        <textarea class="form-control" name="message" value="<?php echo $message ?>" id="message"></textarea>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <input type="submit" name="submit" class="btn btn--primary btn--block mt-3" id="btn" value="Send Message">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </section>
</section>

<script src="../js/script.js"></script>
<script src="../js/bootstrap.js"></script>
</body>

</html>