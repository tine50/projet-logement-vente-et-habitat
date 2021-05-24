<?php

include "connexion_base_donnee/connexion_db.php";

@$type_service = $_GET['type_service'];
@$extension = $_GET['extension'];
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
  <link href="assets/css/style.css" rel="stylesheet">>
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
  </nav>
  <!-- End Header/Navbar -->

  <main id="main">

    <!-- ======= Intro Single ======= -->
    <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single">Nos propriétés étonnantes </h1>
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
                  Grille de propriétés
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
          <div class="col-sm-12">
          </div>
          <?php
          for($i = 0; $i < COUNT($selection_all); $i ++)
          {
          ?>
          <div class="col-md-4">
            <div class="card-box-a card-shadow">
              <div class="img-box-a">
                <img src="images_services/<?php echo $extension?>/<?php echo $selection_all[$i]["image_$extension"]?>" alt="" class="img-a img-fluid" style="width:600px; height : 400px">
              </div>
              <div class="card-overlay">
                <div class="card-overlay-a-content">
                  <div class="card-header-a">
                    <h2 class="card-title-a">
                      <a href="#"><?php echo $selection_all[$i]["nom_$extension"]?></a>
                    </h2>
                  </div>
                  <div class="card-body-a">
                    <div class="price-box d-flex">
                      <span class="price-a"><?php echo $selection_all[$i]["status_$extension"] ?> | <?php echo $selection_all[$i]["prix_$extension"]?> FCFA</span>
                    </div>
                    <a href="property-single.php" class="link-a">Click here to view
                      <span class="bi bi-chevron-right"></span>
                    </a>
                  </div>
                  <div class="card-footer-a">
                    <ul class="card-info d-flex justify-content-around">
                      <li>
                        <h4 class="card-info-title">Area</h4>
                        <span><?php echo $selection_all[$i]["surface_$extension"]?>m
                          <sup>2</sup>
                        </span>
                      </li>
                      <li>
                        
                        <?php
                        if(!$type_service == 'studio' || !$type_service == 'terrain')
                        {
                        ?>
                        <h4 class="card-info-title">Beds</h4>
                        <span><?php echo $selection_all[$i]["nombre_lit_$extension"]?></span>
                        <?php
                        }
                        ?>
                      </li>
                      <!-- <li>
                        <h4 class="card-info-title">Baths</h4>
                        <span>4</span>
                      </li> -->
                      <li>
                      <?php
                        if(!$type_service == 'terrain')
                        {
                      ?>
                        <h4 class="card-info-title">Garages</h4>
                        <span><?php echo $selection_all[$i]["nombre_de_garage_$extension"]?></span>
                        <?php
                        }
                        ?>                      
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

        </div>
      </div>
    </section><!-- End Property Grid Single-->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
    <?php include "balises/footer.php"; ?>
  <!-- End  Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>