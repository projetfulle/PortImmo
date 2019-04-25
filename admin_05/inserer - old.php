<?php
session_start(); // On démarre la session AVANT toute chose
if (!isset($_SESSION['id']) AND !isset($_SESSION['pseudo']))
{
header('location:index.php');
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

    <title>Admin Port'Immo!</title>
</head>
<body>

<div class="container">

    <div class="card">

        <!--Header-->
        <div class="header pt-3 peach-gradient">

            <div class="row d-flex justify-content-center">
                <h3 class="white-text mb-3 pt-3 font-weight-bold">Admin Portail Immo</h3>
                <?php
                if (isset($_SESSION['id']) AND isset($_SESSION['pseudo']))
                    {
                        echo'<span class="ml-3">Vous êtes connecté en tant que: '.$_SESSION['pseudo'].'</span><a href="deconnexion.php" class="ml-3">Se déconnecter</a>';
                    }
                ?>
                
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

            <form method="post" action="insertion.php" enctype="multipart/form-data">

                <!--Body-->
                <div class="row">

                <div class="col-md-6">
                <label for="nom">Nom de l'entreprise</label>
                    <input type="text" id="nom" name="nom" class="form-control">
                </div>

                <div class="col-md-6 mt-2">
                    <label for="logo">Logo de l'entrprise</label><br>
                    <input type="file" id="logo" name="logo" class="">
                </div>

                <div class="col-md-6 mt-2">
                    <label for="specialite">Spécialité</label><br>
                    <select name="specialite" id="specialite" class="form-control" required>
                        <option value="">--- Choisir une option</option>
                       <option value="batiment">Bâtiment tout corps d’état</option>
                       <option value="genie_civil">Ouvrages  de génie civils</option>
                       <option value="VRD">VRD (Voiries et réseaux divers)</option>
                       <option value="deco">Art, decoration et architecture</option>
                       <option value="equipementier">equipementier</option>
                    </select>
                </div>
            
                <div class="col-md-6 mt-2">
                    <label for="emplacement">Emplacement</label><br>
                    
                    <select class="form-control" id="emplacement" name="emplacement" required="">
                        <option value="">--- Choisir une option</option>
                        <option value="abidjan" selected=""> ------ Abidjan</option>
                        <option value="cocody"> --------- Cocody</option>
                        <option value="2-plateaux"> ------------ 2 Plateaux</option>
                        <option value="agban"> ------------ Agban</option>
                        <option value="aghien"> ------------ Aghien</option>
                        <option value="akouedo"> ------------ Akouédo</option>
                        <option value="angre"> ------------ Angré</option>
                        <option value="anono"> ------------ Anono</option>
                        <option value="ambassade"> ------------ Ambassade</option>
                        <option value="attogban"> ------------ Attogban</option>
                        <option value="blockauss"> ------------ Blockauss</option>
                        <option value="cite-des-arts"> ------------ Cité des arts</option>
                        <option value="lycee-technique"> ------------ Lycée Technique</option>
                        <option value="dokui"> ------------ Dokui</option>
                        <option value="riviera"> ------------ Riviera</option>
                        <option value="valon"> ------------ Valon</option>
                        <option value="abobo"> --------- Abobo</option>
                        <option value="adjame"> --------- Adjamé</option>
                        <option value="yopougon"> --------- Yopougon</option>
                        <option value="sicogi"> ------------ Sicogi</option>
                        <option value="andokoi"> ------------ Andokoi</option>
                        <option value="selmer"> ------------ Selmer</option>
                        <option value="sogefiha"> ------------ Sogefiha</option>
                        <option value="wassakara"> ------------ Wassakara</option>
                        <option value="sopim"> ------------ Sopim</option>
                        <option value="nouveau-quartier"> ------------ Nouveau quartier</option>
                        <option value="toit-rouge"> ------------ Toit rouge</option>
                        <option value="camp-militaire"> ------------ Camp militaire</option>
                        <option value="sideci"> ------------ Sideci</option>
                        <option value="zone-industrielle"> ------------ Zone industrielle</option>
                        <option value="gesco"> ------------ Gesco</option>
                        <option value="quartier-maroc"> ------------ Quartier Maroc</option>
                        <option value="ananeraie"> ------------ Ananeraie</option>
                        <option value="niangon-sud"> ------------ Niangon Sud</option>
                        <option value="plateau"> --------- Plateau</option>
                        <option value="attecoube"> --------- Attécoubé</option>
                        <option value="koumassi"> --------- Koumassi</option>
                        <option value="marcory"> --------- Marcory</option>
                        <option value="port-bouet"> --------- Port-Bouët</option>
                        <option value="treichville"> --------- Treichville</option>
                        <option value="bingerville"> --------- Bingerville</option>
                        <option value="anyama"> --------- Anyama</option>
                        <option value="grand-bassam"> --------- Grand-Bassam</option>
                    </select>
                </div>

                <div class="col-md-6 mt-2">
                    <label for="telephone">Contact téléphonique</label><br>
                    <input type="tel" id="telephone" name="telephone"  class="form-control">
                </div>

                <div class="col-md-6 mt-2">
                    <label for="email">Adresse Email</label><br>
                    <input type="email" id="email" name="email"  class="form-control">
                </div>

                <div class="col-md-6 mt-2">
                    <label for="image1">Portfolio</label><br>
                    <input type="file" id="image1" name="image1" class="">
                    <input type="file" id="image2" name="image2" class="">
                    <input type="file" id="image3" name="image3" class="">
                    <input type="file" id="image4" name="image4" class="">
                    <input type="file" id="image5" name="image5" class="">
                    <input type="file" id="image6" name="image6" class="">
                </div>

                <div class="col-md-6 mt-2">
                    <label for="presentation">Presentation</label><br>
                    <textarea class="form-control" id="presentation" rows="6" cols="50" name="presentation" required=""></textarea>
                </div>

                </div>

                <!--Grid row-->
                <div class="row d-flex mb-4">

                    <!--Grid column-->
                    <div class="col-md-1 col-md-5 d-flex mt-5 ml-auto">
                        <div class="text-center">
                            <button type="submit" class="btn btn-grey btn-rounded z-depth-1a waves-effect waves-light" name="connexion">Soumettre</button>
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