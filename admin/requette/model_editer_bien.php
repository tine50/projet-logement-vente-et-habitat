<?php
    include "../code/connexion_base_donnee/connexion_db.php";
	if(isset($_POST["edit_service"]))
	{
		$nom_service = htmlspecialchars($_POST['nom_service']);
		$localisation_service = htmlspecialchars($_POST['localisation_service']);
		$description_service = htmlspecialchars($_POST['description_service']);
		$prix_service =$_POST['prix_service'];
        $type_service =$_POST['type_service'];
        $status_service =$_POST['status_service'];
        $surface_service =$_POST['surface_service'];
        $nombre_chambre_service =$_POST['nombre_chambre_service'];
        $nombre_garage_service =$_POST['nombre_garage_service'];
        $nombre_lit_service = $_POST['nombre_lit_service'];
        $id_agent_service = $_GET['id_agent_service'];
        $id_service = $_GET["id_service"];

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
                        $insertion_service_dans_la_base_de_donnee = $bdd->prepare(" UPDATE `maison` SET 
                                                                                        `nom_maison`=?,
                                                                                        `localisation_maison`=?,
                                                                                        `image_maison`=?,
                                                                                        `description_maison`=?,
                                                                                        `prix_maison`=?,
                                                                                        `type_maison`=?,
                                                                                        `status_maison`=?,
                                                                                        `surface_maison`=?,
                                                                                        `nombre_chambre_maison`=?,
                                                                                        `nombre_de_garage_maison`=?,
                                                                                        `id_agent`=? WHERE 
                                                                                        id_maison = ?");
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
                                                                                    $id_agent_service,
                                                                                    $id_service
                                                                                    ));                  
                    }
                    
                    else if($type_service === "appartement")
                    {
                        $photo = $_FILES['image_service']['name'];
                        $moveFile = move_uploaded_file($_FILES['image_service']['tmp_name'], '../code/images_services/app/' . basename($_FILES['image_service']['name']));
                            //c'est ici qu'on insert les données
                            $insertion_service_dans_la_base_de_donnee = $bdd->prepare(" UPDATE `appartement` SET 
                                                                                    `nom_app`=?,
                                                                                    `localisation_app`=?,
                                                                                    `image_app`=?,
                                                                                    `description_app`=?,
                                                                                    `prix_app`=?,
                                                                                    `type_app`=?,
                                                                                    `status_app`=?,
                                                                                    `surface_app`=?,
                                                                                    `nombre_chambre_app`=?,
                                                                                    `nombre_de_garage_app`=?,
                                                                                    `id_agent`=? WHERE 
                                                                                    id_app = ?");
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
                                                                                    $id_agent_service,
                                                                                    $id_service
                                                                                    ));                     
                    }
                    
                    else if($type_service === "studio")
                    {
                        $photo = $_FILES['image_service']['name'];
                        $moveFile = move_uploaded_file($_FILES['image_service']['tmp_name'], '../code/images_services/studio/' . basename($_FILES['image_service']['name']));
                            //c'est ici qu'on insert les données
                            $insertion_service_dans_la_base_de_donnee = $bdd->prepare(" UPDATE `studio` SET 
                                                                                    `nom_studio`=?,
                                                                                    `localisation_studio`=?,
                                                                                    `image_studio`=?,
                                                                                    `description_studio`=?,
                                                                                    `prix_studio`=?,
                                                                                    `type_studio`=?,
                                                                                    `status_studio`=?,
                                                                                    `surface_studio`=?,
                                                                                    `nombre_chambre_studio`=?,
                                                                                    `nombre_de_garage_studio`=?,
                                                                                    `id_agent`=? WHERE 
                                                                                    id_studio = ?");
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
                                                                                    $id_agent_service,
                                                                                    $id_service
                                                                                    ));                            
                    }
                    
                    else
                    {
                        $photo = $_FILES['image_service']['name'];
                        $moveFile = move_uploaded_file($_FILES['image_service']['tmp_name'], '../code/images_services/terrain' . basename($_FILES['image_service']['name']));
                            //c'est ici qu'on insert les données
                            $insertion_service_dans_la_base_de_donnee = $bdd->prepare(" UPDATE `terrain` SET 
                                                                                    `nom_terrain`=?,
                                                                                    `localisation_terrain`=?,
                                                                                    `image_terrain`=?,
                                                                                    `description_terrain`=?,
                                                                                    `prix_terrain`=?,
                                                                                    `type_terrain`=?,
                                                                                    `status_terrain`=?,
                                                                                    `surface_terrain`=?
                                                                                    `id_agent`=? WHERE 
                                                                                    id_terrain = ?");
                            $insertion_service_dans_la_base_de_donnee->execute(array(   $nom_service,
                                                                                    $localisation_service,
                                                                                    $photo,
                                                                                    $description_service,
                                                                                    $prix_service,
                                                                                    $type_service,
                                                                                    $status_service,
                                                                                    $surface_service,
                                                                                    $id_agent_service,
                                                                                    $id_service
                                                                                    ));                      
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
		}
        else{
            if($type_service == "maison")
            {
               $insertion_service_dans_la_base_de_donnee = $bdd->prepare(" UPDATE `maison` SET 
                                                                                `nom_maison`=?,
                                                                                `localisation_maison`=?,
                                                                                `description_maison`=?,
                                                                                `prix_maison`=?,
                                                                                `type_maison`=?,
                                                                                `status_maison`=?,
                                                                                `surface_maison`=?,
                                                                                `nombre_chambre_maison`=?,
                                                                                `nombre_de_garage_maison`=?,
                                                                                `id_agent`=? WHERE 
                                                                                id_maison = ?");
                $insertion_service_dans_la_base_de_donnee->execute(array(   $nom_service,
                                                                            $localisation_service,
                                                                            $description_service,
                                                                            $prix_service,
                                                                            $type_service,
                                                                            $status_service,
                                                                            $surface_service,
                                                                            $nombre_chambre_service,
                                                                            $nombre_garage_service,
                                                                            $id_agent_service,
                                                                            $id_service
                                                                            ));                 
            }else if($type_service === "appartement")
            {
                $insertion_service_dans_la_base_de_donnee = $bdd->prepare(" UPDATE `appartement` SET 
                                                                        `nom_app`=?,
                                                                        `localisation_app`=?,
                                                                        `description_app`=?,
                                                                        `prix_app`=?,
                                                                        `type_app`=?,
                                                                        `status_app`=?,
                                                                        `surface_app`=?,
                                                                        `nombre_chambre_app`=?,
                                                                        `nombre_de_garage_app`=?,
                                                                        `id_agent`=? WHERE 
                                                                        id_app = ?");
                $insertion_service_dans_la_base_de_donnee->execute(array(   $nom_service,
                                                                        $localisation_service,
                                                                        $description_service,
                                                                        $prix_service,
                                                                        $type_service,
                                                                        $status_service,
                                                                        $surface_service,
                                                                        $nombre_chambre_service,
                                                                        $nombre_garage_service,
                                                                        $id_agent_service,
                                                                        $id_service
                                                                        ));                 
            }else if($type_service === "studio")
            {
                $insertion_service_dans_la_base_de_donnee = $bdd->prepare(" UPDATE `studio` SET 
                                                                        `nom_studio`=?,
                                                                        `localisation_studio`=?,
                                                                        `description_studio`=?,
                                                                        `prix_studio`=?,
                                                                        `type_studio`=?,
                                                                        `status_studio`=?,
                                                                        `surface_studio`=?,
                                                                        `nombre_chambre_studio`=?,
                                                                        `nombre_de_garage_studio`=?,
                                                                        `id_agent`=? WHERE 
                                                                        id_studio = ?");
                    $insertion_service_dans_la_base_de_donnee->execute(array(               $nom_service,
                                                                        $localisation_service,
                                                                        $description_service,
                                                                        $prix_service,
                                                                        $type_service,
                                                                        $status_service,
                                                                        $surface_service,
                                                                        $nombre_chambre_service,
                                                                        $nombre_garage_service,
                                                                        $id_agent_service,
                                                                        $id_service
                                                                        )); 
            }else
            {
                $insertion_service_dans_la_base_de_donnee = $bdd->prepare(" UPDATE `terrain` SET 
                                                                        `nom_terrain`=?,
                                                                        `localisation_terrain`=?,
                                                                        `description_terrain`=?,
                                                                        `prix_terrain`=?,
                                                                        `type_terrain`=?,
                                                                        `status_terrain`=?,
                                                                        `surface_terrain`=?
                                                                        `id_agent`=? WHERE 
                                                                        id_terrain = ?");
                $insertion_service_dans_la_base_de_donnee->execute(array(   $nom_service,
                                                                        $localisation_service,
                                                                        $description_service,
                                                                        $prix_service,
                                                                        $type_service,
                                                                        $status_service,
                                                                        $surface_service,
                                                                        $id_agent_service,
                                                                        $id_service
                                                                        ));  
            }
   
		}
	}

    $id_agent_service = $_GET["id_agent_service"];
    if(isset($id_agent_service))
    {
        $selection_agent_service = $bdd->query("SELECT *  FROM  agent WHERE id_agent = $id_agent_service");
        $selection_agent_service = $selection_agent_service->fetch(PDO::FETCH_ASSOC); 
        $agent   = $selection_agent_service["prenom_agent"]." ".$selection_agent_service["nom_agent"];
    }
    $id_service = $_GET["id_service"];
    $type_service = $_GET["type_service"];

    if($type_service === "maison")
    {
        $selection_dans_la_base_de_donnee = $bdd->query("SELECT * FROM maison WHERE id_maison = $id_service");
        $selection_dans_la_base_de_donnee = $selection_dans_la_base_de_donnee->fetch(PDO::FETCH_ASSOC);

        $nom = $selection_dans_la_base_de_donnee['nom_maison'];
        $localisation = $selection_dans_la_base_de_donnee['localisation_maison'];
        $image = $selection_dans_la_base_de_donnee['image_maison'];
        $description = $selection_dans_la_base_de_donnee['description_maison'];
        $prix = $selection_dans_la_base_de_donnee['prix_maison'];
        $type = $selection_dans_la_base_de_donnee['type_maison'];
        $status = $selection_dans_la_base_de_donnee['status_maison'];
        $surface = $selection_dans_la_base_de_donnee['surface_maison'];
        $nombre_chambre = $selection_dans_la_base_de_donnee['nombre_chambre_maison'];
        $nombre_garage = $selection_dans_la_base_de_donnee['nombre_de_garage_maison'];
        $nombre_lit = $selection_dans_la_base_de_donnee['nombre_lit_maison'];
    }
    else if($type_service === "appartement")
    {
        $selection_dans_la_base_de_donnee = $bdd->query("SELECT * FROM appartement WHERE id_app = $id_service");
        $selection_dans_la_base_de_donnee = $selection_dans_la_base_de_donnee->fetch(PDO::FETCH_ASSOC);

        $nom = $selection_dans_la_base_de_donnee['nom_app'];
        $localisation = $selection_dans_la_base_de_donnee['localisation_app'];
        $image = $selection_dans_la_base_de_donnee['image_app'];
        $description = $selection_dans_la_base_de_donnee['description_app'];
        $prix = $selection_dans_la_base_de_donnee['prix_app'];
        $type = $selection_dans_la_base_de_donnee['type_app'];
        $status = $selection_dans_la_base_de_donnee['status_app'];
        $surface = $selection_dans_la_base_de_donnee['surface_app'];
        $nombre_chambre = $selection_dans_la_base_de_donnee['nombre_chambre_app'];
        $nombre_garage = $selection_dans_la_base_de_donnee['nombre_de_garage_app'];
        $nombre_lit = $selection_dans_la_base_de_donnee['nombre_lit_app'];

    }
    else if($type_service === "studio")
    {
        $selection_dans_la_base_de_donnee = $bdd->query("SELECT * FROM studio WHERE id_studio = $id_service");
        $selection_dans_la_base_de_donnee = $selection_dans_la_base_de_donnee->fetch(PDO::FETCH_ASSOC);

        $nom = $selection_dans_la_base_de_donnee['nom_studio'];
        $localisation = $selection_dans_la_base_de_donnee['localisation_studio'];
        $image = $selection_dans_la_base_de_donnee['image_studio'];
        $description = $selection_dans_la_base_de_donnee['description_studio'];
        $prix = $selection_dans_la_base_de_donnee['prix_studio'];
        $type = $selection_dans_la_base_de_donnee['type_studio'];
        $status = $selection_dans_la_base_de_donnee['status_studio'];
        $surface = $selection_dans_la_base_de_donnee['surface_studio'];
        $nombre_chambre = $selection_dans_la_base_de_donnee['nombre_chambre_studio'];
        $nombre_garage = $selection_dans_la_base_de_donnee['nombre_de_garage_tudio'];
    }
    else
    {
        $selection_dans_la_base_de_donnee = $bdd->query("SELECT * FROM terrain WHERE id_terrain = $id_service");
        $selection_dans_la_base_de_donnee = $selection_dans_la_base_de_donnee->fetch(PDO::FETCH_ASSOC);

        $nom = $selection_dans_la_base_de_donnee['nom_terrain'];
        $localisation = $selection_dans_la_base_de_donnee['localisation_terrain'];
        $image = $selection_dans_la_base_de_donnee['image_terrain'];
        $description = $selection_dans_la_base_de_donnee['description_terrain'];
        $prix = $selection_dans_la_base_de_donnee['prix_terrain'];
        $type = $selection_dans_la_base_de_donnee['type_terrain'];
        $status = $selection_dans_la_base_de_donnee['status_terrain'];
        $surface = $selection_dans_la_base_de_donnee['surface_terrain'];
    }
    $selection_agent = $bdd->query("SELECT *  FROM  agent");
    $selection_agent = $selection_agent->fetchAll();
    
?>