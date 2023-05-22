<?php
	include_once("database.php");
	//var_dump($_POST);
	$count = 0;

	if(isset($_POST["name"]))
	{
		$count++;
	}
	if(isset($_POST["email"]))
	{
		$count++;
	}
	if(isset($_POST["sport"]))
	{
		$count++;
	}
	if(isset($_POST["user-type"]))
	{
		$count++;
		//var_dump($count);
	}

	if($count === 4 && $_POST["user-type"] == 'sportif')
	{
		$data = [];
		$data["spoName"] = $_POST["name"];
		$data["spoMail"] = $_POST["email"];
		$data["fkSport"] = $_POST["sport"];
		//var_dump($data);
		$db = new database();
		$resultInsert = $db->addOneSportif($data);
		
		header("Location:index.html");
	}else if($count < 4 && $_POST["user-type"] == 'sportif')
	{
		header('Location: http://localhost:8080/GProjet042-Sport/src/gutim-master/gutim-master/login.php');
	}
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Gutim Template">
    <meta name="keywords" content="Gutim, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gutim | Template</title>

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
                    <h2>S'inscrire maintenant en tant que coach</h2>
                </div>
                <form action="getlogincoach.php" class="register-form" method="post">
                    <div class="row">
                        <div class="col-lg-6">
                            <label for="name">Prenom</label>
                            <input type="text" id="name" name="name">
                        </div>
						<div class="col-lg-6">
							<label for="rank">Rank</label>
                            <input type="text" id="rank" name="rank">
                        </div>
						<div class="col-lg-6">
							<label for="description">Description</label>
                            <input type="text" id="description" name="description">
                        </div>
                        <div class="col-lg-6">
                            <label for="email">Adresse mail</label>
                            <input type="text" id="email" name="email">
                        </div>
						<div class="col-lg-6">
                            <label for="image">Chemin de l'image</label>
                            <input type="text" id="image" name="image">
                        </div>
                        <div class="col-lg-6">
                            <label for="sport">sport</label>
                            <input type="text" id="sport" name="sport">
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