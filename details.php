<?php
                    require('admin_05/Dbconfig.php');
                    if(!empty($_GET['id']))
                    {
                    $id = htmlspecialchars(stripslashes(trim($_GET['id'])));
                    }
                    $req = $DB_con->prepare('SELECT id,nom,logo,specialite, emplacement,telephone,email,image1,image2,image3,image4,image5,image6,presentation FROM entreprises WHERE id = ?');
                    $req->execute(array($id));
                    $resultat = $req->fetch();
                   
?>
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

    <title> <?php echo $resultat['nom']; ?> - Port'Immo</title>
</head>
<body>

<div class="container">

    <div class="card">

        <!--Header-->
        <div class="header pt-3 peach-gradient">

            <div class="row d-flex justify-content-center">
                <h3 class="white-text mb-3 pt-3 font-weight-bold">Bienvenue sur notre Portail Immo</h3><img src="img/Logo-Ecobunker2.png" width="100px" style="float:right;" class="ml-5"><span class="ml-5"><a href="index.php">Retour à la liste</a></span>
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
            <div class="row">
							<div class="col-md-5 animate fadeInLeft">
								<div class="product-detail-slider">
									<div class="rslides rslides1" id="product-detail-slider" style="max-width: 1000px;">
										<img src="uploads/<?php echo $resultat['image1']; ?>" alt="" id=""class="" width="400px">
									</div>
								</div>
                            </div>
                            
							<div class="col-md-7 animate fadeInRight">
								<div class="product-detail-description">
                                    <h2><?php echo $resultat['nom']; ?></h2><span><img src="uploads/<?php echo $resultat['logo']; ?>" width="150px"></span>
                                    <div class="col-md-12">
                                        <p><strong>Spécialité:</strong><?php echo ' '. $resultat['specialite']; ?><p>
                                    </div>
                                    
									<h4 class="">presentation</h4>
									<p><?php echo $resultat['presentation']; ?></p>
									<div class="clearfix"></div>
									<br>
                                    <p><strong>Contact:</strong>  <?php echo $resultat['telephone']; ?></p>
                                    
                                    <p><strong>Adresse Email:</strong>  <?php echo $resultat['email']; ?></p>

                                    <p><strong>Emplacement:</strong>  <?php echo $resultat['emplacement']; ?></p>
									
								</div>
                            </div>
                            <div class="col-md-12">
                                
										<img src="uploads/<?php echo $resultat['image2']; ?>" alt="" id=""  height="230px" class="">
                                        <img src="uploads/<?php echo $resultat['image3']; ?>" alt="" id=""  height="230px" class="">
                                        
										<img src="uploads/<?php echo $resultat['image4']; ?>" alt="" id=""  height="230px" class="">
                                        <img src="uploads/<?php echo $resultat['image5']; ?>" alt="" id=""  height="230px" class="">
                                        
                                        <img src="uploads/<?php echo $resultat['image6']; ?>" alt="" id=""  height="230px" class="">
                            </div>
                        </div>
                        
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="text-box animate bounceIn">
                    <span class="icon-img-1"></span>
                    <h4>Réduisez vos dépenses</h4>
                    <p>Dépensez moins pour la santé de vos proches simplement.</p>
                </div>
            </div>

            <div class="col-md-4">
            <div class="text-box animate bounceIn" data-delay="100">
				<i class="icon-img-2"></i>
				<h4>Economiser de l'argent</h4>
				<p>Ne vous ruiner plus pour soigner vos proches.</p>
			</div>
            </div>

            <div class="col-md-4">
                <div class="text-box animate bounceIn" data-delay="200">
                    <i class="icon-img-3"></i>
                    <h4>Securiser votre futur</h4>
                    <p>Concentrez-vous sur vos projets paisiblement.</p>
                </div>
            </div>
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