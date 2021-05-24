<?php
    include "../code/connexion_base_donnee/connexion_db.php";
	if(isset($_POST["envoyer_service"]))
	{
		@$nom_service = htmlspecialchars($_POST['nom_service']);
		@$localisation_service = htmlspecialchars($_POST['localisation_service']);
		@$description_service = htmlspecialchars($_POST['description_service']);
		@$prix_service =$_POST['prix_service'];
        @$type_service =$_POST['type_service'];
        @$status_service =$_POST['status_service'];
        @$surface_service =$_POST['surface_service'];
        @$nombre_chambre_service =$_POST['nombre_chambre_service'];
        @$nombre_garage_service =$_POST['nombre_garage_service'];
        @$nombre_lit = $_POST['nombre_lit'];
        @$id_agent_service = $_POST['id_agent_service'];

		if (isset($_FILES['image_service']) AND $_FILES['image_service']['error'] == 0)
		{
            
			// Testons si le fichier n'est pas trop gros
			if ($_FILES['image_service']['size'] <= 7000000)
			{

				// Testons si l'extension est autorisée
				$infosfichier = pathinfo($_FILES['image_service']['name']);
				$extension_upload = $infosfichier['extension'];
				$extensions_autorisees = array('jpg', 'jpeg', 'gif','png');
				if (in_array($extension_upload,$extensions_autorisees))
				{
					$answers = "image ajout avec succes";
					// On peut valider le fichier et le stocker
                    if($type_service == "maison")
                    {
                        $photo = $_FILES['image_service']['name'];
                        $moveFile = move_uploaded_file($_FILES['image_service']['tmp_name'], '../code/images_services/maison/' . basename($_FILES['image_service']['name']));
                            //c'est ici qu'on insert les données
                        $insertion_service_dans_la_base_de_donnee = $bdd->prepare(" INSERT INTO maison( nom_maison, 
                                                                                                        localisation_maison, 
                                                                                                        image_maison, 
                                                                                                        description_maison, 
                                                                                                        prix_maison, 
                                                                                                        type_maison, 
                                                                                                        status_maison, 
                                                                                                        surface_maison, 
                                                                                                        nombre_chambre_maison, 
                                                                                                        nombre_de_garage_maison,
                                                                                                        nombre_lit_maison,
                                                                                                        id_agent) 
                                                                                    VALUES (?,?,?,?,?,?,?,?,?,?,?,?)");
                        $insertion_service_dans_la_base_de_donnee->execute(array(   $nom_service,
                                                                                    $localisation_service,
                                                                                    $photo,
                                                                                    $description_service,
                                                                                    $prix_service,
                                                                                    $type_service,
                                                                                    $status_service,
                                                                                    $surface_service,
                                                                                    $nombre_chambre_service,
                                                                                    $nombre_garage_service,
                                                                                    $nombre_lit,
                                                                                    $id_agent_service
                                                                                    ));                  
                    }
                    
                    else if($type_service === "appartement")
                    {
                        $photo = $_FILES['image_service']['name'];
                        $moveFile = move_uploaded_file($_FILES['image_service']['tmp_name'], '../code/images_services/app/' . basename($_FILES['image_service']['name']));
                            //c'est ici qu'on insert les données
                        $insertion_service_dans_la_base_de_donnee = $bdd->prepare(" INSERT INTO appartement( nom_app, 
                                                                                                        localisation_app, 
                                                                                                        image_app, 
                                                                                                        description_app, 
                                                                                                        prix_app, 
                                                                                                        type_app, 
                                                                                                        status_app, 
                                                                                                        surface_app, 
                                                                                                        nombre_chambre_app, 
                                                                                                        nombre_de_garage_app,
                                                                                                        nombre_lit_app,
                                                                                                        id_agent) 
                                                                                    VALUES (?,?,?,?,?,?,?,?,?,?,?,?)");
                        $insertion_service_dans_la_base_de_donnee->execute(array(   $nom_service,
                                                                                    $localisation_service,
                                                                                    $photo,
                                                                                    $description_service,
                                                                                    $prix_service,
                                                                                    $type_service,
                                                                                    $status_service,
                                                                                    $surface_service,
                                                                                    $nombre_chambre_service,
                                                                                    $nombre_garage_service,
                                                                                    $nombre_lit,
                                                                                    $id_agent_service
                                                                                    ));                    
                    }
                    
                    else if($type_service === "studio")
                    {
                        $photo = $_FILES['image_service']['name'];
                        $moveFile = move_uploaded_file($_FILES['image_service']['tmp_name'], '../code/images_services/studio/' . basename($_FILES['image_service']['name']));
                            //c'est ici qu'on insert les données
                        $insertion_service_dans_la_base_de_donnee = $bdd->prepare(" INSERT INTO studio( nom_studio, 
                                                                                                        localisation_studio, 
                                                                                                        image_studio, 
                                                                                                        description_studio, 
                                                                                                        prix_studio, 
                                                                                                        type_studio, 
                                                                                                        status_studio, 
                                                                                                        surface_studio, 
                                                                                                        nombre_chambre_studio, 
                                                                                                        nombre_de_garage_studio,
                                                                                                        id_agent) 
                                                                                    VALUES (?,?,?,?,?,?,?,?,?,?,?)");
                        $insertion_service_dans_la_base_de_donnee->execute(array(   $nom_service,
                                                                                    $localisation_service,
                                                                                    $photo,
                                                                                    $description_service,
                                                                                    $prix_service,
                                                                                    $type_service,
                                                                                    $status_service,
                                                                                    $surface_service,
                                                                                    $nombre_chambre_service,
                                                                                    $nombre_garage_service,
                                                                                    $id_agent_service
                                                                                    ));                            
                    }
                    
                    else
                    {
                        $photo = $_FILES['image_service']['name'];
                        $moveFile = move_uploaded_file($_FILES['image_service']['tmp_name'], '../code/images_services/terrain/' . basename($_FILES['image_service']['name']));
                            //c'est ici qu'on insert les données
                        $insertion_service_dans_la_base_de_donnee = $bdd->prepare(" INSERT INTO terrain( nom_terrain,
                                                                                                        localisation_terrain, 
                                                                                                        image_terrain, 
                                                                                                        description_terrain, 
                                                                                                        prix_terrain, 
                                                                                                        type_terrain, 
                                                                                                        status_terrain, 
                                                                                                        surface_terrain, 
                                                                                                        id_agent) 
                                                                                    VALUES (?,?,?,?,?,?,?,?,?)");
                        $insertion_service_dans_la_base_de_donnee->execute(array(   $nom_service,
                                                                                    $localisation_service,
                                                                                    $photo,
                                                                                    $description_service,
                                                                                    $prix_service,
                                                                                    $type_service,
                                                                                    $status_service,
                                                                                    $surface_service,
                                                                                    $id_agent_service));                       
                    }

				}
				else
				{
					$answers  = "Entrer une bonne extension de l'image ou image trop lourd (max 7MO)";
				}
			}else
			{
				$answers= "(max 7MO)";		
			}
		}else{
			echo $answers = "error image";
		}
	}

    $selection_agent = $bdd->query("SELECT *  FROM  agent");
    $selection_agent = $selection_agent->fetchAll();
?>