<?php 
include "koneksi.php";

$page = $_GET['page'];

if($page == 'login'){
  ?>
    <div class="site-section">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-3">
              <h2 class="mb-5 text-black text-center"><strong>Only Admin</strong></h2>
              <form method="post" action="login.php">
                <div class="row">
                  <div class="col-md-12 form-group">
                    <label for="useremail">Email</label>
                    <input required type="email" id="useremail" name="useremail" class="form-control form-control-lg">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 form-group">
                    <label for="passlogin">Password</label>
                    <input required type="password" id="passlogin" name="password" class="form-control form-control-lg">
                  </div>
                </div>
                
                <div class="row">
                  <div class="col-12">
                    <input type="submit" name="login" value="Login" class="btn btn-primary btn-lg px-5">
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
  <?php
  if($_GET['message'] == 'failregis')
  {
    echo "<script>
      alert('Message berhasil dikirim');
    </script>";
  }
}


if($page == 'loginuser'){
    ?>
        <style>
            body{
	            margin: 0;
	            padding: 0;
	            justify-content: center;
	            align-items: center;
	            min-height: 100vh;
            }                  
            .main{
	        width: 350px;
	        height: 500px;
	        background: red;
	        overflow: hidden;
	        background: linear-gradient(to bottom, #ff5500, #690d0d);
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
        alert('Message berhasil dikirim');
      </script>";
    }
  }


if($page == 'feedback') {
  ?>
   <form method="POST" action="../web/feedback.php">
  <div class="site-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6 ">
          <h2 class="mb-5 text-black text-center"><strong>Contact For Any Query</strong></h2>
          <div class="row">
            <div class="col-md-6 form-group">
              <label for="fname">Your Name</label>
              <input type="text" id="fname" name="fname" class="form-control form-control-lg">
            </div>
            <div class="col-md-6 form-group">
              <label for="eaddress">Your Email</label>
              <input type="text" id="eaddress" name="eaddress" class="form-control form-control-lg">
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 form-group">
              <label for="subject">Subject</label>
              <input type="text" id="subject" name="subject" class="form-control form-control-lg">
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 form-group">
              <label for="message">Message</label>
              <textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
            </div>
          </div>

          <div class="row">
            <div class="col-12">
              <input type="submit" value="Send Message" class="btn btn-primary btn-lg px-5">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>
  <?php
}

if($page == 'tour') {
  ?>
   <form method="POST" action="../web/tourdata.php">
   <div class="container-fluid py-9">
        <div class="container pt-8 pb-3">
        <div id="success"></div>
            <!-- Booking Start -->
            <div class="container pb-5">
            <div class="bg-light shadow" style="padding: 30px;">
                <div class="row align-items-center justify-content-center" style="min-height: 60px;">
                    <div class="col-md-15">
                        <div class="row" >
                            <div class="col-md-3">
                                <div class="mb-3 mb-md-0" >
                                    <select id="destinasi" name="destinasi" class="custom-select px-4" style="height: 47px;">
                                        <option selected>Destination</option>
                                        <option value="1">Jakarta </option>
                                        <option value="2">Yogyakarta </option>
                                        <option value="3">Luar Negeri </option>
                                        <option value="4">Lainnya </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3 mb-md-0">
                                    <div class="date" id="depart" name="depart" data-target-input="nearest">
                                        <input type="date" class="form-control p-4 datetimepicker-input" placeholder="Depart Date" data-target="#date1" data-toggle="datetimepicker"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3 mb-md-0">
                                    <div class="date" id="return" name="return" data-target-input="nearest">
                                        <input type="date" class="form-control p-4 datetimepicker-input" placeholder="Return Date" data-target="#date2" data-toggle="datetimepicker"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3 mb-md-0">
                                    <select id="durasi" name="durasi" class="custom-select px-4" style="height: 47px;">
                                        <option selected>Duration</option>
                                        <option value="1">> 1 Minggu</option>
                                        <option value="2">< 1 Minggu</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Booking End -->
    <div class="container-fluid">
        <div class="container py-4">
        </div>
        <div class="row justify-content-center">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="img/tour.png" alt="">
                        <div class="p-4">
                            
                            <a class="h5 text-decoration-none" href="">Discover amazing places of the world with us</a>
                            <div class="border-top mt-4 pt-4">
                                
                            </div>
                        </div>
                    </div>
                    <!-- Contact Start -->
   
                </div>
                <div class="col-lg-8">
                    <div class="contact-form bg-white" style="padding: 30px;">
                            <div class="form-row">
                                <div class="control-group col-sm-6">
                                    <input type="text" class="form-control p-4" id="fname" name="fname" placeholder="Your Name"
                                        required="required" data-validation-required-message="Please enter your name" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group col-sm-6">
                                    <input type="email" class="form-control p-4" id="eaddress"  name="eaddress" placeholder="Your Email"
                                        required="required" data-validation-required-message="Please enter your email" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control p-4" id="subject" name="subject" placeholder="Subject"
                                    required="required" data-validation-required-message="Please enter a subject" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control py-3 px-4" rows="5" id="detail" name="detail" placeholder="Detail Tour"
                                    required="required"
                                    data-validation-required-message="Please enter your message"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-primary py-3 px-4" type="submit" id="sendMessageButton">Order Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
        </div>
</div>
</form>
<?php
}

if($page == 'pengadaanbarang') {
  ?>
   <form method="POST" action="../web/pengadaanbarangdata.php">
   <div class="container-fluid py-9">
        <div class="container pt-8 pb-3">
        <div id="success"></div>
            <!-- Booking Start -->
            <div class="container pb-5">
            <div class="bg-light shadow" style="padding: 30px;">
                <div class="row align-items-center justify-content-center" style="min-height: 60px;">
                    <div class="col-md-15">
                        <div class="row" >
                            <div class="col-md-3">
                                <div class="mb-3 mb-md-0" >
                                    <select id="destinasi" name="destinasi" class="custom-select px-4" style="height: 47px;">
                                        <option selected>Jenis Barang</option>
                                        <option value="1">Merchendise</option>
                                        <option value="2">Keperluan Event</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3 mb-md-0">
                                    <div class="date" id="depart" name="depart" data-target-input="nearest">
                                        <input type="date" class="form-control p-4 datetimepicker-input" placeholder="Depart Date" data-target="#date1" data-toggle="datetimepicker"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3 mb-md-0">
                                    <div class="date" id="return" name="return" data-target-input="nearest">
                                        <input type="date" class="form-control p-4 datetimepicker-input" placeholder="Return Date" data-target="#date2" data-toggle="datetimepicker"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3 mb-md-0">
                                    <select id="durasi" name="durasi" class="custom-select px-4" style="height: 47px;">
                                        <option selected>Duration</option>
                                        <option value="1">Fast</option>
                                        <option value="2">Regular</option>
                                        <option value="3">Preorder</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Booking End -->
    <div class="container-fluid">
        <div class="container py-4">
        </div>
        <div class="row justify-content-center">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="img/barang.png" alt="">
                        <div class="p-4">
                            <a class="h5 text-decoration-none" href="">Provide All You Needs</a>
                            <div class="border-top mt-4 pt-4">
                            </div>
                        </div>
                    </div>
                    <!-- Contact Start -->
   
                </div>
                <div class="col-lg-8">
                    <div class="contact-form bg-white" style="padding: 30px;">
                            <div class="form-row">
                                <div class="control-group col-sm-6">
                                    <input type="text" class="form-control p-4" id="fname" name="fname" placeholder="Your Name"
                                        required="required" data-validation-required-message="Please enter your name" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group col-sm-6">
                                    <input type="email" class="form-control p-4" id="eaddress"  name="eaddress" placeholder="Your Email"
                                        required="required" data-validation-required-message="Please enter your email" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control p-4" id="subject" name="subject" placeholder="Subject"
                                    required="required" data-validation-required-message="Please enter a subject" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control py-3 px-4" rows="5" id="detail" name="detail" placeholder="Detail Tour"
                                    required="required"
                                    data-validation-required-message="Please enter your message"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-primary py-3 px-4" type="submit" id="sendMessageButton">Order Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
        </div>
</div>
</form>
<?php
}


if($page == ''){
  ?>
   <div class="site-section">
          <div class="container">
            <div class="row mb-4">
              <div class="col-md-7 mb-5 text-center mx-auto">
                <span class="caption">Portofolio</span>
                <h2 class="text-black">Daftar <strong>Porto</strong></h2>
              </div>
            </div>
            <div class="row auctions-entry">
            <?php 
                  $query = "SELECT * FROM barang order by nama_barang";
                  $execute = mysqli_query($koneksi,$query);

                  while($data = mysqli_fetch_array($execute)){
                ?>
                  <div class="col-6 col-md-4 col-lg-4">
                    <div class="item">
                      <div>
                        <a><img width="300px" src="../img/<?=$data['foto']?>" alt="Image" class="img-fluid"></a>
                      </div>
                      <div class="p-4">
                        <h3><a><?=$data['nama_barang']?></a></h3>
                      </div>

                    </div>
                  </div>
                <?php } ?>
            </div>
          </div>
        </div>
  <?php
}

if($page == 'mice') {
  ?>
   <form method="POST" action="../web/mice.php">
   <div class="container-fluid py-9">
        <div class="container pt-8 pb-3">
        <div id="success"></div>
            <!-- Booking Start -->
            <div class="container pb-5">
            <div class="bg-light shadow" style="padding: 30px;">
                <div class="row align-items-center justify-content-center" style="min-height: 60px;">
                    <div class="col-md-15">
                        <div class="row" >
                            <div class="col-md-3">
                                <div class="mb-3 mb-md-0" >
                                    <select id="destinasi" name="destinasi" class="custom-select px-4" style="height: 47px;">
                                        <option selected>Destination</option>
                                        <option value="1">Jakarta </option>
                                        <option value="2">Yogyakarta </option>
                                        <option value="3">Luar Negeri </option>
                                        <option value="4">Lainnya </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3 mb-md-0">
                                    <div class="date" id="depart" name="depart" data-target-input="nearest">
                                        <input type="date" class="form-control p-4 datetimepicker-input" placeholder="Depart Date" data-target="#date1" data-toggle="datetimepicker"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3 mb-md-0">
                                    <div class="date" id="return" name="return" data-target-input="nearest">
                                        <input type="date" class="form-control p-4 datetimepicker-input" placeholder="Return Date" data-target="#date2" data-toggle="datetimepicker"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3 mb-md-0">
                                    <select id="durasi" name="durasi" class="custom-select px-4" style="height: 47px;">
                                        <option selected>Duration</option>
                                        <option value="1">> 1 Minggu</option>
                                        <option value="2">< 1 Minggu</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Booking End -->
    <div class="container-fluid">
        <div class="container py-4">
        </div>
        <div class="row justify-content-center">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="img/tour.png" alt="">
                        <div class="p-4">
                            
                            <a class="h5 text-decoration-none" href="">Discover amazing places of the world with us</a>
                            <div class="border-top mt-4 pt-4">
                                
                            </div>
                        </div>
                    </div>
                    <!-- Contact Start -->
   
                </div>
                <div class="col-lg-8">
                    <div class="contact-form bg-white" style="padding: 30px;">
                            <div class="form-row">
                                <div class="control-group col-sm-6">
                                    <input type="text" class="form-control p-4" id="fname" name="fname" placeholder="Your Name"
                                        required="required" data-validation-required-message="Please enter your name" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group col-sm-6">
                                    <input type="email" class="form-control p-4" id="eaddress"  name="eaddress" placeholder="Your Email"
                                        required="required" data-validation-required-message="Please enter your email" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control p-4" id="subject" name="subject" placeholder="Subject"
                                    required="required" data-validation-required-message="Please enter a subject" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control py-3 px-4" rows="5" id="detail" name="detail" placeholder="Detail Tour"
                                    required="required"
                                    data-validation-required-message="Please enter your message"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-primary py-3 px-4" type="submit" id="sendMessageButton">Order Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
        </div>
</div>
</form>
<?php
}

?>

