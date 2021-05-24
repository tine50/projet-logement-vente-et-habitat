<?php
    include "requette/model_editer_bien.php";
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
<form method="POST" action="editer_bien.php?id_service=<?php echo $id_service ?>&id_agent_service=<?php echo $id_agent_service ?>&type_service=<?php echo $type_service ?>" enctype="multipart/form-data">
    <br>
    <div class="form-row row">
        <div class="form-group col">
            <!-- <label for="nom_service">Nom du bien</label> -->
            <input type="text" class="form-control" name="nom_service" id="nom_service" placeholder="Nom du bien" value="<?php echo $nom ?>">
        </div>
        <div class="form-group col">
            <!-- <label for="localisation_service">Location du bien</label> -->
            <input type="text" class="form-control" name="localisation_service" id="localisation_service" placeholder="Localisation du bien" value="<?php echo $localisation ?>">
        </div>
    </div>
    <br>
    <div class="form-row row">
        <div class="form-group col">
            <!-- <label for="description_service">Description</label> -->
            <input type="text" class="form-control" name="description_service" id="description_service" placeholder="Description" value="<?php echo $description ?>">
        </div>
        <div class="form-group col">
            <!-- <label for="prix_service">Prix</label> -->
            <input type="number" class="form-control" name="prix_service" id="prix_service" placeholder="Prix service" value="<?php echo $prix ?>">
        </div> 
        <div class="form-group col">
            <!-- <label for="status_service">status service</label> -->
            <select id="id_agent_service" name="id_agent_service" class="form-control">
                <option selected value="<?php echo $agent?>"><?php echo $agent ?></option>
                <?php
                for($i = 0; $i < count($selection_agent) ; $i ++)
                {
                ?>
                <option value="<?php echo $selection_agent[$i]['id_agent'] ?>"><?php echo $selection_agent[$i]['prenom_agent'].' '.$selection_agent[$i]['nom_agent'] ?></option>
                <?php
                }
                ?>
            </select>
        </div>       
    </div>

    <br>
    <div class="form-row row">
        <div class="form-group col">
            <!-- <label for="type_service">type</label> -->
            <select id="type_service" name="type_service" class="form-control">
                <option selected value="<?php echo $type?>"><?php echo $type ?></option>
                <option value="maison">Maison</option>
                <option value="appartement">Appartement</option>
                <option value="studio">Studio</option>
                <option value="terrain">Terrain</option>
            </select>
        </div>

        <div class="form-group col">
            <!-- <label for="status_service">status service</label> -->
            <select id="status_service" name="status_service" class="form-control">
                <option selected value="<?php echo $status?>"><?php echo $status?></option>
                <option value="A vendre">A vendre</option>
                <option value="A louer">A louer</option>
            </select>
        </div>

        <div class="form-group col">
            <!-- <label for="status_service">status service</label> -->
            <input type="number" class="form-control" name="nombre_lit_service" id="nombre_lit_service" placeholder="nombre lit " value="<?php echo $nombre_lit ?>">
        </div>
    </div>
    <br>
    <div class="form-row row">
        <div class="form-group col">
            <!-- <label for="surface_service">surface du bien</label> -->
            <input type="number" class="form-control" name="surface_service" id="surface_service" placeholder="la surface du bien (pas pour un terrain)" value="<?php echo $surface ?>">
        </div>

        <div class="form-group col">
            <!-- <label for="nombre_chambre_service">nombre chambre de service</label> -->
            <input type="number" class="form-control" name="nombre_chambre_service" id="nombre_chambre_service" placeholder="nombre de chambre (pas pour un terrain)" value="<?php echo $nombre_chambre ?>">
        </div>

        <div class="form-group col">
            <!-- <label for="nombre_garage_service">nombre de garage</label> -->
            <input type="number" class="form-control" name="nombre_garage_service" id="nombre_garage_service" placeholder="nombre de garage (pas pour un terrain)" value="<?php echo $nombre_garage ?>">
        </div>

        <div class="form-group col">
            <!-- <label for="image_service">Image</label> -->
            <input type="file" class="form-control" name="image_service" id="image_service" value="<?php echo $image ?>">
        </div>
    </div>
    <br>
    <br>
    <div class="col-md-12 text-center">
        <button type="submit" class="btn btn-a" name="edit_service">Edit Bien</button>
    </div>  
</form>
</body>
</html>