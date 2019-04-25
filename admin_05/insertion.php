<?php
require('Dbconfig.php');
if(isset($_POST['connexion'])){
    $nom = htmlspecialchars(trim($_POST['nom']));
    /*$target = "uploads/";
    $cible= $cible.basename($_FILES['logo']['name']);*/
    $logo = ($_FILES['logo']['name']);
    $specialite = htmlspecialchars(trim($_POST['specialite']));
    $emplacement = htmlspecialchars(trim($_POST['emplacement']));
    $telephone = htmlspecialchars(trim($_POST['telephone']));
    $email = htmlspecialchars(trim($_POST['email']));
    $image1 = $_FILES['image1']['name'];
    $image2 = $_FILES['image2']['name'];
    $image3 = $_FILES['image3']['name'];
    $image4 = $_FILES['image4']['name'];
    $image5 = $_FILES['image5']['name'];
    $image6 = $_FILES['image6']['name'];
    $presentation = htmlspecialchars(trim($_POST['presentation']));
    // Vérification des identifiants
       if(!empty($nom)){
           $erreurs[]="Entrez le nom de l'entreprise svp";
       }
       // Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur

        if (isset($_FILES['logo']) AND $_FILES['logo']['error'] == 0)

        {
            
            // Testons si le fichier n'est pas trop gros

            if ($_FILES['logo']['size'] <= 6000000)

            {
                    global $errors,$succes;
                    // Testons si l'extension est autorisée

                    $infosfichier = pathinfo($_FILES['logo']['name']);
                    $result = explode('.',$_FILES['logo']['name']);
                    $extension_upload =strtolower(end($result));
                    //$extension_upload = $infosfichier['extension'];
                    //  echo $extension_upload;
                    $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
                    

                    if (in_array($extension_upload, $extensions_autorisees)==true)
                
                    {    
                            // On peut valider le fichier et le stocker définitivement
                            $stmt = $DB_con->prepare("INSERT INTO entreprises(nom, logo, specialite, emplacement, telephone, email, image1, image2, image3, image4, image5, image6, presentation) VALUES(:nom, :logo, :specialite, :emplacement, :telephone, :email, :image1, :image2, :image3, :image4, :image5, :image6, :presentation)");
                            $stmt->bindparam(":nom",$nom);
                            $stmt->bindparam(":logo",$logo);
                            $stmt->bindparam(":specialite",$specialite);
                            $stmt->bindparam(":emplacement",$emplacement);

                            $stmt->bindparam(":telephone",$telephone);
                            $stmt->bindparam(":email",$email);
                            $stmt->bindparam(":image1",$image1);
                            $stmt->bindparam(":image2",$image2);

                            $stmt->bindparam(":image3",$image3);
                            $stmt->bindparam(":image4",$image4);
                            $stmt->bindparam(":image5",$image5);
                            $stmt->bindparam(":image6",$image6);

                            $stmt->bindparam(":presentation",$presentation);
                            $stmt->execute();
                            move_uploaded_file($_FILES['logo']['tmp_name'], '../uploads/' . basename($_FILES['logo']['name']));
                            move_uploaded_file($_FILES['image1']['tmp_name'], '../uploads/' . basename($_FILES['image1']['name']));
                            move_uploaded_file($_FILES['image2']['tmp_name'], '../uploads/' . basename($_FILES['image2']['name']));
                            move_uploaded_file($_FILES['image3']['tmp_name'], '../uploads/' . basename($_FILES['image3']['name']));
                            move_uploaded_file($_FILES['image4']['tmp_name'], '../uploads/' . basename($_FILES['image4']['name']));
                            move_uploaded_file($_FILES['image5']['tmp_name'], '../uploads/' . basename($_FILES['image5']['name']));
                            move_uploaded_file($_FILES['image6']['tmp_name'], '../uploads/' . basename($_FILES['image6']['name']));
                            return true;
                
                            $succes='L\'envoi a bien été effectué !';

                    }
                    else
                    {
                        $errors='extension non valide vous devez uploader un fichier jpg,jpeg, gif,png';
                    }

            }
            else
            {
                $errors='la taille du fichier ne doit pas depasser 6Mo';
            }

        }
        
}

?>