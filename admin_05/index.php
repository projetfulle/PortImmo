<?php
require('Dbconfig.php');
    if (isset($_SESSION['id']) AND isset($_SESSION['pseudo']))
    {
    header('location:inserer.php');
    }
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
            echo '<div class="container">';
            echo '<div class="alert alert-warning">';
            echo '<strong>Desolé!</strong> Mauvais accès. Réessayez à nouveau!';
            echo '</div>';
            echo '</div>';
        }else
        {
        $_SESSION['id'] = $resultat['id'];
        $_SESSION['pseudo'] = $pseudo;
        echo "Vous êtes connecté".$_SESSION['pseudo']. "!";
        header('location:inserer.php');
        }
}
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/mdb.css">
    <link rel="stylesheet" href="../css/style.css">

    <title>Connexion - Port'Immo</title>
</head>
<body>

<div class="container">

    <div class="card">

        <!--Header-->
        <div class="header pt-3 peach-gradient">

            <div class="row d-flex justify-content-center">
                <h3 class="white-text mb-3 pt-3 font-weight-bold">Admin Portail Immo</h3>
            </div>

            <div class="row mt-2 mb-3 d-flex justify-content-center">
                <!--Facebook-->
                <a class="icons-sm fb-ic mx-2"><i class="fab fa-facebook-f white-text fa-lg"> </i></a>
                <!--Twitter-->
                <a class="icons-sm tw-ic mx-2"><i class="fab fa-twitter white-text fa-lg"> </i></a>
                <!--Google +-->
                <a class="icons-sm gplus-ic mx-2"><i class="fab fa-google-plus-g white-text fa-lg"> </i></a>
            </div>

        </div>
        <!--Header-->

        <div class="card-body mx-4 mt-4">

            <form method="post" action="">

                <!--Body-->
                <div class="md-form">
                    <input type="text" id="pseudo" name="pseudo" class="form-control">
                    <label for="pseudo">Votre Pseudo</label>
                </div>
            
                <div class="md-form">
                    <input type="password" id="pwd" name="pwd" class="form-control">
                    <label for="pwd">Votre Mot de Pass</label>
                </div>

                <!--Grid row-->
                <div class="row d-flex mb-4">

                    <!--Grid column-->
                    <div class="col-md-1 col-md-5 d-flex  ml-auto">
                        <div class="text-center">
                            <button type="submit" class="btn btn-grey btn-rounded z-depth-1a waves-effect waves-light" name="connexion">Se connecter</button>
                        </div>
                    </div>
                    <!--Grid column-->


                </div>
                <!--Grid row-->
            <form>
        </div>
        

    </div>

</div>


<script src="../js/jquery-3.3.1.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/mdb.js"></script>
<script src="../js/script.js"></script>
</body>
</html>