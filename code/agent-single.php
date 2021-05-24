<?php
  include "connexion_base_donnee/connexion_db.php";
  include "bd/selection_agent.php";
  include "bd/selection_bien.php";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>EstateAgency Bootstrap Template - Agent Single</title>
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
            <a class="nav-link " href="all-property-grid.php">Nos produits</a>
          </li>

          <!-- <li class="nav-item">
            <a class="nav-link " href="blog-grid.php">Blog</a>
          </li> -->

          <!-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
            <div class="dropdown-menu">
              <a class="dropdown-item " href="property-single.php">Propriété unique</a>
              <a class="dropdown-item " href="blog-single.php">Blog unique</a>
              <a class="dropdown-item " href="agents-grid.php">Grille d'agent</a>
              <a class="dropdown-item " href="agent-single.php">Agent unique</a>
            </div>
          </li> -->

          <li class="nav-item">
            <a class="nav-link active" href="agents-grid.php">Agents</a>
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
              <h1 class="title-single"><?php echo $selection_unique_agent["prenom_agent"] ?> 
              <br>  <?php echo $selection_unique_agent["nom_agent"] ?>
              </h1>
              
              <span class="color-text-a">Agent dans ImmoAgency</span>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="#">Accueil</a>
                </li>
                <li class="breadcrumb-item">
                  <a href="#">Agents</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  <?php echo $selection_unique_agent["prenom_agent"] ?>
                  <br>
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section><!-- End Intro Single -->

    <!-- ======= Agent Single ======= -->
    <section class="agent-single">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="row">
              <div class="col-md-6">
                <div class="agent-avatar-box">
                  <img src="image_agents/<?php echo $selection_unique_agent["image_agent"] ?>" alt="" class="agent-avatar img-fluid" width="800" heigth="896">
                </div>
              </div>
              <div class="col-md-5 section-md-t3">
                <div class="agent-info-box">
                  <div class="agent-title">
                    <div class="title-box-d">
                      <h3 class="title-d"><?php echo $selection_unique_agent["prenom_agent"] ?>
                        <br> <?php echo $selection_unique_agent["nom_agent"] ?>
                      </h3>
                    </div>
                  </div>
                  <div class="agent-content mb-3">
                    <p class="content-d color-text-a">
                      <!--Afficher la description de l'agent-->
                    </p>
                    <div class="info-agents color-a">
                      <p>
                        <strong>Phone: </strong>
                        <span class="color-text-a"> <?php echo $selection_unique_agent["telephone_agent"] ?></span>
                      </p>
                      <p>
                        <strong>Email: </strong>
                        <span class="color-text-a"> <?php echo $selection_unique_agent["email_agent"] ?></span>
                      </p>
                    </div>
                  </div>
                  <div class="socials-footer">
                    <ul class="list-inline">
                      <li class="list-inline-item">
                        <a href="#" class="link-one">
                          <i class="bi bi-facebook" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="link-one">
                          <i class="bi bi-twitter" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="link-one">
                          <i class="bi bi-instagram" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="link-one">
                          <i class="bi bi-linkedin" aria-hidden="true"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12 section-t8">
            <div class="title-box-d">
              <h3 class="title-d">Mes Biens (<?php echo count($selection_biens_maison_agent) +  count($selection_biens_studio_agent) + count($selection_biens_appartement_agent) + count($selection_biens_terrain_agent)?>)</h3>
            </div>
          </div>
          <div class="row property-grid grid">
          <!--Debut de l'affichage des propriétés maison-->
          <h1><i>MAISON</i></h1>
          <?php
            for($i = 0; $i < count($selection_biens_maison_agent); $i ++)
            {
          ?>
            <div class="col-md-4">
              <div class="card-box-a card-shadow border">
                <div class="img-box-a">
                  <img src="images_services/maison/<?php echo $selection_biens_maison_agent[$i]['image_maison'] ?>" alt="" class="img-a img-fluid" style="width:400px; height : 400px">
                </div>
                <div class="card-overlay">
                  <div class="card-overlay-a-content">
                    <div class="card-header-a">
                      <h2 class="card-title-a">
                        <a href="property-single.php?id_service=<?php echo  $selection_biens_maison_agent[$i]['id_maison'] ?>&extension=maison"><?php echo $selection_biens_maison_agent[$i]['nom_maison']?></a>
                      </h2>
                    </div>
                    <div class="card-body-a">
                      <div class="price-box d-flex">
                        <span class="price-a"><?php echo  $selection_biens_maison_agent[$i]['status_maison'] ?> | <?php echo  $selection_biens_maison_agent[$i]['prix_maison'] ?> FCFA</span>
                      </div>
                      <a href="property-single.php?id_service=<?php echo  $selection_biens_maison_agent[$i]['id_maison'] ?>&extension=maison" class="link-a">Click here to view
                        <span class="bi bi-chevron-right"></span>
                      </a>
                    </div>
                    <div class="card-footer-a">
                      <ul class="card-info d-flex justify-content-around">
                        <li>
                          <h4 class="card-info-title">Area</h4>
                          <span><?php echo  $selection_biens_maison_agent[$i]['surface_maison'] ?>m
                            <sup>2</sup>
                          </span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Beds</h4>
                          <span><?php echo  $selection_biens_maison_agent[$i]['nombre_lit_maison'] ?></span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Baths</h4>
                          <span>4</span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Garages</h4>
                          <span><?php echo  $selection_biens_maison_agent[$i]['nombre_de_garage_maison'] ?></span>
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
            for($i = 0; $i < count($selection_biens_appartement_agent); $i ++)
            {
          ?>
            <div class="col-md-4">
              <div class="card-box-a card-shadow border">
                <div class="img-box-a">
                  <img src="images_services/app/<?php echo $selection_biens_appartement_agent[$i]['image_app'] ?>" alt="" class="img-a img-fluid" style="width:400px; height : 400px">
                </div>
                <div class="card-overlay">
                  <div class="card-overlay-a-content">
                    <div class="card-header-a">
                      <h2 class="card-title-a">
                        <a href="property-single.php?id_service=<?php echo  $selection_biens_appartement_agent[$i]['id_app'] ?>&extension=app"><?php echo $selection_biens_appartement_agent[$i]['nom_app']?></a>
                      </h2>
                    </div>
                    <div class="card-body-a">
                      <div class="price-box d-flex">
                        <span class="price-a"><?php echo  $selection_biens_appartement_agent[$i]['status_app'] ?> | <?php echo  $selection_biens_appartement_agent[$i]['prix_app'] ?> FCFA</span>
                      </div>
                      <a href="property-single.php?id_service=<?php echo  $selection_biens_appartement_agent[$i]['id_app'] ?>&extension=app" class="link-a">Click here to view
                        <span class="bi bi-chevron-right"></span>
                      </a>
                    </div>
                    <div class="card-footer-a">
                      <ul class="card-info d-flex justify-content-around">
                        <li>
                          <h4 class="card-info-title">Area</h4>
                          <span><?php echo  $selection_biens_appartement_agent[$i]['surface_app'] ?>m
                            <sup>2</sup>
                          </span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Beds</h4>
                          <span><?php echo  $selection_biens_appartement_agent[$i]['nombre_lit_app'] ?></span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Baths</h4>
                          <span>4</span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Garages</h4>
                          <span><?php echo  $selection_biens_appartement_agent[$i]['nombre_de_garage_app'] ?></span>
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
          <h1><i>STUDIO</i></h1>
          <?php
            for($i = 0; $i < count($selection_biens_studio_agent); $i ++)
            {
          ?>
            <div class="col-md-4">
              <div class="card-box-a card-shadow border">
                <div class="img-box-a">
                  <img src="images_services/studio/<?php echo $selection_biens_studio_agent[$i]['image_studio'] ?>" alt="" class="img-a img-fluid" style="width:400px; height : 400px">
                </div>
                <div class="card-overlay">
                  <div class="card-overlay-a-content">
                    <div class="card-header-a">
                      <h2 class="card-title-a">
                        <a href="property-single.php?id_service=<?php echo  $selection_biens_studio_agent[$i]['id_studio'] ?>&extension=studio"><?php echo $selection_biens_studio_agent[$i]['nom_studio']?></a>
                      </h2>
                    </div>
                    <div class="card-body-a">
                      <div class="price-box d-flex">
                        <span class="price-a"><?php echo  $selection_biens_studio_agent[$i]['status_studio'] ?> | <?php echo  $selection_biens_studio_agent[$i]['prix_studio'] ?> FCFA</span>
                      </div>
                      <a href="property-single.php?id_service=<?php echo  $selection_biens_studio_agent[$i]['id_studio'] ?>&extension=studio" class="link-a">Click here to view
                        <span class="bi bi-chevron-right"></span>
                      </a>
                    </div>
                    <div class="card-footer-a">
                      <ul class="card-info d-flex justify-content-around">
                        <li>
                          <h4 class="card-info-title">Area</h4>
                          <span><?php echo  $selection_biens_studio_agent[$i]['surface_studio'] ?>m
                            <sup>2</sup>
                          </span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Baths</h4>
                          <span>4</span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Garages</h4>
                          <span><?php echo  $selection_biens_studio_agent[$i]['nombre_de_garage_studio'] ?></span>
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
            for($i = 0; $i < count($selection_biens_terrain_agent); $i ++)
            {
          ?>
            <div class="col-md-4">
              <div class="card-box-a card-shadow border">
                <div class="img-box-a">
                  <img src="images_services/terrain/<?php echo $selection_biens_terrain_agent[$i]['image_terrain'] ?>" alt="" class="img-a img-fluid" style="width:400px; height : 400px">
                </div>
                <div class="card-overlay">
                  <div class="card-overlay-a-content">
                    <div class="card-header-a">
                      <h2 class="card-title-a">
                        <a href="property-single.php?id_service=<?php echo  $selection_biens_terrain_agent[$i]['id_terrain'] ?>&extension=terrain"><?php echo $selection_biens_terrain_agent[$i]['nom_terrain']?></a>
                      </h2>
                    </div>
                    <div class="card-body-a">
                      <div class="price-box d-flex">
                        <span class="price-a"><?php echo  $selection_biens_terrain_agent[$i]['status_terrain'] ?> | <?php echo  $selection_biens_terrain_agent[$i]['prix_terrain'] ?> FCFA</span>
                      </div>
                      <a href="property-single.php?id_service=<?php echo  $selection_biens_terrain_agent[$i]['id_terrain'] ?>&extension=terrain" class="link-a">Click here to view
                        <span class="bi bi-chevron-right"></span>
                      </a>
                    </div>
                    <div class="card-footer-a">
                      <ul class="card-info d-flex justify-content-around">
                        <li>
                          <h4 class="card-info-title">Area</h4>
                          <span><?php echo  $selection_biens_terrain_agent[$i]['surface_terrain'] ?>m
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
      </div>
    </section><!-- End Agent Single -->

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