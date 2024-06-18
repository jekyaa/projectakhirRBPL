<?php
include "koneksi.php";


$nama       = $_POST['txt'];
$email      = $_POST['email'];
$password   = $_POST['pswd'];
$password2   = $_POST['pswd2'];

if($password == $password2)
{
    $sql  = mysqli_query($koneksi,
    "INSERT INTO user (username, email, pass) VALUES (
        '$nama', '$email', '$password'
    )");

    if($sql) {
        echo "<script>alert('Register Success.');window.location='loginuserpage.php?page=loginuser';</script>";
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
} 
else 
{
    echo "<script>alert('Fail Sign Up.');window.location='loginuserpage.php?page=loginuser';</script>";
}
?>
