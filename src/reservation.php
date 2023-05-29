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
    <link rel="stylesheet" href="./gutim-master/gutim-master/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="./gutim-master/gutim-master/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="./gutim-master/gutim-master/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="./gutim-master/gutim-master/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="./gutim-master/gutim-master/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="./gutim-master/gutim-master/css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container">
            <div class="logo">
                <a href="./index.html">
                    <img src="img/logo.png" alt="">
                </a>
            </div>
            <div class="nav-menu">
                <nav class="mainmenu mobile-menu">
                    <ul>
                        <li><a href="./index.html">Home</a></li>
                        <li><a href="./about-us.php">About</a></li>
                        <li class="active"><a href="./classes.html">Classes</a></li>
                        <li><a href="./blog.html">Blog</a></li>
                        <li><a href="./gallery.html">Gallery</a></li>
                        <li><a href="./contact.html">Contacts</a></li>
                    </ul>
                </nav>
                <a href="#" class="primary-btn signup-btn">Sign Up Today</a>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb/classes-breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>Classes</h2>
                        <div class="breadcrumb-option">
                            <a href="./index.html"><i class="fa fa-home"></i> Home</a>
                            <span>Class</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Classes Timetable Section Begin -->
<?php
include("Database.php");
$db = new Database();
$calendars = $db->getCalendar();
$lastWeeks = $db->getLastWeek();
$sports = $db->getAllSport();

echo "<form action='checkReservation.php' method='get'>";
echo "<select name='sports'>";
echo "<option value=''>Sélectionner un sport</option>"; 
foreach($sports as $sport)
{
    echo "<option value='" . $sport["sptName"] . "'>" . $sport["sptName"] . "</option>";
}
echo "</select>";
?>
<select name="time">
    <option value=''>Sélectionner un horaire</option>
    <option value="1">10:00H à 12:00H</option>
    <option value="2">12:00H à 14:00H</option>
    <option value="3">14:00H à 16:00H</option>
    <option value="4">16:00H à 18:00H</option>
    <option value="5">18:00H à 20:00H</option>
    <option value="6">20:00H à 22:00H</option>
    <option value="7">22:00H à 24:00H</option>
</select>

<select name="day">
    <option value=''>Sélectionner un jour de la semaine</option>
    <option value="1">Lundi</option>
    <option value="2">Mardi</option>
    <option value="3">Mercredi</option>
    <option value="4">Jeudi</option>
    <option value="5">Vendredi</option>
    <option value="6">Samedi</option>
    <option value="7">Dimanche</option>
</select>

<button type="submit">reserver</button>
</form>



    <!-- Trainer Table Schedule Section End -->

    <!-- Footer Banner Section Begin -->
    <section class="footer-banner">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="footer-banner-item set-bg" data-setbg="img/footer-banner/footer-banner-1.jpg">
                        <span>New member</span>
                        <h2>7 days for free</h2>
                        <p>Complete the training sessions with us, surely you will be happy</p>
                        <a href="#" class="primary-btn">Get Started</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="footer-banner-item set-bg" data-setbg="img/footer-banner/footer-banner-2.jpg">
                        <span>contact us</span>
                        <h2>09 746 204</h2>
                        <p>If you trust us on your journey they dark sex does not disappoint you!</p>
                        <a href="#" class="primary-btn">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer Banner Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="contact-option">
                        <span>Phone</span>
                        <p>(123) 118 9999 - (123) 118 9999</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-option">
                        <span>Address</span>
                        <p>72 Kangnam, 45 Opal Point Suite 391</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-option">
                        <span>Email</span>
                        <p>contactcompany@Gutim.com</p>
                    </div>
                </div>
            </div>
            <div class="subscribe-option set-bg" data-setbg="img/footer-signup.jpg">
                <div class="so-text">
                    <h4>Subscribe To Our Mailing List</h4>
                    <p>Sign up to receive the latest information </p>
                </div>
                <form action="#" class="subscribe-form">
                    <input type="text" placeholder="Enter Your Mail">
                    <button type="submit"><i class="fa fa-send"></i></button>
                </form>
            </div>
            <div class="copyright-text">
                <ul>
                    <li><a href="#">Term&Use</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
                <p>&copy;<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></p>
                <div class="footer-social">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-dribbble"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>