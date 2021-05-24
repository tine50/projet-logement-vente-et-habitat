<?php
include "connexion_base_donnee/connexion_db.php";
include "bd/selection_bien.php";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>EstateAgency Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: EstateAgency - v4.1.0
  * Template URL: https://bootstrapmade.com/real-estate-agency-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<body>

  <!-- ======= Property Search Section ======= -->
  <div class="click-closed"></div>
    <!--/ Form Search Star /-->
    <?=  include "balises/search.php";?>
    <!-- End Property Search Section -->>

  <!-- ======= Header/Navbar ======= -->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="index.php">Immobo<span class="color-b">Agency</span></a>

      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">

          <li class="nav-item">
            <a class="nav-link " href="index.php">Accueil</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="about.php">A propos</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" href="all-property-grid.php">Nos produits</a>
          </li>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="agents-grid.php">Agents</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="contact.php">Contacter</a>
          </li>
        </ul>
      </div>

      <button type="button" class="btn btn-b-n navbar-toggle-box navbar-toggle-box-collapse" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01">
        <i class="bi bi-search"></i>
      </button>

    </div>
  </nav><!-- End Header/Navbar -->

  <main id="main">

    <!-- ======= Intro Single ======= -->
    <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single">Nos propriétés étonnantes</h1>
              <span class="color-text-a">Propriétés de la grille</span>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="#">Accueil</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  Propriétés de la grille
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section><!-- End Intro Single-->

    <!-- ======= Property Grid ======= -->
    <section class="property-grid grid">
      <div class="container">
        <div class="row">
          <!--Debut de l'affichage des propriétés maison-->
          <h1><i>MAISON</i></h1>
          <?php
            for($i = 0; $i < count($selection_all_maison); $i ++)
            {
          ?>
            <div class="col-md-4">
              <div class="card-box-a card-shadow border">
                <div class="img-box-a">
                  <img src="images_services/maison/<?php echo $selection_all_maison[$i]['image_maison'] ?>" alt="" class="img-a img-fluid" style="width:400px; height : 400px">
                </div>
                <div class="card-overlay">
                  <div class="card-overlay-a-content">
                    <div class="card-header-a">
                      <h2 class="card-title-a">
                        <a href="property-single.php?id_service=<?php echo  $selection_all_maison[$i]['id_maison'] ?>&extension=maison"><?php echo $selection_all_maison[$i]['nom_maison']?></a>
                      </h2>
                    </div>
                    <div class="card-body-a">
                      <div class="price-box d-flex">
                        <span class="price-a"><?php echo  $selection_all_maison[$i]['status_maison'] ?> | <?php echo $selection_all_maison[$i]['prix_maison'] ?> FCFA</span>
                      </div>
                      <a href="property-single.php?id_service=<?php echo  $selection_all_maison[$i]['id_maison'] ?>&extension=maison" class="link-a">Click here to view
                        <span class="bi bi-chevron-right"></span>
                      </a>
                    </div>
                    <div class="card-footer-a">
                      <ul class="card-info d-flex justify-content-around">
                        <li>
                          <h4 class="card-info-title">Area</h4>
                          <span><?php echo  $selection_all_maison[$i]['surface_maison'] ?>m
                            <sup>2</sup>
                          </span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Beds</h4>
                          <span><?php echo  $selection_all_maison[$i]['nombre_lit_maison'] ?></span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Baths</h4>
                          <span>4</span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Garages</h4>
                          <span><?php echo  $selection_all_maison[$i]['nombre_de_garage_maison'] ?></span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php
            }
          ?>
          <!--Fin de l'affichage des propriétés maison-->

          <!--Debut de l'affichage des propriétés appartement-->
          <h1><i>APPARTEMENT</i></h1>
          <?php
            for($i = 0; $i < count($selection_all_appartement); $i ++)
            {
          ?>
            <div class="col-md-4">
              <div class="card-box-a card-shadow border">
                <div class="img-box-a">
                  <img src="images_services/app/<?php echo $selection_all_appartement[$i]['image_app'] ?>" alt="" class="img-a img-fluid" style="width:400px; height : 400px">
                </div>
                <div class="card-overlay">
                  <div class="card-overlay-a-content">
                    <div class="card-header-a">
                      <h2 class="card-title-a">
                        <a href="property-single.php?id_service=<?php echo  $selection_all_appartement[$i]['id_app'] ?>&extension=app"><?php echo $selection_all_appartement[$i]['nom_app']?></a>
                      </h2>
                    </div>
                    <div class="card-body-a">
                      <div class="price-box d-flex">
                        <span class="price-a"><?php echo  $selection_all_appartement[$i]['status_app'] ?> | <?php echo  $selection_all_appartement[$i]['prix_app'] ?> FCFA</span>
                      </div>
                      <a href="property-single.php?id_service=<?php echo  $selection_all_appartement[$i]['id_app'] ?>&extension=app" class="link-a">Click here to view
                        <span class="bi bi-chevron-right"></span>
                      </a>
                    </div>
                    <div class="card-footer-a">
                      <ul class="card-info d-flex justify-content-around">
                        <li>
                          <h4 class="card-info-title">Area</h4>
                          <span><?php echo  $selection_all_appartement[$i]['surface_app'] ?>m
                            <sup>2</sup>
                          </span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Beds</h4>
                          <span><?php echo  $selection_all_appartement[$i]['nombre_lit_app'] ?></span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Baths</h4>
                          <span>4</span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Garages</h4>
                          <span><?php echo  $selection_all_appartement[$i]['nombre_de_garage_app'] ?></span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php
            }
          ?>
          <!--Fin de l'affichage des propriétés appartement-->

          <!--Debut de l'affichage des propriétés studio-->
          <h1 id="studio"><i>STUDIO</i></h1>
          <?php
            for($i = 0; $i < count($selection_all_studio); $i ++)
            {
          ?>
            <div class="col-md-4">
              <div class="card-box-a card-shadow border">
                <div class="img-box-a">
                  <img src="images_services/studio/<?php echo $selection_all_studio[$i]['image_studio'] ?>" alt="" class="img-a img-fluid" style="width:400px; height : 400px">
                </div>
                <div class="card-overlay">
                  <div class="card-overlay-a-content">
                    <div class="card-header-a">
                      <h2 class="card-title-a">
                        <a href="property-single.php?id_service=<?php echo  $selection_all_studio[$i]['id_studio'] ?>&extension=maison"><?php echo $selection_all_studio[$i]['nom_studio']?></a>
                      </h2>
                    </div>
                    <div class="card-body-a">
                      <div class="price-box d-flex">
                        <span class="price-a"><?php echo  $selection_all_studio[$i]['status_studio'] ?> | <?php echo  $selection_all_studio[$i]['prix_studio'] ?> FCFA</span>
                      </div>
                      <a href="property-single.php?id_service=<?php echo  $selection_all_studio[$i]['id_studio'] ?>&extension=studio" class="link-a">Click here to view
                        <span class="bi bi-chevron-right"></span>
                      </a>
                    </div>
                    <div class="card-footer-a">
                      <ul class="card-info d-flex justify-content-around">
                        <li>
                          <h4 class="card-info-title">Area</h4>
                          <span><?php echo  $selection_all_studio[$i]['surface_studio'] ?>m
                            <sup>2</sup>
                          </span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Baths</h4>
                          <span>4</span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Garages</h4>
                          <span><?php echo  $selection_all_studio[$i]['nombre_de_garage_studio'] ?></span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php
            }
          ?>
          <!--Fin de l'affichage des propriétés studio-->

          <!--Debut de l'affichage des propriétés terrain-->
          <h1><i>TERRAIN</i></h1>
          <?php
            for($i = 0; $i < count($selection_all_terrain); $i ++)
            {
          ?>
            <div class="col-md-4">
              <div class="card-box-a card-shadow border">
                <div class="img-box-a">
                  <img src="images_services/terrain/<?php echo $selection_all_terrain[$i]['image_terrain'] ?>" alt="" class="img-a img-fluid" style="width:400px; height : 400px">
                </div>
                <div class="card-overlay">
                  <div class="card-overlay-a-content">
                    <div class="card-header-a">
                      <h2 class="card-title-a">
                        <a href="property-single.php?id_service=<?php echo  $selection_all_terrain[$i]['id_terrain'] ?>&extension=terrain"><?php echo $selection_all_terrain[$i]['nom_terrain']?></a>
                      </h2>
                    </div>
                    <div class="card-body-a">
                      <div class="price-box d-flex">
                        <span class="price-a"><?php echo  $selection_all_terrain[$i]['status_terrain'] ?> | <?php echo  $selection_all_terrain  [$i]['prix_terrain'] ?> FCFA</span>
                      </div>
                      <a href="property-single.php?id_service=<?php echo  $selection_all_terrain[$i]['id_terrain'] ?>&extension=terrain" class="link-a">Click here to view
                        <span class="bi bi-chevron-right"></span>
                      </a>
                    </div>
                    <div class="card-footer-a">
                      <ul class="card-info d-flex justify-content-around">
                        <li>
                          <h4 class="card-info-title">Area</h4>
                          <span><?php echo  $selection_all_terrain[$i]['surface_terrain'] ?>m
                            <sup>2</sup>
                          </span>
                        </li>
                        <li>
                        <li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php
            }
          ?>
          <!--Fin de l'affichage des propriétés terrain-->
        </div>
      </div>
    </section><!-- End Property Grid Single-->

  </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <?php include "balises/footer.php"; ?>
    <!-- End  Footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/scrollreveal/scrollreveal.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>