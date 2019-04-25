<?php
require('Dbconfig.php');
if(isset($_POST['connexion'])){
    $pseudo = htmlspecialchars(trim($_POST['pseudo']));
    $pwd = htmlspecialchars(trim($_POST['pwd']));
    // Vérification des identifiants
        $req = $DB_con->prepare('SELECT id FROM users WHERE pseudo = :pseudo
        AND Pwd = :pwd');
        $req->execute(array(
        'pseudo' => $pseudo,
        'pwd' => $pwd));
        $resultat = $req->fetch();
        if (!$resultat)
        {
        echo 'Mauvais identifiant ou mot de passe !';
        }else
        {
        session_start();
        $_SESSION['id'] = $resultat['id'];
        $_SESSION['pseudo'] = $pseudo;
        echo "Vous êtes connecté".$_SESSION['pseudo']. "!";
        header('location:inserer.php');
        }
}

?>