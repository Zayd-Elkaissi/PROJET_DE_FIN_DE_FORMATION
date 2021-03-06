
<!-- connection include -->
<?php
include '../inc/conn.php';
?>
<!doctype html>
<html>

<!-- Nav -->

<?php
include '../component/Nav.php';
?>

<!-- header slide -->

<header>
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div>
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="../img/headr1.png" class="d-block w-100 mt-0 h-25" alt="pr">
          <div class="carousel-caption ">
            <h2 class="hunting">HuntGo</h2>
            <h3 class="p">La Chasse Au Maroc .</h3>
          </div>
        </div>
        <div class="carousel-item">
          <img src="../img/headr2.png" class="d-block w-100" alt="...">
          <div class="carousel-caption ">
            <h5 class="new">HuntGo</h5>
            <h4 class="da">La Chasse Au Maroc</h4>
          </div>
        </div>
        <div class="carousel-item">
          <img src="../img/headr.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption ">
            <h5 class="new">La Chasse Au Maroc</h5>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
</header>

<!-- First section -->

<section class="bg-light py-1" id="prO">
  <div class="container-fluid px-4 px-lg-5">
    <div class="row gx-0 mb-4 mb-lg-5 align-items-center justify-content-center">
      <div class="col-xl-6 col-lg-5"><img class="img-fluid rounded" src=" ../img/History1.jpg" alt="...">
      </div>
      <div class="col-xl-6 col-lg-5  mt-3">
        <div class="featured-text text-center text-lg-left mx-3">
          <h4 class="fs-4">Histoire de la chasse au Maroc</h4>
          <p class="text-secondary text-start ">La pratique de la chasse a toujours ??t?? ancr??e dans les traditions des
            Marocains, car elle a ??volu?? au fil du temps, passant de la recherche d'une nourriture constitu??e de
            viande n??cessaire ?? la survie de l'esp??ce humaine et ?? son d??veloppement ?? une activit?? r??cr??ative
            habituellement r??serv??e aux riches. . . Aujourd'hui, plus de 80 000 tireurs d'??lite marocains et environ 3
            000 tireurs d'??lite ??trangers pratiquent ce passe-temps, car le secteur des tireurs d'??lite occupe
            actuellement une place pr??pond??rante dans les domaines culturels, r??cr??atifs, sociaux et ??conomique. La
            chasse joue actuellement un r??le dans le d??veloppement local dans la mesure o?? de nombreux secteurs
            parall??les b??n??ficient de cette activit?? : comme les commer??ants de fournitures et d'??quipements de p??che,
            les propri??taires de restaurants, d'h??tels et de transports, ainsi que les unit??s de production de gibier,
            etc.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Last section -->

<section class="container my-4">
  <div class="text-center mb-4">
    <h4>Pourcentage de chasse par secteur</h4>
  </div>
  <div class=" d-flex justify-content-center "><img class="img-fluid" src="../img/Chasse.png" alt="..."></div>
  </div>
</section>

<!-- Biodiversit?? au Maroc -->

<section class="bg-light py-4" id="prO">
  <div class="container-fluid px-4 px-lg-5">
    <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
      <div class="col-xl-6 col-lg-5">
        <div class="featured-text text-center text-lg-left mx-3">
          <h4>Biodiversit?? au Maroc</h4>
          <p class="text-secondary text-start ">Le Maroc est situ?? dans la r??gion nord-ouest du continent africain, et malgr?? son climat rigoureux, il contient une faune vari??e, gr??ce ?? la pr??sence d'au moins 40 ??cosyst??mes qui comprennent au moins 210 esp??ces d'oiseaux, dans plus de 105 esp??ces. Le Maroc est l'une des destinations pr??f??r??es des amateurs de p??che venant notamment d'Europe, gr??ce ?? sa proximit??, un acc??s facile ?? des lieux de s??jour distinctifs ?? des prix raisonnables, un bon r??seau de transport, y compris les a??roports, et l'abondance de r??serves de chasse.</p>
        </div>
      </div>
      <div class="col-xl-6 col-lg-5"><img class="img-fluid rounded " src="../img/history2.png" alt="...">
      </div>
    </div>
  </div>
</section>

<!-- Footer include -->

<?php
include '../component/Footer.php';
?>

</body>

</html>