<?php
    include "requette/model_insertion_agent.php";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'ajout de produit</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="../code/assets/img/favicon.png" rel="icon">
    <link href="../code/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../code/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="../code/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../code/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../code/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="../code/assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
    * Template Name: EstateAgency - v4.1.0
    * Template URL: https://bootstrapmade.com/real-estate-agency-bootstrap-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>
<body>
<form method="POST" action="" enctype="multipart/form-data">
    <br>
    <div class="form-row row">
        <div class="form-group col">
            <!-- <label for="nom_agent">Nom du bien</label> -->
            <input type="text" class="form-control" name="nom_agent" id="nom_agent" placeholder="Nom de l'agent">
        </div>
        <div class="form-group col">
            <!-- <label for="prenom_agent">Location du bien</label> -->
            <input type="text" class="form-control" name="prenom_agent" id="prenom_agent" placeholder="prenom de l'agent">
        </div>
    </div>
    <br>
    <div class="form-row row">
        <div class="form-group col">
            <!-- <label for="telephone_agent">Description</label> -->
            <input type="number" class="form-control" name="telephone_agent" id="telephone_agent" placeholder="téléphone de l'agent">
        </div>
        <div class="form-group col">
            <!-- <label for="email_agent">Prix</label> -->
            <input type="email" class="form-control" name="email_agent" id="email_agent" placeholder="email de l'agent">
        </div> 
        <div class="form-group col">
            <!-- <label for="image_agent">Image</label> -->
            <input type="file" class="form-control" name="image_agent" id="image_agent">
        </div>       
    </div>
    <br><br>
    <div class="col-md-12 text-center">
        <button type="submit" class="btn btn-a" name="ajout_agent">Add Agent</button>
    </div>  
</form>
</body>
</html>