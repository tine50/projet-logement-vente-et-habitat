<?php

    include "../code/connexion_base_donnee/connexion_db.php";
    
    $id_agent = $_GET["id_agent"];
    $delete_agent = $bdd->prepare("DELETE FROM agent WHERE id_agent = ?");
    $delete_agent->execute(array($id_agent));

    ?>