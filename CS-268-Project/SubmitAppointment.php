<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dental_clinic";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $phone = trim($_POST["phone"]);
    $date = trim($_POST["date"]);
    $time = trim($_POST["time"]);
    $service = trim($_POST["service"]);
    $message = trim($_POST["message"]);

    $stmt = $conn->prepare(
        "INSERT INTO appointments (name, email, phone, date, time, service, message)
         VALUES (?, ?, ?, ?, ?, ?, ?)"
    );

    if ($stmt) {
        $stmt->bind_param("sssssss", $name, $email, $phone, $date, $time, $service, $message);

        if ($stmt->execute()) {
            $stmt->close();
            header("Location: BookAppointment.html?success=1");
            exit;
        } else {
            $stmt->close();
            header("Location: BookAppointment.html?error=db_error");
            exit;
        }
    } else {
        header("Location: BookAppointment.html?error=stmt_error");
        exit;
    }
}

$conn->close();
?>