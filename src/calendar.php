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
?>

<section class='classes-timetable spad'>
    <div class='container'>
        <div class='row'>
            <div class='col-lg-12'>
                <div class='section-title'>
                    <h2>Emploie du temps</h2>
                    <?php
        foreach($lastWeeks as $lastWeek){
            echo "debut de semaine: ".$lastWeek["weeBegin"] . " | fin de semaine: ". $lastWeek["weeEnd"];
        }
        ?>
                </div>
                <div class='nav-controls'>
                    <ul>
                        <li class='active' data-tsfilter='all'>Toutes les classes</li>
                        <li data-tsfilter='gym'>Gym</li>
                        <li data-tsfilter='Football'>Football</li>
                        <li data-tsfilter='Dance'>Dance</li>
                        <li data-tsfilter='body'>Body</li>
                        <li data-tsfilter='yoga'>Yoga</li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class='row'>
            <div class='col-lg-12'>
                <div class='schedule-table'>
                    <table>
                        <thead>
                            <tr>
                                <th></th>
                                <th>Lundi</th>
                                <th>Mardi</th>
                                <th>Mercredi</th>
                                <th>Jeudi</th>
                                <th>Vendredi</th>
                                <th>Samedi</th>
                                <th>Dimanche</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for ($e = 0; $e < 7; $e++) { 
                                echo "
                                <tr>
                                    <td class='workout-time'> " . 10 + ($e * 2) . ":00h</td>
                                ";
                                    for ($i = 0; $i < 7; $i++) {
                                        $foundCalendar = false;
                                    
                                        foreach ($calendars as $calendar) {
                                            if ($i+1 == $calendar["resDayOfWeek"] && $e+1 == $calendar["resTimeSlot"]) 
                                            {
                                                $foundCalendar = true;
                                                echo "
                                                <td class='hover-bg ts-item' data-tsmeta=". $calendar["sptName"] . ">
                                                    <a href='calendarSport.php?idreservation=". $calendar["idReservation"] . "'>
                                                        <h6>" . $calendar["sptName"] . "</h6>
                                                        <span>" . $calendar["resTime"] . "</span>
                                                        <div class='trainer-name'>
                                                            " . $calendar["coaName"] . "
                                                        </div>
                                                    </a>
                                                </td>
                                                "; 
                                            }
                                        }
                                        if (!$foundCalendar) { 
                                            echo "
                                            <td style='height: 106px'></td>
                                            ";
                                         } 
                                    }
                                echo " 
                                </tr>
                                ";
                            }
                        echo "
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>";
?>

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