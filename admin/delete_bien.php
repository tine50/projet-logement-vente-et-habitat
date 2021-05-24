<?php

    include "../code/connexion_base_donnee/connexion_db.php";

    $type_service = $_GET["type_service"];
    $id_service = $_GET["id_service"];

    if($type_service === "maison")
    {
        $delete_service = $bdd->prepare("DELETE FROM maison WHERE id_maison = ? "); 
        $delete_service->execute(array($id_service));
    }else if($type_service === "appartement")
    {
        $delete_service = $bdd->prepare("DELETE FROM appartement WHERE id_app = ? "); 
        $delete_service->execute(array($id_service));        
    }else if($type_service === "studio")
    {
        $delete_service = $bdd->prepare("DELETE FROM studio WHERE id_studio = ? "); 
        $delete_service->execute(array($id_service));        
    }else
    {
        $delete_service = $bdd->prepare("DELETE FROM terrain WHERE id_terrain = ? "); 
        $delete_service->execute(array($id_service));          
    }




?>