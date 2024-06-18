<!DOCTYPE html>
<?php session_start(); ?>
<?php error_reporting(0); ?>
<?php include "../koneksi.php"; ?>
<?php $page = $_GET['page']; $method = $_GET['method']; $id = $_GET['id']; ?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="temp/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="temp/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="temp/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="temp/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="temp/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="temp/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="temp/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="temp/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="temp/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="temp/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="temp/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="temp/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="temp/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="main.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>DM</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>ADMIN</b>SIMPLEMICE</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="temp/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs"><?=$_SESSION['nama']?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="temp/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  <?=$_SESSION['nama']?> - <?=$_SESSION['role']?>
                  <small><?=$_SESSION['email']?></small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="../logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="temp/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?=$_SESSION['nama']?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
    
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="main.php">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>

        
        <?php if($_SESSION['role'] == 'member'){?>
        <li>
          <a href="main.php?page=barang">
            <i class="fas fa-award"></i> <span>Porto</span>
          </a>
        </li>

        <?php } else { ?>
          <li>
          <a href="main.php?page=member">
            <i class="fa fa-users"></i> <span>Member</span>
          </a>
        </li>
        <?php } ?>
        <li>
          <a href="main.php?page=pesantour">
            <i class="fas fa-award"></i> <span>Pesan Tour</span>
          </a>
        </li>
        <li>
          <a href="main.php?page=pesanbarang">
            <i class="fas fa-award"></i> <span>Pesan Barang</span>
          </a>
          <li>
          <a href="main.php?page=pesanmice">
            <i class="fas fa-award"></i> <span>MICE</span>
          </a>
        </li>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

 <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Dashboard
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">
                <?php echo $page == '' ? 'Dashboard' : $page; ?>
            </li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <?php 
        if ($page == '') {
            // Retrieve data from database
            $query2 = mysqli_query($koneksi, "SELECT * FROM barang");
            $barang = mysqli_num_rows($query2);

            $query3 = mysqli_query($koneksi, "SELECT * FROM admin WHERE role = 'member'");
            $user = mysqli_num_rows($query3);

            $query4 = mysqli_query($koneksi, "SELECT * FROM admin WHERE role = 'member' AND status = 'pending'");
            $userp = mysqli_num_rows($query4);
        ?>
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3><?php echo $barang; ?></h3>
                        <p>Porto</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-car"></i>
                    </div>
                </div>
            </div>
            <!-- ./col -->
        </div>
        <!-- /.row -->
        <?php
        } elseif ($page == 'barang') {
            if ($method == '') {
                include "barang/list.php";
            } elseif ($method == 'add') {
                include "barang/add.php";
            } elseif ($method == 'edit' && $id > 0) {
                include "barang/edit.php";
            }
        } elseif ($page == 'member') {
            include "user/list.php";
        } 
        
        if ($page == 'pesantour') {
            $result = mysqli_query($koneksi, "SELECT * FROM tour WHERE status='Pending'");

            if (isset($_POST['accept'])) {
                $order_id = $_POST['order_id'];
                $update = mysqli_query($koneksi, "UPDATE tour SET status='Accepted' WHERE id='$order_id'");
                if ($update) {
                    echo "Order accepted!";
                } else {
                    echo "Error accepting order: " . mysqli_error($koneksi);
                }
            } 
        ?>
        <h1>Pending Orders</h1>
        <table border="1" style="border-collapse: collapse; width: 100%;">
        <tr style="background-color: lightblue;">
        <th style="border: 1px solid blue; padding: 8px;">Order ID</th>
        <th style="border: 1px solid blue; padding: 8px;">Name</th>
        <th style="border: 1px solid blue; padding: 8px;">Email</th>
        <th style="border: 1px solid blue; padding: 8px;">Destination</th>
        <th style="border: 1px solid blue; padding: 8px;">Action</th>
        <th style="border: 1px solid blue; padding: 8px;">Whatsapp</th> 
    </tr>
            <?php while ($order = mysqli_fetch_assoc($result)): ?>
              <tr>
        <td style="border: 1px solid blue; padding: 8px;"><?php echo $order['id']; ?></td>
        <td style="border: 1px solid blue; padding: 8px;"><?php echo $order['Nama']; ?></td>
        <td style="border: 1px solid blue; padding: 8px;"><?php echo $order['Email']; ?></td>
        <td style="border: 1px solid blue; padding: 8px;"><?php echo $order['Destinasi']; ?></td>
        <td style="border: 1px solid blue; padding: 8px;">
            <form method="post" style="margin: 0;">
                <input type="hidden" name="order_id" value="<?php echo $order['id']; ?>">
                <button type="submit" name="accept" style="background-color: #007bff; color: white; border: none; padding: 5px 10px; cursor: pointer;">Accept</button>
            </form>
        </td>
        <td style="border: 1px solid blue; padding: 8px;"><a href="api.php" style="color: #007bff;">Whatsapp</a></td> 
    </tr>
            <?php endwhile; ?>
        </table>
        <?php
        }  
        
        if ($page == 'pesanbarang') {
          // Query to fetch pending orders for 'pesanbarang'
          $result = mysqli_query($koneksi, "SELECT * FROM pengadaanbarang WHERE status='Pending'");
      
          // Handle the form submission for accepting orders
          if (isset($_POST['accept'])) {
              $order_id = $_POST['order_id'];
              // Update the order status to 'Accepted'
              $update = mysqli_query($koneksi, "UPDATE pengadaanbarang SET status='Accepted' WHERE id='$order_id'");
              if ($update) {
                  echo "Order accepted!";
              } else {
                  echo "Error accepting order: " . mysqli_error($koneksi);
              }
          } 
      ?>
      <h1>Pending Orders</h1>
<table border="1" style="border-collapse: collapse; width: 100%;">
    <tr style="background-color: lightblue;">
        <th style="border: 1px solid blue; padding: 8px;">Order ID</th>
        <th style="border: 1px solid blue; padding: 8px;">Name</th>
        <th style="border: 1px solid blue; padding: 8px;">Email</th>
        <th style="border: 1px solid blue; padding: 8px;">Destination</th>
        <th style="border: 1px solid blue; padding: 8px;">Action</th>
        <th style="border: 1px solid blue; padding: 8px;">Whatsapp</th> 
    </tr>
    <?php while ($order = mysqli_fetch_assoc($result)): ?>
    <tr>
        <td style="border: 1px solid blue; padding: 8px;"><?php echo $order['id']; ?></td>
        <td style="border: 1px solid blue; padding: 8px;"><?php echo $order['Nama']; ?></td>
        <td style="border: 1px solid blue; padding: 8px;"><?php echo $order['Email']; ?></td>
        <td style="border: 1px solid blue; padding: 8px;"><?php echo $order['Destinasi']; ?></td>
        <td style="border: 1px solid blue; padding: 8px;">
            <form method="post" style="margin: 0;">
                <input type="hidden" name="order_id" value="<?php echo $order['id']; ?>">
                <button type="submit" name="accept" style="background-color: #007bff; color: white; border: none; padding: 5px 10px; cursor: pointer;">Accept</button>
            </form>
        </td>
        <td style="border: 1px solid blue; padding: 8px;"><a href="api.php" style="color: #007bff;">Whatsapp</a></td> 
    </tr>
    <?php endwhile; ?>
</table>
      <?php
      } 

      if ($page == 'pesanmice') {
        // Query to fetch pending orders for 'pesanbarang'
        $result = mysqli_query($koneksi, "SELECT * FROM mice WHERE status='Pending'");
    
        // Handle the form submission for accepting orders
        if (isset($_POST['accept'])) {
            $order_id = $_POST['order_id'];
            // Update the order status to 'Accepted'
            $update = mysqli_query($koneksi, "UPDATE mice SET status='Accepted' WHERE id='$order_id'");
            if ($update) {
                echo "Order accepted!";
            } else {
                echo "Error accepting order: " . mysqli_error($koneksi);
            }
        } 
    ?>
    <h1>Pending Orders</h1>
<table border="1" style="border-collapse: collapse; width: 100%;">
  <tr style="background-color: lightblue;">
      <th style="border: 1px solid blue; padding: 8px;">Order ID</th>
      <th style="border: 1px solid blue; padding: 8px;">Name</th>
      <th style="border: 1px solid blue; padding: 8px;">Email</th>
      <th style="border: 1px solid blue; padding: 8px;">Destination</th>
      <th style="border: 1px solid blue; padding: 8px;">Action</th>
      <th style="border: 1px solid blue; padding: 8px;">Whatsapp</th> 
  </tr>
  <?php while ($order = mysqli_fetch_assoc($result)): ?>
  <tr>
      <td style="border: 1px solid blue; padding: 8px;"><?php echo $order['id']; ?></td>
      <td style="border: 1px solid blue; padding: 8px;"><?php echo $order['Nama']; ?></td>
      <td style="border: 1px solid blue; padding: 8px;"><?php echo $order['Email']; ?></td>
      <td style="border: 1px solid blue; padding: 8px;"><?php echo $order['Destinasi']; ?></td>
      <td style="border: 1px solid blue; padding: 8px;">
          <form method="post" style="margin: 0;">
              <input type="hidden" name="order_id" value="<?php echo $order['id']; ?>">
              <button type="submit" name="accept" style="background-color: #007bff; color: white; border: none; padding: 5px 10px; cursor: pointer;">Accept</button>
          </form>
      </td>
      <td style="border: 1px solid blue; padding: 8px;"><a href="api.php" style="color: #007bff;">Whatsapp</a></td> 
  </tr>
  <?php endwhile; ?>
</table>
    <?php
    } 
        ?>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->


  
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="temp/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="temp/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!otstrap 3.3.7 -->
<script src="temp/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Sparkline -->
<script src="temp/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>

<!-- jQuery Knob Chart -->
<script src="temp/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="temp/bower_components/moment/min/moment.min.js"></script>
<script src="temp/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="temp/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="temp/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="temp/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="temp/bower_components/fastclick/lib/fastclick.js"></script>

<!-- AdminLTE for demo purposes -->
<!-- DataTables -->
<script src="temp/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="temp/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- CK Editor -->
<script src="temp/bower_components/ckeditor/ckeditor.js"></script>
<!-- date-range-picker -->
<script src="temp/bower_components/moment/min/moment.min.js"></script>
<script src="temp/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="temp/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })
</script>
</body>
</html>
