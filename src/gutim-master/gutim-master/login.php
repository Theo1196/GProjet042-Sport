<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Gutim Template">
    <meta name="keywords" content="Gutim, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gutim | inscrire</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<?php include("includes/header.html");?> 

<section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb/classes-breadcrumb.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <h2>S'inscrire</h2>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="register-section spad">
<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <div class="register-text">
                <div class="section-title">
                    <h2>S'inscrire maintenant</h2>
                </div>
                <form action="getlogin.php" class="register-form" method="post">
                    <div class="row">
                        <div class="col-lg-6">
                            <label for="name">Prenom</label>
                            <input type="text" id="name" name="name">
                        </div>
                        <div class="col-lg-6">
                            <label for="email">Adresse mail</label>
                            <input type="text" id="email" name="email">
                        </div>
                        <div class="col-lg-6">
                            <label for="sport">sport</label>
                            <input type="text" id="sport" name="sport">
                        </div>
                        <div >
                            <label for="sportif">sportif</label>
                            <input type="radio" id="sportif" name="user-type" value="sportif" style="margin-left: 50px;">
                            <label for="coach">coach</label>
                            <input type="radio" id="coach" name="user-type" value="coach" style="margin-left: 50px">
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