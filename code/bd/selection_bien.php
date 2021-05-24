<?php

//Debut Selection de tous les services de vente par unité de 5.
$selection_maison = $bdd->query("SELECT * FROM maison ORDER BY id_maison DESC LIMIT 5");
$selection_maison = $selection_maison->fetchAll();
// var_dump($selection_maison);

$selection_appartement = $bdd->query("SELECT * FROM appartement ORDER BY id_app DESC LIMIT 5");
$selection_appartement = $selection_appartement->fetchAll();

$selection_studio = $bdd->query("SELECT * FROM studio ORDER BY id_studio DESC LIMIT 5");
$selection_studio = $selection_studio->fetchAll();
// var_dump($selection_studio);

$selection_terrain = $bdd->query("SELECT * FROM terrain ORDER BY id_terrain DESC LIMIT 5");
$selection_terrain = $selection_terrain->fetchAll();

//Fin Selection de tous les services de vente par unité de 5.

//Debut Selection de tous les services de vente.

$selection_all_maison = $bdd->query("SELECT * FROM maison");
$selection_all_maison = $selection_all_maison->fetchAll();

$selection_all_appartement = $bdd->query("SELECT * FROM appartement");
$selection_all_appartement = $selection_all_appartement->fetchAll();

$selection_all_studio = $bdd->query("SELECT * FROM studio");
$selection_all_studio = $selection_all_studio->fetchAll();

$selection_all_terrain = $bdd->query("SELECT * FROM terrain");
$selection_all_terrain = $selection_all_terrain->fetchAll();


//Debut Selection de tous les services de vente.





switch(@$type_service)
{
    case 'maison' :
        $selection_all = $bdd->query("SELECT * FROM maison");
        $selection_all = $selection_all->fetchAll();
        // var_dump($selection_maison);
        break;
    case 'appartement' :
        $selection_all = $bdd->query("SELECT * FROM appartement");
        $selection_all = $selection_all->fetchAll();
        // var_dump($selection_appartement);
        break;
    case 'studio' :
        $selection_all = $bdd->query("SELECT * FROM studio");
        $selection_all = $selection_all->fetchAll();
        // var_dump($selection_studio);
        break;
    case 'terrain' : 
        $selection_all = $bdd->query("SELECT * FROM terrain");
        $selection_all = $selection_all->fetchAll();
        // var_dump($selection_terrain);
        break;
}


switch(@$extension_service)
{
    case 'maison' :
        $selection_service = $bdd->prepare("SELECT * FROM maison WHERE id_maison = ? ");
        $selection_service->execute(array($id_service));
        $selection_service = $selection_service->fetch(PDO::FETCH_ASSOC);
        // var_dump($selection_service);
        break;
    case 'app' :
        $selection_service = $bdd->prepare("SELECT * FROM appartement WHERE id_app = ? ");
        $selection_service->execute(array($id_service));
        $selection_service = $selection_service->fetch(PDO::FETCH_ASSOC);
        // var_dump($selection_service);
        break;
    case 'studio' :
        $selection_service = $bdd->prepare("SELECT * FROM studio WHERE id_studio = ? ");
        $selection_service->execute(array($id_service));
        $selection_service = $selection_service->fetch(PDO::FETCH_ASSOC);
        // var_dump($selection_service);
        break;
    case 'terrain' : 
        $selection_service = $bdd->prepare("SELECT * FROM terrain WHERE id_terrain = ? ");
        $selection_service->execute(array($id_service));
        $selection_service = $selection_service->fetch(PDO::FETCH_ASSOC);
        // var_dump($selection_service);
        break;
}

//Debut de selection des differents bien de chaque agent
if(@$selection_agent_unique)
{
    $selection_biens_maison_agent = $bdd->prepare("SELECT * FROM maison WHERE id_agent = ?");
    $selection_biens_maison_agent->execute(array($selection_agent_unique));
    $selection_biens_maison_agent = $selection_biens_maison_agent->fetchAll();

    $selection_biens_appartement_agent = $bdd->prepare("SELECT * FROM appartement WHERE id_agent = ?");
    $selection_biens_appartement_agent->execute(array($selection_agent_unique));
    $selection_biens_appartement_agent = $selection_biens_appartement_agent->fetchAll();

    $selection_biens_studio_agent = $bdd->prepare("SELECT * FROM studio WHERE id_agent = ?");
    $selection_biens_studio_agent->execute(array($selection_agent_unique));
    $selection_biens_studio_agent = $selection_biens_studio_agent->fetchAll();

    $selection_biens_terrain_agent = $bdd->prepare("SELECT * FROM terrain WHERE id_agent = ?");
    $selection_biens_terrain_agent->execute(array($selection_agent_unique));
    $selection_biens_terrain_agent = $selection_biens_terrain_agent->fetchAll();
}

//Fin de selection des differents bien de chaque agent
?>