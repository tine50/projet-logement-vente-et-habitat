<?php
    if(isset($_POST["login-submit"]))
    {
        @$email=$_POST["email_connexion"];
        @$password=md5($_POST["password_connexion"]);
        @$login_submit=$_POST["login-submit"];
        $erreur="";
        if(isset($login_submit)){;

            $selection_client=$bdd->prepare("SELECT * FROM client WHERE email_client=? and password_client=? limit 1");
            $selection_client->execute(array($email,$password));
            $selection_client=$selection_client->fetchAll();
            if(count($selection_client)>0){
                $_SESSION["prenomNom"]=ucfirst(strtolower($selection_client[2]["nom_client"])).
                " ".strtoupper($tab[1]["nom_client"]);
                $_SESSION["autoriser"]="oui";
                header("location:code/index.php");
            }
            else
                $erreur="Mauvais login ou mot de passe!";
        }        
    }

?>