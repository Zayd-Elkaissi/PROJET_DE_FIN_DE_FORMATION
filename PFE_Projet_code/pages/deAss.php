
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

<!-- select data sql  -->
<?php
$id = $_GET['idAssoc'];
$sql = "SELECT nomProv ,C.nomCom,A.adress,A.imgAssoc, A.dateDDe,A.nom,A.responsable,Z.adressZone,Z.superficie,M.url FROM `province`  P
  INNER JOIN commune C
  ON p.idProv= C.idProv
  INNER JOIN association A
  ON C.idCom = A.idCom
  INNER JOIN zonechasse Z
  ON A.idZone=z.idZone
  INNER JOIN mediazone M
  ON z.idZone = M.idZone 
  where idAssoc='$id'";
$result = mysqli_query($connect, $sql);
?>

<!-- detAssociatio -->

<form action="" class="py-5 bg-light" method="POST" enctype=" multipart/form-data">
  <section class="bg-light py-5" id="prO">
    <div class="container-fluid px-lg-5 py-5">
      <?php

      $us = mysqli_fetch_assoc($result)

      ?>
      <div class="row gx-0 mb-4 mb-lg-5 justify-content-center">
        <div class="col-xl-4 col-lg-5 col-md-10 col-sm-9 col-12"><img class="img-fluid rounded-3" src="<?php echo $us['imgAssoc']; ?>" alt="...">
        </div>
        <div class="col-xl-8 col-lg-7 col-md-10 col-sm-10 mt-3">
          <div class="featured-text text-center text-lg-left mx-3">
            <h4 class="fs-4"><?php echo $us['nom']; ?></h4>
            <h6 class="text-start text-secondary">responsable : <?php echo $us['responsable']; ?></h6>
            <p class="text-secondary text-start "><?php echo $us['nom']; ?> est une association de <?php echo $us['superficie']; ?>km qui a débuté le <?php echo $us['dateDDe']; ?> . qui se trouve dans la provance <?php echo $us['nomProv']; ?>km exactement dans la commune <?php echo $us['nomCom']; ?>, son siege social dans <span class="Size"> <?php echo $us['adress']; ?> </span>,
              <!-- elle est active aussi dans " DLCDPN ", Dirextion De La Lutte Contre La Désertification Et De La Protection De La Nature. x-->
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <h4 class="fs-4 text-center pb-5">Les meilleures photos des lieux de la région</h4>
  <div class="carousel slide" data-bs-ride="carousel">

    <!--Slides-->
    <div class="carousel-inner">

      <!--First slide-->
      <div class="carousel-item active">
        <div class="col-md-4" style="float:left">

          <div class="card mb-3 mx-3">
            <img class="card-img-top " src="../img/Slide2.jpg" alt="Card image cap">
          </div>
        </div>
        <div class="col-md-4" style="float:left">
          <div class="card mb-3 mx-3"><img class="card-img-top" src=" <?php echo $us['url']; ?>" alt="Card image cap"></div>
        </div>
        <div class="col-md-4" style="float:left">
          <div class="card mb-3 mx-3"><img class="card-img-top" src="../img/Slide3.jpg" alt="Card image cap"></div>
        </div>
      </div>

      <!--Last slide-->
      <div class="carousel-item">
        <div class="col-md-4" style="float:left">

          <div class="card mb-3 mx-3">
            <img class="card-img-top" src="../img/Slide4.jpg" alt="Card image cap">
          </div>
        </div>
        <div class="col-md-4" style="float:left">
          <div class="card mb-3 mx-3"><img class="card-img-top" src="../img/Slide5.jpg" alt="Card image cap"></div>
        </div>
        <div class="col-md-4" style="float:left">
          <div class="card mb-3 mx-3"><img class="card-img-top" src="../img/Slide6.jpg" alt="Card image cap"></div>
        </div>
      </div>
    </div>
  </div>
</form>

<!-- Footer include -->
<?php
include '../component/Footer.php';
?>
</body>

</html>