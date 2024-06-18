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
           body{
	margin: 0;
	padding: 0;
	justify-content: center;
	align-items: center;
	min-height: 100vh;
	font-family: 'Jost', sans-serif;
	background: linear-gradient(to bottom, #0f0c29, #ff5500, #690d0d);

}
.main{
	width: 350px;
	height: 500px;
	background: red;
	overflow: hidden;
	background: url("https://doc-08-2c-docs.googleusercontent.com/docs/securesc/68c90smiglihng9534mvqmq1946dmis5/fo0picsp1nhiucmc0l25s29respgpr4j/1631524275000/03522360960922298374/03522360960922298374/1Sx0jhdpEpnNIydS4rnN4kHSJtU1EyWka?e=view&authuser=0&nonce=gcrocepgbb17m&user=03522360960922298374&hash=tfhgbs86ka6divo3llbvp93mg4csvb38") no-repeat center/ cover;
	border-radius: 10px;
	box-shadow: 5px 20px 50px #000;
}
            #chk{
	        display: none;
            }
            .signup{
	        position: relative;
	        width:100%;
	        height: 100%;
            }
            label{
	        color: #fff;
	        font-size: 2.3em;
	        justify-content: center;
	        display: flex;
	        margin: 40px;
	        font-weight: bold;
	        cursor: pointer;
	        transition: .5s ease-in-out;
            }
            input{
	        width: 60%;
	        height: 40px;
	        background: #e0dede;
	        justify-content: center;
	        display: flex;
	        margin: 20px auto;
	        padding: 10px;
	        border: none;
	        outline: none;
	        border-radius: 5px;
            }
            
            button{
	        width: 60%;
	        height: 40px;
	        margin: 10px auto;
	        justify-content: center;
	        display: block;
	        color: #fff;
	        background: #ff5500;
	        font-size: 1em;
	        font-weight: bold;
	        margin-top: 20px;
	        outline: none;
	        border: none;
	        border-radius: 5px;
	        transition: .2s ease-in;
	        cursor: pointer;
            }
            button:hover{
	        background: #a12424;
            }
            .login{
	        height: 460px;
            margin-top: 80px;
	        background: #eee;
	        border-radius: 60% / 10%;
	        transform: translateY(-180px);
	        transition: .8s ease-in-out;
            }
            .login label{
	        color: #690d0d;
	        transform: scale(.6);
            }

            #chk:checked ~ .login{
        	transform: translateY(-500px);
            }
            #chk:checked ~ .login label{
        	transform: scale(1);	
            }
            #chk:checked ~ .signup label{
	        transform: scale(.6);
            }

        </style>

</head>

<body>


    <!-- Topbar Start -->
    <div class="container-fluid bg-light pt-3 d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                <a href="main.php" class="navbar-brand">
                    <h1><img src="../web/img/LOGO SM19 2.png" class="img-fluid" width="200">&nbsp;&nbsp;Log in</h1>
                </a>
                </div>
            </div>
        </div>  
    </div>
    <!-- Topbar End -->
    



    <!-- Carousel Start -->
    <div class="container-fluid py-5">
    <div class="container pt-5 pb-3">
    <div class="row justify-content-center">
      <div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">
			<div class="signup">
				<form method="POST" action="register.php">
					<label for="chk" aria-hidden="true">Sign up</label>
					<input type="text" name="txt" placeholder="User name">
					<input type="email" name="email" placeholder="Email">
					<input type="password" name="pswd" placeholder="Password">
                    <input type="password" name="pswd2" placeholder="Re-type Password">
					<button>Sign up</button>
				</form>
			</div>

			<div class="login">
				<form method="POST" action="cekloginuser.php">
					<label for="chk" aria-hidden="true">Login</label>
					<input type="text" name="txt" placeholder="User name">
					<input type="password" name="pswd" placeholder="Password">
					<button>Login</button>
				</form>
			</div>
    </div>
	</div>
    <?php
    if($_GET['message'] == 'failregis')
    {
      echo "<script>
        alert('Registrasi Berhasil');
      </script>";
    }
    ?>
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