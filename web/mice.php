<?php 
include "koneksi.php";

// Assuming you have a database connection already established

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
$query = "INSERT INTO mice (Nama, Email, Subjek, Detail, Destinasi, Depart, `Return`, Durasi, status) VALUES ('$fname', '$eaddress', '$subject', '$detail', '$destinasi', '$depart', '$return', '$durasi', 'Pending')";

// Execute the query
if (mysqli_query($koneksi, $query)) {
    echo "<script>alert('Message anda diterima, terimakasih!.');window.location='../web/main.php';</script>";
} else {
  // Error occurred while inserting data
  echo "Error: " . mysqli_error($koneksi);
}

// Close the database connection
mysqli_close($koneksi);
?>

  