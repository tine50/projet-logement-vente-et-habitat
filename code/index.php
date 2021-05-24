<?php
  include "connexion_base_donnee/connexion_db.php";
  include "bd/selection_bien.php";
  include "bd/selection_agent.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Accueil</title>
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
    <?= include "balises/nav.php"; ?>
  <!-- End Header/Navbar -->

  <!-- ======= Intro Section ======= -->
  <div class="intro intro-carousel swiper-container position-relative">
    <div class="swiper-wrapper">

      <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(assets/img/slide-1.jpg)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <p class="intro-title-top">Keur Massar
                      <br>Status : Vendu
                    </p>
                    <h1 class="intro-title mb-4 ">
                      <span class="color-b">204 </span> Keur Massar
                      <br> Parcelle Assainie U3
                    </h1>
                    <p class="intro-subtitle intro-price">
                      <a href="#"><span class="price-a">Vendu |  120000000 FCFA</span></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(assets/img/slide-2.jpg)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <p class="intro-title-top">Diamiadio
                      <br> Status : loué
                    </p>
                    <h1 class="intro-title mb-4">
                      <span class="color-b">Appartment </span> à Diamniadio
                      <br> Sinégindia
                    </h1>
                    <p class="intro-subtitle intro-price">
                      <a href="#"><span class="price-a">Loué à| 500000 FCFA</span></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(assets/img/terrain_header.jpg)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <p class="intro-title-top">Terain
                      <br> Status : Vendu
                    </p>
                    <h1 class="intro-title mb-4">
                      <span class="color-b">Pikine </span> 
                      <br> Terrain ce trouvant à Pikine
                    </h1>
                    <p class="intro-subtitle intro-price">
                      <a href="#"><span class="price-a">Vendu | 23000000 FCFA</span></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
    <div class="swiper-pagination"></div>
  </div><!-- End Intro Section -->

  <main id="main"> 
    <!-- ======= Latest Properties Section ======= -->
    <!--Maison-->

    <section class="section-property section-t8">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">Maison</h2>
              </div>
              <div class="title-link">
                <a href="property-grid.php?type_service=maison&extension=maison">Tous les biens
                  <span class="bi bi-chevron-right"></span>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div id="property-carousel" class="swiper-container">
          <div class="swiper-wrapper">

            <?php
            for($i = 0; $i < count($selection_maison); $i ++)
              {
            ?>
            <div class="carousel-item-b swiper-slide">
             
                <div class="card-box-a card-shadow">
                <div class="img-box-a">
                  <img src="images_services/maison/<?php echo $selection_maison[$i]['image_maison'] ?>" alt="" style="width:600px; height : 400px" class="img-a img-fluid">
                </div>
                <div class="card-overlay">
                  <div class="card-overlay-a-content">
                    <div class="card-header-a">
                      <h2 class="card-title-a">
                        <a href="property-single.php?id_service=<?php echo  $selection_maison[$i]['id_maison'] ?>&extension=maison"><?php echo  $selection_maison[$i]['nom_maison'] ?></a>
                      </h2>
                    </div>
                    <div class="card-body-a">
                      <div class="price-box d-flex">
                        <span class="price-a"><?php echo  $selection_maison[$i]['status_maison'] ?> | <?php echo  $selection_maison[$i]['prix_maison'] ?> FCFA</span>
                      </div>
                      <a href="property-single.php?id_service=<?php echo  $selection_maison[$i]['id_maison'] ?>&extension=maison" class="link-a">Click here to view
                        <span class="bi bi-chevron-right"></span>
                      </a>
                    </div>
                    <div class="card-footer-a">
                      <ul class="card-info d-flex justify-content-around">
                        <li>
                          <h4 class="card-info-title">Area</h4>
                          <span><?php echo  $selection_maison[$i]['surface_maison'] ?>m
                            <sup>2</sup>
                          </span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Beds</h4>
                          <span><?php echo  $selection_maison[$i]['nombre_lit_maison'] ?></span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Baths</h4>
                          <span>4</span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Garages</h4>
                          <span><?php echo  $selection_maison[$i]['nombre_de_garage_maison'] ?></span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              
              
            </div><!-- End carousel item -->
            <?php
              }
            ?>
          </div>
        </div>
        <div class="propery-carousel-pagination carousel-pagination"></div>

      </div>
    </section>

    <!--End Maison-->

    <!--Appartement-->
    <section class="section-property section-t8">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">Appartment</h2>
              </div>
              <div class="title-link">
                <a href="property-grid.php?type_service=appartement&extension=app">Tous les biens
                  <span class="bi bi-chevron-right"></span>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div id="property-carousel" class="swiper-container">
          <div class="swiper-wrapper">
          <?php
            for($i = 0; $i < count($selection_appartement); $i ++)
              {
            ?>
            <div class="carousel-item-b swiper-slide">
             
                <div class="card-box-a card-shadow">
                <div class="img-box-a">
                  <img src="images_services/app/<?php echo $selection_appartement[$i]['image_app'] ?>" alt="" style="width:600px; height : 400px" class="img-a img-fluid">
                </div>
                <div class="card-overlay">
                  <div class="card-overlay-a-content">
                    <div class="card-header-a">
                      <h2 class="card-title-a">
                        <a href="property-single.php?id_service=<?php echo  $selection_appartement[$i]['id_app'] ?>&extension=app"><?php echo  $selection_appartement[$i]['nom_app'] ?></a>
                      </h2>
                    </div>
                    <div class="card-body-a">
                      <div class="price-box d-flex">
                        <span class="price-a"><?php echo  $selection_appartement[$i]['status_app'] ?> | <?php echo  $selection_appartement[$i]['prix_app'] ?> FCFA</span>
                      </div>
                      <a href="property-single.php?id_service=<?php echo  $selection_appartement[$i]['id_app'] ?>&extension=app" class="link-a">Click here to view
                        <span class="bi bi-chevron-right"></span>
                      </a>
                    </div>
                    <div class="card-footer-a">
                      <ul class="card-info d-flex justify-content-around">
                        <li>
                          <h4 class="card-info-title">Area</h4>
                          <span><?php echo  $selection_appartement[$i]['surface_app'] ?>m
                            <sup>2</sup>
                          </span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Piéces</h4>
                          <span><?php echo  $selection_appartement[$i]['nombre_lit_app'] ?></span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Baths</h4>
                          <span>4</span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Garages</h4>
                          <span><?php echo  $selection_appartement[$i]['nombre_de_garage_app'] ?></span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              
              
            </div><!-- End carousel item -->
            <?php
              }
            ?>             
          </div>
        </div>
        <div class="propery-carousel-pagination carousel-pagination"></div>

      </div>
    </section>    
    <!--End Appartement-->

    <!--Studio-->
    <section class="section-property section-t8">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">Studio</h2>
              </div>
              <div class="title-link">
                <a href="property-grid.php?type_service=studio&extension=studio">Tous les biens
                  <span class="bi bi-chevron-right"></span>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div id="property-carousel" class="swiper-container">
          <div class="swiper-wrapper">

          <?php
            for($i = 0; $i < count($selection_studio); $i ++)
              {
            ?>
            <div class="carousel-item-b swiper-slide">
             
                <div class="card-box-a card-shadow">
                <div class="img-box-a">
                  <img src="images_services/studio/<?php echo $selection_studio[$i]['image_studio'] ?>" alt="" style="width:600px; height : 400px" class="img-a img-fluid">
                </div>
                <div class="card-overlay">
                  <div class="card-overlay-a-content">
                    <div class="card-header-a">
                      <h2 class="card-title-a">
                        <a href="property-single.php?id_service=<?php echo  $selection_studio[$i]['id_studio'] ?>&extension=studio"><?php echo  $selection_studio[$i]['nom_studio'] ?></a>
                      </h2>
                    </div>
                    <div class="card-body-a">
                      <div class="price-box d-flex">
                        <span class="price-a"><?php echo  $selection_studio[$i]['status_studio'] ?> | <?php echo  $selection_studio[$i]['prix_studio'] ?> FCFA</span>
                      </div>
                      <a href="property-single.php?id_service=<?php echo  $selection_studio[$i]['id_studio'] ?>&extension=studio" class="link-a">Click here to view
                        <span class="bi bi-chevron-right"></span>
                      </a>
                    </div>
                    <div class="card-footer-a">
                      <ul class="card-info d-flex justify-content-around">
                        <li>
                          <h4 class="card-info-title">Area</h4>
                          <span><?php echo  $selection_studio[$i]['surface_studio'] ?>m
                            <sup>2</sup>
                          </span>
                        </li>
                        <!-- <li>
                          <h4 class="card-info-title">Beds</h4>
                          <span><?php echo  $selection_studio[$i]['nombre_lit_maison'] ?></span>
                        </li> -->
                        <li>
                          <h4 class="card-info-title">Piéces</h4>
                          <span><?php echo  $selection_studio[$i]['nombre_chambre_studio'] ?></span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Garages</h4>
                          <span><?php echo  $selection_studio[$i]['nombre_de_garage_studio'] ?></span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              
              
            </div><!-- End carousel item -->
            <?php
              }
            ?>
          </div>
        </div>
        <div class="propery-carousel-pagination carousel-pagination"></div>

      </div>
    </section>    
    <!--End Studio-->


    <!--Terrain-->
    <section class="section-property section-t8">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">Terrain</h2>
              </div>
              <div class="title-link">
                <a href="property-grid.php?type_service=terrain&extension=terrain">Tous les biens
                  <span class="bi bi-chevron-right"></span>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div id="property-carousel" class="swiper-container">
          <div class="swiper-wrapper">

          <?php
            for($i = 0; $i < count($selection_terrain); $i ++)
              {
            ?>
            <div class="carousel-item-b swiper-slide">
             
                <div class="card-box-a card-shadow">
                <div class="img-box-a">
                  <img src="images_services/terrain/<?php echo $selection_terrain[$i]['image_terrain'] ?>" alt="" style="width:600px; height : 400px" class="img-a img-fluid">
                </div>
                <div class="card-overlay">
                  <div class="card-overlay-a-content">
                    <div class="card-header-a">
                      <h2 class="card-title-a">
                        <a href="property-single.php?id_service=<?php echo  $selection_terrain[$i]['id_terrain'] ?>&extension=terrain"><?php echo  $selection_terrain[$i]['nom_terrain'] ?></a>
                      </h2>
                    </div>
                    <div class="card-body-a">
                      <div class="price-box d-flex">
                        <span class="price-a"><?php echo  $selection_terrain[$i]['status_terrain'] ?> | <?php echo  $selection_terrain[$i]['prix_terrain'] ?> FCFA</span>
                      </div>
                      <a href="property-single.php?id_service=<?php echo  $selection_terrain[$i]['id_terrain'] ?>&extension=terrain" class="link-a">Click here to view
                        <span class="bi bi-chevron-right"></span>
                      </a>
                    </div>
                    <div class="card-footer-a">
                      <ul class="card-info d-flex justify-content-around">
                        <li>
                          <h4 class="card-info-title">Area</h4>
                          <span><?php echo  $selection_terrain[$i]['surface_terrain'] ?>m
                            <sup>2</sup>
                          </span>
                        </li>
                        <!-- <li>
                          <h4 class="card-info-title">Piéces</h4>
                          <span></span>
                        </li> -->
                        <!-- <li>
                          <h4 class="card-info-title">Baths</h4>
                          <span>4</span>
                        </li> -->
                        <!-- <li>
                          <h4 class="card-info-title">Garages</h4>
                          <span></span>
                        </li> -->
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              
              
            </div><!-- End carousel item -->
            <?php
              }
            ?>
          </div>
        </div>
        <div class="propery-carousel-pagination carousel-pagination"></div>

      </div>
    </section>    
    <!--End Terrain-->

    <!-- End Latest Properties Section -->

    <!-- ======= Agents Section ======= -->
    <section class="section-agents section-t8">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">Meilleurs agents                </h2>
              </div>
              <div class="title-link">
                <a href="agents-grid.php">All Agents
                  <span class="bi bi-chevron-right"></span>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
        <?php
        for($z = 0; $z < count($selection_agent_index); $z ++)
        {
        ?>
          <div class="col-md-4">
            <div class="card-box-d">
              <div class="card-img-d">
                <img src="image_agents/<?php echo $selection_agent_index[$z]['image_agent'] ?>" alt="" class="img-d img-fluid">
              </div>
              <div class="card-overlay card-overlay-hover">
                <div class="card-header-d">
                  <div class="card-title-d align-self-center">
                    <h3 class="title-d">
                      <a href="agent-single.php?id=<?php echo $selection_agent_index[$z]['id_agent'] ?>" class="link-two"><?php echo $selection_agent_index[$z]['prenom_agent'] ?> <?php echo $selection_agent_index[$z]['nom_agent'] ?></a>
                    </h3>
                  </div>
                </div>
                <div class="card-body-d">
                  <p class="content-d color-text-a">
                    Charger des relations entre les clients
                  </p>
                  <div class="info-agents color-a">
                    <p>
                      <strong>Phone: </strong> <?php echo $selection_agent_index[$z]['telephone_agent'] ?>
                    </p>
                    <p>
                      <strong>Email: </strong> <?php echo $selection_agent_index[$z]['email_agent'] ?>
                    </p>
                  </div>
                </div>
                <div class="card-footer-d">
                  <div class="socials-footer d-flex justify-content-center">
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
        <?php
        }
        ?>

        </div>
      </div>
    </section><!-- End Agents Section -->

    <!-- ======= Latest News Section ======= -->
    <section class="section-news section-t8">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">Dernières nouvelles                </h2>
              </div>
              <div class="title-link">
                <a href="blog-grid.php">Toutes les nouvelles
                  <span class="bi bi-chevron-right"></span>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div id="news-carousel" class="swiper-container">
          <div class="swiper-wrapper">

            <div class="carousel-item-c swiper-slide">
              <div class="card-box-b card-shadow news-box">
                <div class="img-box-b">
                  <img src="assets/img/post-2.jpg" alt="" class="img-b img-fluid">
                </div>
                <div class="card-overlay">
                  <div class="card-header-b">
                    <div class="card-category-b">
                      <a href="#" class="category-b">House</a>
                    </div>
                    <div class="card-title-b">
                      <h2 class="title-2">
                        <a href="blog-single.php">House is comming
                          <br> new</a>
                      </h2>
                    </div>
                    <div class="card-date">
                      <span class="date-b">18 Sep. 2017</span>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End carousel item -->

            <div class="carousel-item-c swiper-slide">
              <div class="card-box-b card-shadow news-box">
                <div class="img-box-b">
                  <img src="assets/img/post-5.jpg" alt="" class="img-b img-fluid">
                </div>
                <div class="card-overlay">
                  <div class="card-header-b">
                    <div class="card-category-b">
                      <a href="#" class="category-b">Travel</a>
                    </div>
                    <div class="card-title-b">
                      <h2 class="title-2">
                        <a href="blog-single.php">Travel is comming
                          <br> new</a>
                      </h2>
                    </div>
                    <div class="card-date">
                      <span class="date-b">18 Sep. 2017</span>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End carousel item -->

            <div class="carousel-item-c swiper-slide">
              <div class="card-box-b card-shadow news-box">
                <div class="img-box-b">
                  <img src="assets/img/post-7.jpg" alt="" class="img-b img-fluid">
                </div>
                <div class="card-overlay">
                  <div class="card-header-b">
                    <div class="card-category-b">
                      <a href="#" class="category-b">Park</a>
                    </div>
                    <div class="card-title-b">
                      <h2 class="title-2">
                        <a href="blog-single.php">Park is comming
                          <br> new</a>
                      </h2>
                    </div>
                    <div class="card-date">
                      <span class="date-b">18 Sep. 2017</span>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End carousel item -->

            <div class="carousel-item-c swiper-slide">
              <div class="card-box-b card-shadow news-box">
                <div class="img-box-b">
                  <img src="assets/img/post-3.jpg" alt="" class="img-b img-fluid">
                </div>
                <div class="card-overlay">
                  <div class="card-header-b">
                    <div class="card-category-b">
                      <a href="#" class="category-b">Travel</a>
                    </div>
                    <div class="card-title-b">
                      <h2 class="title-2">
                        <a href="#">Travel is comming
                          <br> new</a>
                      </h2>
                    </div>
                    <div class="card-date">
                      <span class="date-b">18 Sep. 2017</span>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End carousel item -->

          </div>
        </div>

        <div class="news-carousel-pagination carousel-pagination"></div>
      </div>
    </section><!-- End Latest News Section -->

    <!-- ======= Testimonials Section ======= -->
    <section class="section-testimonials section-t8 nav-arrow-a">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">Témoignages</h2>
              </div>
            </div>
          </div>
        </div>

        <div id="testimonial-carousel" class="swiper-container">
          <div class="swiper-wrapper">

            <div class="carousel-item-a swiper-slide">
              <div class="testimonials-box">
                <div class="row">
                  <div class="col-sm-12 col-md-6">
                    <div class="testimonial-img">
                      <img src="assets/img/testimonial-1.jpg" alt="" class="img-fluid">
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-6">
                    <div class="testimonial-ico">
                      <i class="bi bi-chat-quote-fill"></i>
                    </div>
                    <div class="testimonials-content">
                      <p class="testimonial-text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, cupiditate ea nam praesentium
                        debitis hic ber quibusdam
                        voluptatibus officia expedita corpori.
                      </p>
                    </div>
                    <div class="testimonial-author-box">
                      <img src="assets/img/mini-testimonial-1.jpg" alt="" class="testimonial-avatar">
                      <h5 class="testimonial-author">Albert & Erika</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End carousel item -->

            <div class="carousel-item-a swiper-slide">
              <div class="testimonials-box">
                <div class="row">
                  <div class="col-sm-12 col-md-6">
                    <div class="testimonial-img">
                      <img src="assets/img/testimonial-2.jpg" alt="" class="img-fluid">
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-6">
                    <div class="testimonial-ico">
                      <i class="bi bi-chat-quote-fill"></i>
                    </div>
                    <div class="testimonials-content">
                      <p class="testimonial-text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, cupiditate ea nam praesentium
                        debitis hic ber quibusdam
                        voluptatibus officia expedita corpori.
                      </p>
                    </div>
                    <div class="testimonial-author-box">
                      <img src="assets/img/mini-testimonial-2.jpg" alt="" class="testimonial-avatar">
                      <h5 class="testimonial-author">Pablo & Emma</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End carousel item -->

          </div>
        </div>
        <div class="testimonial-carousel-pagination carousel-pagination"></div>

      </div>
    </section><!-- End Testimonials Section -->

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