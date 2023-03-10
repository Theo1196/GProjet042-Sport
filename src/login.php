<!doctype html>
<html lang="fr">
<head>
    <title>Sport-Login</title>
    <meta charset="utf-8">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/header.css"/>
    <link rel="stylesheet" href="gutim-master/gutim-master/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="gutim-master/gutim-master/css/style.css" type="text/css">
</head>
<?php include("includes/header.html");?> 

<section class="register-section spad">
<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <div class="register-text">
                <div class="section-title">
                    <h2>S'inscrire maintenant</h2>
                </div>
                <form action="#" class="register-form">
                    <div class="row">
                        <div class="col-lg-6">
                            <label for="name">Prenom</label>
                            <input type="text" id="name">
                        </div>
                        <div class="col-lg-6">
                            <label for="email">Adresse mail</label>
                            <input type="text" id="email">
                        </div>
                        <div class="col-lg-6">
                            <label for="last-name">Nom de famille</label>
                            <input type="text" id="last-name">
                        </div>
                        <div class="col-lg-6">
                            <label for="mobile">Numéro de téléphone</label>
                            <input type="text" id="mobile">
                        </div>
                    </div>
                    <button type="submit" class="register-btn">s'inscrire</button>
                </form>
            </div>
        </div>
        <div class="col-lg-4">
                    <div class="register-pic">
                        <img src="img/register-pic.jpg" alt="">
                    </div>
        </div>
    </div>
</div>
</section>

<?php include("includes/footer.html");?> 