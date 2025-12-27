<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dental_clinic";

// connect to database
$conn = new mysqli($servername, $username, $password, $dbname);

// check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// only run if form submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name    = trim($_POST["name"]);
    $email   = trim($_POST["email"]);
    $phone   = trim($_POST["phone"]);
    $message = trim($_POST["message"]);

    $stmt = $conn->prepare(
        "INSERT INTO contacts (name, email, phone, message)
         VALUES (?, ?, ?, ?)"
    );

    $stmt->bind_param("ssss", $name, $email, $phone, $message);

    if ($stmt->execute()) {
        header("Location: ContactUs.php?success=1");
        exit;
    } else {
        header("Location: ContactUs.php?error=1");
        exit;
    }

    $stmt->close();
}

$conn->close();
?>
