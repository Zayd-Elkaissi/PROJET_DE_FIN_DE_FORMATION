
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

<header>
  <div class="carousel-inner">
    <img src="../img/headr-type.jpg" class="d-block w-100 mt-0 h-25" alt="pr" height="10px">
    <div class="carousel-caption ">
      <h4 class="hunting">HUNTING</h4>
      <h3 class="p">Glow tonic for day and night repair.</h3>
    </div>
  </div>
</header>

<!-- select sql -->
<?php
$sql = 'SELECT * FROM animalchasse ORDER BY idAnimal';
$result = mysqli_query($connect, $sql);
?>

<section class="bg-light py-2" id="prO">
  <div class="container-fluid px-4 px-lg-5">
    <?php

    while ($us = mysqli_fetch_assoc($result)) {

    ?>
      <div class="row gx-0 mb-4 mb-lg-5 justify-content-center">
        <div class="col-xl-4 col-lg-5 col-md-10 col-sm-9 col-12"><img class="img-fluid rounded-3" src=".<?php echo $us['imgAnim']; ?>" alt="...">
        </div>
        <div class="col-xl-8 col-lg-7 col-md-10 col-sm-10 mt-3 text-center">
          <div class="featured-text text-lg-left mx-3">
            <h4 class="fs-4 "><?php echo $us['nomAnim']; ?></h4>
            <p class="text-secondary text-start "><?php echo $us['descriptionAnim']; ?></p>
          </div>
        </div>
      </div>
    <?php
    }
    ?>
  </div>
</section>


<!-- Footer include -->
<?php
include '../component/Footer.php';
?>
</body>

</html>