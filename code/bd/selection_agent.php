<?php
    @$id_agent = $selection_service["id_agent"];

    if(@$extension_service)
    {
        $selection_agent = $bdd->prepare("SELECT * FROM agent WHERE id_agent = ?");
        $selection_agent->execute(array($id_agent));
        $selection_agent = $selection_agent->fetch(PDO::FETCH_ASSOC);

    }
    
    //Debut sélection de l'agent pour l'afficher dans la page index
    @$selection_agent_index = $bdd->query("SELECT * FROM agent ORDER BY id_agent DESC LIMIT 3");
    @$selection_agent_index = $selection_agent_index->fetchAll();

    // var_dump($selection_agent_index);
    //Fin sélection de l'agent pour l'afficher dans la page index

    // debut selection de l'agent pour l'afficher uniquement dans agentsingle
    @$selection_agent_unique = $_GET['id'];

        @$selection_unique_agent = $bdd->prepare("SELECT * FROM agent WHERE id_agent = ?");
        @$selection_unique_agent->execute(array($selection_agent_unique));
        @$selection_unique_agent = $selection_unique_agent->fetch(PDO::FETCH_ASSOC);
    //Fin selection de l'agent pour l'afficher uniquement dans agentsingle


    //Debut selection agent pour l'afficher dans la page agents-grid.php

    @$selection_agent_by_grid = $bdd->query("SELECT * FROM agent");
    @$selection_agent_by_grid = $selection_agent_by_grid->fetchAll();

    // var_dump($selection_agent_by_grid);
    //Debut selection agent pour l'afficher dans la page agents-grid.php
?>