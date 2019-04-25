<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/mdb.css">
    <link rel="stylesheet" href="css/style.css">

    <title>Port'Immo</title>
</head>
<body>

<div class="container">

    <div class="card">

        <!--Header-->
        <div class="header pt-3 peach-gradient">

            <div class="row d-flex justify-content-center">
                <h3 class="white-text mb-3 pt-3 font-weight-bold">Bienvenue sur notre Portail Immo</h3>
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
                        <th class="th-sm">CONTACT</th>
                    </tr>
                </head>

                <tbody>
                    <?php
                    require('admin_05/Dbconfig.php');
                    $req = $DB_con->query('SELECT id,nom,logo,specialite,emplacement,telephone FROM entreprises');
                    
                      while ($resultat = $req->fetch())
                      {
                    echo '<tr>';
                        echo '<td><a href="details.php?id='.$resultat['id'].'">' .$resultat['nom'].'</a></td>';
                        echo '<td><a href="details.php?id='.$resultat['id'].'"><img src="uploads/'.$resultat['logo'].'" width="100px"></a></td>';
                        echo'<td>'.$resultat['specialite'].'</td>';
                        echo '<td>'.$resultat['emplacement'].'</td>';
                        echo '<td>'.$resultat['telephone'].'</td>';
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


<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/mdb.js"></script>
<script src="js/script.js"></script>
</body>
</html>