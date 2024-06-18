<?php error_reporting(0) ?>
<?php include_once "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SIMPLEMICE </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <style>
        .dropdown-menu {
            min-width: 12rem;
            min-height: 8rem;
        }

        .dropdown-menu .dropdown-item {
            text-align: center;
        }

        .dropdown-menu .dropdown-header {
            text-align: center;
            font-weight: bold;
        }

        .dropdown-menu .dropdown-divider {
            margin: 0.5rem 0;
        }

        .logout-btn {
            top: 80px;
            left: 60px;
        }
    </style>

</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-light pt-3 d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                        <p><i class="fa fa-envelope mr-2"></i>simplemice@gmail.com</p>
                        <p class="text-body px-3">|</p>
                        <p><i class="fa fa-phone-alt mr-2"></i>(0274) 2872733</p>
                        
                    </div>
                </div>
                <div class="col-lg-6 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-primary px-3" href="">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-primary px-3" href="https://www.instagram.com/simplemiceofficial/">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="text-primary px-3" href="">
                            <i class="fab fa-youtube"></i>
                        </a>
                        <a class="text-primary px-3" href="loginpage.php?page=login">
                            <i class="fas fa-user-circle"></i>
                        </a>
                    

<?php
session_start();
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
} else {
    $username = 'Guest';
}
?>

                <div class="dropdown">
                            <a class="text-primary px-3 dropdown-toggle" href="#" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-child"></i>
                                <span class="hidden-xs"><?= $_SESSION['username'] ?></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                                <div class="dropdown-header">
                                    <?= $_SESSION['username'] ?><br>
                                    <?= $_SESSION['email'] ?>
                                </div>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item logout-btn" href="logout.php">Logout</a>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var dropdownToggle = document.querySelectorAll('.dropdown-toggle');
            dropdownToggle.forEach(function (toggle) {
                toggle.addEventListener('click', function (e) {
                    e.preventDefault();
                    var dropdownMenu = this.nextElementSibling;
                    dropdownMenu.classList.toggle('show');
                });
            });

            document.addEventListener('click', function (e) {
                if (!e.target.matches('.dropdown-toggle')) {
                    var dropdowns = document.querySelectorAll('.dropdown-menu');
                    dropdowns.forEach(function (dropdown) {
                        dropdown.classList.remove('show');
                    });
                }
            });
        });
    </script>

    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-light navbar-light shadow-lg py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="main.php" class="navbar-brand">
                    <h1><img src="../web/img/LOGO SM19 2.png" class="img-fluid" width="200"></h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="main.php" class="nav-item nav-link">Home</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link active dropdown-toggle" data-toggle="dropdown">MICE</a>
                            <div class="dropdown-menu border-0 rounded-0 m-0">
                                <a href="meeting.php?page=mice" class="dropdown-item">Meeting</a>
                                <a href="incentive.php?page=mice" class="dropdown-item">Incentive</a>
                                <a href="conference.php?page=mice" class="dropdown-item">Conference</a>
                                <a href="exhibition.php?page=mice" class="dropdown-item">Exhibition</a>
                            </div>
                        </div>
                        <a href="tour.php?page=tour" class="nav-item nav-link">Tour</a>
                        <a href="pengadaanbarang.php?page=pengadaanbarang" class="nav-item nav-link">Pengadaan Barang</a>
                        <a href="about.php" class="nav-item nav-link">About Us</a>
                        <a href="feedbackpage.php?page=feedback" class="nav-item nav-link">Contact</a>
                        <a href="login2.php" class="nav-item nav-link">Login</a>
                        <a class="nav-item nav-link" href="notif.php">
                            <i class="fas fa-shopping-cart"></i>
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="container-fluid page-header">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 class="display-4 text-white text-uppercase">Exhibition</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="main.php">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Exhibition</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- About Start -->
    <div class="pl-5">  
    <div class="container-fluid py-3 pl-5 d-flex justify-content-center">  
    <div class="container pt-7 pl-5">
        <div class="col-lg-9 pt-7 pb-lg-7 mx-auto">
            <div class="about-text bg-white p-4 p-lg-5 my-lg-5 text-center">
                <h1 class="mb-3">EXHIBITION</h1>
                <p>Simplemice selaku Event Organizer yang sudah berpengalaman 
                            di bidangnya, memberikan konsep-konsep yang berkualitas 
                            sesuai dengan harapan dan target dari klien, supaya event 
                            tersebut dapat menjadi trend dan standar baru dalam produk 
                            bisnisnya. Penyusunan ide hingga eksekusi event kami 
                            monitoring secara ketat dan komunikatif bersama dengan klien, 
                            sehingga event akan tertuju secara epic dan sempurna.</p>
                <div class="row mb-4">
                    <div class="col-6">
                        <img class="img-fluid" src="img/anjaykonser.jpg" alt="">
                    </div>
                    <div class="col-6">
                        <img class="img-fluid" src="img/laribang.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
   
<div class="container-fluid py-3">
    <div class="container pt-3 pb-3">
    <?php include "konten.php"; ?>
    </div>
    </div>



    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white-50 py-5 px-sm-3 px-lg-5" style="margin-top: 90px;">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <a href="" class="navbar-brand">
                    <h1><img src="../web/img/LOGO SM19 2.png" class="img-fluid" width="250"></h1>
                </a>
                <p>Penyedia Jasa Tour & Event Terbaik di Dunia Indonesia Merdeka</p>
                <h6 class="text-white text-uppercase mt-4 mb-3" style="letter-spacing: 5px;">Follow Us</h6>
                <div class="d-flex justify-content-start">
                    <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-primary btn-square" href="https://www.instagram.com/simplemiceofficial/"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Our Services</h5>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white-50 mb-2" href="about.html"><i class="fa fa-angle-right mr-2"></i>About</a>
                    <a class="text-white-50 mb-2" href="tour.html"><i class="fa fa-angle-right mr-2"></i>Tour</a>
                    <a class="text-white-50 mb-2" href="ticket.html"><i class="fa fa-angle-right mr-2"></i>Ticketing</a>
                    <a class="text-white-50 mb-2" href="transport.html"><i class="fa fa-angle-right mr-2"></i>Transportation</a>
                    <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Guides</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Our Partner</h5>
                <div class="d-flex flex-column justify-content-start">
                    
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Contact Us</h5>
                <p><i class="fa fa-map-marker-alt mr-2"></i>Jl. Perumnas Seturan, Kledokan, Caturtunggal, Kec. Depok,
                    Kab. Sleman, Daerah Istimewa Yogyakarta 55281</p>
                    <p><i class="fa fa-map-marker-alt mr-2"></i> Andara Village Blok F no 15, Pangkalan Jati Baru,
                        Kec Cinere, Kota Depok, Jawa Barat</p>
                <p><i class="fa fa-phone-alt mr-2"></i>(0274) 2872733</p>
                <p><i class="fa fa-envelope mr-2"></i>simplemice@gmail.com</p>
                <h6 class="text-white text-uppercase mt-4 mb-3" style="letter-spacing: 5px;">Newsletter</h6>
                <div class="w-100">
                    <div class="input-group">
                        <input type="text" class="form-control border-light" style="padding: 25px;" placeholder="Your Email">
                        <div class="input-group-append">
                            <button class="btn btn-primary px-3">Sign Up</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5" style="border-color: rgba(256, 256, 256, .1) !important;">
        <div class="row">
            <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white-50">Copyright &copy; <a href="#">Domain</a>. All Rights Reserved.</a>
                </p>
            </div>
            <div class="col-lg-6 text-center text-md-right">
                <p class="m-0 text-white-50">Designed by <a href="https://htmlcodex.com">d2ak</a>
                </p>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>