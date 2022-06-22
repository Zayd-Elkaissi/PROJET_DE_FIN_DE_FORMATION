
<!-- connection include -->

<?php
include '../inc/conn.php';
?>

<!DOCTYPE html>
<html lang="en">

<!-- Nav include -->

<?php
include '../component/Nav.php';
?>

<!-- Header -->

<header>
  <div class="carousel-inner">
    <img src="../img/Headr10.jpg" class="d-block w-100 mt-0 h-25" alt="pr">
    <div class="carousel-caption ">
      <h5 class="hunting">HuntGo</h5>
      <h3 class="day">des association au Maroc.</h3>
    </div>
  </div>
</header>

<!-- Search input -->

<form class="input-group my-3" action="" method="GET">

  <input type="text" id="search" name="search" placeholder="Recherche an association par province" class="form-control" value="<?php
  //  if (isset($_GET['search'])) {
  //    echo $_GET['search'];
  //  }
   ?>">
  <span class="input-group-text"> <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"></button>
    <select id="ddlViewBy" onchange="fff()" class="dropdown-menu dropdown-menu-end">
      <option value="">Recherche par province</option>
      <option value="Tanger Assilah">Tanger Assilah</option>
      <option value="Larache">Larache</option>
      <option value="">Larache</option>
    </select></span>
  <span class="input-group-text">
    <button class="btn " type="submit" name="submit">Recherche</button>
  </span>
</form>


<?php
if (isset($_GET['submit'])) {
  @$searc = $_GET['search'];
  $query = "SELECT * FROM `province`  P
  INNER JOIN commune C
  ON p.idProv= C.idProv
  INNER JOIN association A
  ON C.idCom = A.idCom
  WHERE 
  -- CONCAT( nom ,
   nomProv
  --  )
   LIKE '%$searc%'";
  @$run = mysqli_query($connect, $query);

  if (mysqli_num_rows($run) > 0) {
?>


    <!-- Association Card -->

    <section class="py-5 " id="services">
      <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-8 row-cols-xl-4 row-cols-sm-12 justify-content-center">
          <?php

          while ($us = mysqli_fetch_assoc($run)) {

          ?>
            <div class="col mb-5">
              <div class="card h-100" id="card">
                <!-- association image-->
                <img class="card-img-top" src="<?php echo $us['imgAssoc']; ?>" alt="..." />
                <div class="card-body p-4">
                  <div class="text-center">
                    <!-- name-->
                    <h5 class="fw-bolder"><?php echo $us['nom']; ?></h5>
                    <!-- -->
                    ASSOCIATION
                  </div>
                </div>
                <!-- detAssociation-->
                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                  <div class="text-center"> <a class="btn btn-outline-dark mt-auto" id="btn" href="deAss.php?idAssoc=<?= $us['idAssoc'] ?>">See more</a></div>
                </div>
              </div>
            </div>
          <?php
          }
          ?>
        </div>
      </div>
    </section>
    <!-- Search Valedation php -->

  <?php
  } 
  else {
  ?>
    <p class="ms-3">Pas disponible</p>
<?php
  }
}
?>
<!-- Search with map -->

<h3 class="text-center mb-3">Trouver des associations sur la carte</h3>
<div class=" d-flex justify-content-center">
  <iframe loading="lazy" class="col-sm-4 col-md-6 mb-5 rounded " style="border: none;" height="600" src="https://sigdef.eauxetforets.gov.ma/arcgis/apps/webappviewer/index.html?id=dae48463ca014a4e99963dc46f543163"></iframe>
</div>

<!--Carousel Wrapper-->
<div class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">

    <!--First slide-->
    <div class="carousel-item active">
      <div class="col-md-4" style="float:left">

        <div class="card mb-3 mx-3">
          <img class="card-img-top " src="../img/Slide1.jpg" alt="Card image cap">
        </div>
      </div>
      <div class="col-md-4" style="float:left">
        <div class="card mb-3 mx-3"><img class="card-img-top" src="../img/Slide2.jpg" alt="Card image cap"></div>
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

<!-- include Footer -->

<?php
include '../component/Footer.php';
?>

<!-- to move value of select in input -->

<script type="text/javascript">
  function fff() {
    let v = document.getElementById("ddlViewBy").value;
    document.getElementById("search").value = v;
    console.log(v)
  };
</script>
</body>

</html>