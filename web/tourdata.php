
<?php
session_start();
include "koneksi.php";

// Check if the user is logged in
if (!isset($_SESSION['email'])) {
    // If not logged in, redirect to the login page
    header("Location: login2.php");
    exit;
}

$user_email = $_SESSION['email'];

// Fetch orders for this user
$result = mysqli_query($koneksi, "SELECT * FROM tour WHERE Email='$user_email'");


// Retrieve form data
$fname = $_POST['fname'];
$eaddress = $_POST['eaddress'];
$subject = $_POST['subject'];
$detail = $_POST['detail'];
$destinasi = $_POST['destinasi'];
$depart = date('Y-m-d');
$return = date('Y-m-d');
$durasi = $_POST['durasi'];

// Insert the data into a new table
$query = "INSERT INTO tour (Nama, Email, Subjek, Detail, Destinasi, Depart, `Return`, Durasi, status) VALUES ('$fname', '$eaddress', '$subject', '$detail', '$destinasi', '$depart', '$return', '$durasi', 'Pending')";

// Execute the query
if (mysqli_query($koneksi, $query)) {
    echo "<script>alert('Message anda diterima, terimakasih!.');window.location='../web/tour.php?page=tour';</script>";
} else {
  // Error occurred while inserting data
  echo "Error: " . mysqli_error($koneksi);
}

// Close the database connection
mysqli_close($koneksi);
?>
