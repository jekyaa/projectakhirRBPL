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
                        <a href="main.php" class="nav-item nav-link active">Home</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">MICE</a>
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


    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/cv1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">Event, Meeting, and Tour Planning </h4>
                            <h1 class="display-3 text-white mb-md-4">Creating Moments Crafting Memories</h1>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Book Now</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/cv2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">Event, Meeting, and Tour Planning</h4>
                            <h1 class="display-3 text-white mb-md-4">Creating Moments Crafting Memories</h1>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-dark" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n2"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-dark" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n2"></span>
                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5">
            <div class="row">
                <div class="col-lg-6" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="img/emakemak.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 pt-5 pb-lg-5">
                    <div class="about-text bg-white p-4 p-lg-5 my-lg-5">
                        <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">About Us</h6>
                        <h1 class="mb-3">Delivering the ultimate experience is our specialty. </h1>
                        <p>Simplemice adalah perusahaan yang dikelola secara 
                            profesional yang bergerak di bidang Event Organizer, Tour 
                            & Travel, Pengadaan Barang dan Jasa yang berkantor 
                            pusat di Yogyakarta dan kantor cabang di Jakarta. Kami 
                            memliki komitmen yang kuat untuk menjaga 
                            kepercayaan terhadap klien maupun partner bisnis dan 
                            berusaha semaksimal mungkin memberikan yang 
                            terbaik untuk semua klien, baik instansi pemerintah atau 
                            BUMN, maupun swasta dan personal</p>
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
    <!-- About End -->


    <!-- Feature Start -->
    <div class="container-fluid pb-5">
        <div class="container pb-5">
            <div class="row">
                <div class="col-md-4">
                    <div class="d-flex mb-4 mb-lg-0">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3" style="height: 100px; width: 100px;">
                            <i class="fa fa-2x fa-crown text-white"></i>
                        </div>
                        <div class="d-flex flex-column">
                            <h5 class="">Costumer is a King</h5>
                            <p class="m-0"> Pelanggan adalah raja yang berhak mendapatkan prioritas utama.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex mb-4 mb-lg-0">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3" style="height: 100px; width: 100px;">
                            <i class="fa fa-2x fa-users text-white"></i>
                        </div>
                        <div class="d-flex flex-column">
                            <h5 class="">SDM yang Kompeten</h5>
                            <p class="m-0"> Didukung oleh SDM yang terlatih, berpengalaman, terpercaya dan profesional.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex mb-4 mb-lg-0">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3" style="height: 100px; width: 100px;">
                            <i class="fa fa-2x fa-fingerprint text-white"></i>
                        </div>
                        <div class="d-flex flex-column">
                            <h5 class="">Unik dan Tematik</h5>
                            <p class="m-0">Kami memastikan setiap detail menciptakan momen berkesan dan menarik</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid pb-5">
        <div class="container pb-5">
            <div class="row">
                <div class="col-md-4">
                    <div class="d-flex mb-4 mb-lg-0">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3" style="height: 100px; width: 100px;">
                            <i class="fa fa-2x fa-globe text-white"></i>
                        </div>
                        <div class="d-flex flex-column">
                            <h5 class="">Networking Luas</h5>
                            <p class="m-0">Simplemice menyelenggarakan acara di seluruh penjuru Nusantara.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex mb-4 mb-lg-0">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3" style="height: 100px; width: 100px;">
                            <i class="fa fa-2x fa-hand-holding-usd text-white"></i>
                        </div>
                        <div class="d-flex flex-column">
                            <h5 class="">Best Price Guarantee</h5>
                            <p class="m-0">Kami berkomitmen memberikan layanan terbaik sesuai dengan budget Anda.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex mb-4 mb-lg-0">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3" style="height: 100px; width: 100px;">
                            <i class="fa fa-2x fa-briefcase-medical text-white"></i>
                        </div>
                        <div class="d-flex flex-column">
                            <h5 class="">Protokol Kesehatan</h5>
                            <p class="m-0"> Simplemice menerapkan Protokol Kesehatan selama event berlangsung.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->


    <!-- Service Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Services</h6>
                <h1>Event, Meeting, and Tour Planning </h1>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4">
                        <i class="fa fa-2x fa-route mx-auto mb-4"></i>
                        <h5 class="mb-2">MICE</h5>
                        <p class="m-0">Justo sit justo eos amet tempor amet clita amet ipsum eos elitr. Amet lorem est amet labore</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4">
                        <i class="fa fa-2x fa-ticket-alt mx-auto mb-4"></i>
                        <h5 class="mb-2">Tour Planning</h5>
                        <p class="m-0"> SIMPLEMICE melayani trip baik dalam 
                            maupun luar negeri sesuai dengan kebutuhan 
                            klien. </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4">
                        <i class="fa fa-2x fa-hotel mx-auto mb-4"></i>
                        <h5 class="mb-2">Ticketing & Hotel Voucher</h5>
                        <p class="m-0"> Kami juga melayani penjualan tiket pesawat, Voucher
                            wisata dan hotel dengan harga di bawah publish rate</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4">
                        <i class="fa fa-2x fa-hotel mx-auto mb-4"></i>
                        <h5 class="mb-2">Transportation</h5>
                        <p class="m-0">Simplemice melayani persewaan mobil 
                            dengan berbagai type dan menjamin setiap 
                            unitnya dalam keadaan prima. </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4">
                        <i class="fa fa-2x fa-hotel mx-auto mb-4"></i>
                        <h5 class="mb-2">Procurement</h5>
                        <p class="m-0">Dengan peralatan dan SDM yang terbaik, kami 
                            menciptakan dan memproduksi barang jahit, cetakan 
                            dan custom desain.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    


    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Team</h6>
                <h1>Our SIMPLEMICE Team</h1>
            </div>
            <div class="row justify-content-center">
                <div class="" style="width: 800px">
                    <div class="team-item bg-white mb-4">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/timsimple.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-outline-primary btn-square" href="https://www.instagram.com/simplemiceofficial/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                        <div style="display: flex; flex-direction: column; align-items: center; ">
    <h5 style="text-align: center;">Team Simple Mice :</h5>
    <p style="text-align: left; width: 100%; max-width: 400px; margin-left: 100px;">
      1. Founder & Director: Wenny Hapsari<br>
      2. Manager Operational: Aryu Isfandari<br>
      3. Staff Operational: Pungki Romadani<br>
      4. Multimedia Specialist: Fuad Hardhiyansyah<br>
      5. Content Creator: Kevin Daffa Danendra<br>
      6. Staff Admin: Devina Shinta (tanya devina)<br>
      7. Staff Accounting: Novia Adinda Putri<br>
      8. Tim JKT: Ishadi Febryanda<br>
      9. Tim JKT: Haris Fadhillah<br>
      10. Tim JKT: Septiana Sugiharto<br>
    </p>
  </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Testimonial</h6>
                <h1>What Our Clients Say</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                <div class="text-center pb-4">
                    <img class="img-fluid mx-auto" src="img/testimonial-1.jpg" style="width: 100px; height: 100px;" >
                    <div class="testimonial-text bg-white p-4 mt-n5">
                        <p class="mt-5">Dokumentasi sampai after movienya keren banget, ngga nyesel pakai jasa dari SIMPLEMICE
                        </p>
                        <h5 class="text-truncate">Dito</h5>
                        <span>Mahasiswa</span>
                    </div>
                </div>
                <div class="text-center">
                    <img class="img-fluid mx-auto" src="img/testimonial-2.jpg" style="width: 100px; height: 100px;" >
                    <div class="testimonial-text bg-white p-4 mt-n5">
                        <p class="mt-5">Sangat professional, sangat direkomendasikan untuk instansi besar
                        </p>
                        <h5 class="text-truncate">Puan</h5>
                        <span>Direktur PDI</span>
                    </div>
                </div>
                <div class="text-center">
                    <img class="img-fluid mx-auto" src="img/testimonial-3.jpg" style="width: 100px; height: 100px;" >
                    <div class="testimonial-text bg-white p-4 mt-n5">
                        <p class="mt-5">Acara wedding saya sangat memorable, rangkaian acara benar benar tertata rapi
                        </p>
                        <h5 class="text-truncate">Hartono</h5>
                        <span>TNI</span>
                    </div>
                </div>
                <div class="text-center">
                    <img class="img-fluid mx-auto" src="img/testimonial-4.jpg" style="width: 100px; height: 100px;" >
                    <div class="testimonial-text bg-white p-4 mt-n5">
                        <p class="mt-5">Experience yang diberikan sangat menakjubkan, tour guide sangat profesional 
                        </p>
                        <h5 class="text-truncate">Fajar</h5>
                        <span>Traveler</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


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
                <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Usefull Links</h5>
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