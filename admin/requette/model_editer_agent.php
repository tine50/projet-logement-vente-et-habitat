<?php
    include "../code/connexion_base_donnee/connexion_db.php";
    if(isset($_POST['editer_agent']))
    {
        $id_agent = (int)$_GET['id_agent'];
        $nom_agent = htmlspecialchars($_POST['nom_agent']);
        $prenom_agent = htmlspecialchars($_POST['prenom_agent']);
        $telephone_agent = htmlspecialchars($_POST['telephone_agent']);
        $email_agent = htmlspecialchars($_POST['email_agent']);

		if (isset($_FILES['image_agent']) AND $_FILES['image_agent']['error'] == 0)
		{
            
			// Testons si le fichier n'est pas trop gros
			if ($_FILES['image_agent']['size'] <= 7000000)
			{

				// Testons si l'extension est autorisée
				$infosfichier = pathinfo($_FILES['image_agent']['name']);
				$extension_upload = $infosfichier['extension'];
				$extensions_autorisees = array('jpg', 'jpeg', 'gif','png');
				if (in_array($extension_upload,$extensions_autorisees))
				{
					$answers = "image ajout avec succes";
					// On peut valider le fichier et le stocker

                        $image_agent = $_FILES['image_agent']['name'];
                        $moveFile = move_uploaded_file($_FILES['image_agent']['tmp_name'], '../code/image_agents/' . basename($_FILES['image_agent']['name']));
                            //c'est ici qu'on insert les données
                        $insertion_service_dans_la_base_de_donnee = $bdd->prepare(" UPDATE agent SET    nom_agent=?,
                                                                                                        prenom_agent=?,
                                                                                                        telephone_agent=?,
                                                                                                        email_agent=?,
                                                                                                        image_agent=? 
                                                                                                        WHERE id_agent = ? ");
                        $insertion_service_dans_la_base_de_donnee->execute(array(   $nom_agent,
                                                                                    $prenom_agent,
                                                                                    $telephone_agent,
                                                                                    $email_agent,
                                                                                    $image_agent,
                                                                                    $id_agent
                                                                                    ));                  

                    


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
            $insertion_service_dans_la_base_de_donnee = $bdd->prepare(" UPDATE agent SET    nom_agent=?,
                                                                                            prenom_agent=?,
                                                                                            telephone_agent=?,
                                                                                            email_agent=?
                                                                                            WHERE id_agent = ? ");
            $insertion_service_dans_la_base_de_donnee->execute(array(   $nom_agent,
                                                                        $prenom_agent,
                                                                        $telephone_agent,
                                                                        $email_agent,
                                                                        $id_agent
            ));    
		}        
    }
    //il faut au préable envoyer l'id de l'agent
    $id_agent = $_GET['id_agent'];
    if (isset($id_agent))
    {
        $selection_agent_with_id = $bdd->query("SELECT *  FROM  agent WHERE id_agent = $id_agent");
        $selection_agent_with_id = $selection_agent_with_id->fetch(PDO::FETCH_ASSOC);
    }

?>

