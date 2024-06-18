<?php 
include "koneksi.php";

// Assuming you have a database connection already established

// Retrieve form data
$fname = $_POST['fname'];
$eaddress = $_POST['eaddress'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Insert the data into a new table
$query = "INSERT INTO feedback (nama, email, subjek, message) VALUES ('$fname', '$eaddress', '$subject', '$message')";

// Execute the query
if (mysqli_query($koneksi, $query)) {
    echo "<script>alert('Message anda diterima, terimakasih!.');window.location='../web/feedbackpage.php?page=feedback';</script>";
} else {
  // Error occurred while inserting data
  echo "Error: " . mysqli_error($koneksi);
}

// Close the database connection
mysqli_close($koneksi);
?>

  