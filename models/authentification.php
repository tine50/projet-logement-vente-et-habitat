<?php
   if(isset($_POST["register-submit"]))
   {
      echo @$LastName=stripslashes(trim($_POST["LastName"]));
      echo @$FisrtName=stripslashes(trim($_POST["FisrtName"]));
      echo @$email=$_POST["email"];
      echo @$sexe = $_POST["sexe"];
      echo @$password=$_POST["password"];
      echo @$confirm_password=$_POST["confirm-password"];
      echo @$valider=$_POST["register-submit"];
      $erreur="";
         if(empty($LastName)) $erreur="Nom laissé vide!";
         elseif(empty($FisrtName)) $erreur="Prénom laissé vide!";
         elseif(empty($sexe)) $erreur="Sexe laissé vide!";
         elseif(empty($email)) $erreur="Login laissé vide!";
         elseif(empty($password)) $erreur="Mot de passe laissé vide!";
         elseif($password!=$confirm_password) $erreur="Mots de passe non identiques!";
         else{
            
               echo "bon";
               $verification_email=$bdd->prepare("SELECT id_client FROM client WHERE email_client =? limit 1");
               $verification_email->execute(array($email));
               $verification_email=$verification_email->fetchAll();
               if(count($verification_email)>0){
                  $erreur="Login existe déjà!";
               }
               else{
                  $insertion_de_la_donnee_dans_la_base_de_donne=$bdd->prepare("INSERT INTO client(nom_client, prenom_client, sexe, email_client, password_client) values(?,?,?,?,?)");
                  if($insertion_de_la_donnee_dans_la_base_de_donne->execute(array($LastName, $FisrtName, $sexe, $email, md5($password)))){
                     header("location:index.php");
                  }
               }
         }      
   }
