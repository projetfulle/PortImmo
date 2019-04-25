<?php
require('Dbconfig.php');
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

    <title>Port'Immo</title>
</head>
<body>

<div class="container">

    <div class="card">

        <!--Header-->
        <div class="header pt-3 peach-gradient">

            <div class="row d-flex justify-content-center">
                <h3 class="white-text mb-3 pt-3 font-weight-bold">Bienvenue sur notre Portail Immo</h3><img src="../img/Logo-Ecobunker2.png" width="100px" style="float:right;" class="ml-5"><span class="ml-5"><a href="inserer.php">Ajouter</a></span>
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

            <!--Body-->
            <table id="dtMaterialDesignExemple" class="table table-striped" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th class="th-sm">ENTREPRISES</th>
                        <th class="th-sm">LOGOS</th>
                        <th class="th-sm">DOMAINE</th>
                        <th class="th-sm">EMPLACEMENT</th>
                        <th class="th-sm">ACTIONS</th>
                    </tr>
                </head>

                <tbody>
                    <?php
                    $req = $DB_con->query('SELECT id,nom,logo,specialite,emplacement,telephone FROM entreprises');
                    
                      while ($resultat = $req->fetch())
                      {
                    echo '<tr>';
                        echo '<td><a href="../details.php?id='.$resultat['id'].'">' .$resultat['nom'].'</a></td>';
                        echo '<td><a href="../details.php?id='.$resultat['id'].'"><img src="../uploads/'.$resultat['logo'].'" width="100px"></a></td>';
                        echo'<td>'.$resultat['specialite'].'</td>';
                        echo '<td>'.$resultat['emplacement'].'</td>';
                        echo '<td><a href="update.php?id='.$resultat['id'].'" class="btn btn-green btn-rounded z-depth-1a waves-effect waves-light">Editer</a> <a href="supprimer.php?id='.$resultat['id'].'" class="btn btn-red btn-rounded z-depth-1a waves-effect waves-light">Supprimer</a></td>';
                    echo'</tr>';
                    } // Fin de la boucle des billets
                    $req->closeCursor();
                    ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>Nom</th>
                        <th>Nom</th>
                        <th>Nom</th>
                        <th>Nom</th>
                    </tr>
                </tfoot>
            </table>
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