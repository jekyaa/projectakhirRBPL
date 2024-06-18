<?php  
session_start();

// Establish database connection
$query = new mysqli('localhost', 'root', '', 'simplemice');

// Check for connection errors
if ($query->connect_error) {
    die("Connection failed: " . $query->connect_error);
}

// Retrieve data from POST request
$username = $_POST['txt'];
$password = $_POST['pswd'];

// Prepare and execute the query
$stmt = $query->prepare("SELECT * FROM user WHERE username = ? AND pass = ?");
$stmt->bind_param("ss", $username, $password);
$stmt->execute();
$result = $stmt->get_result();

// Check if a matching user was found
if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    $_SESSION['username'] = $user['username'];
    $_SESSION['email'] = $user['email']; // Assuming your 'user' table has an 'email' column
    $_SESSION['status'] = "login";
    header("Location: main.php");
} else {
    echo "<script>alert('Login gagal.');window.location='login2.php';</script>";
}

// Close the statement and connection
$stmt->close();
$query->close();
?>
