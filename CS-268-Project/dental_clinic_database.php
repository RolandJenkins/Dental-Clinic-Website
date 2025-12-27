<html>
<head>
    <title>dental database setup</title>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("connection failed: " . $conn->connect_error);
}

$sql = "create database if not exists dental_clinic";
if ($conn->query($sql) === true) {
    echo "database 'dental_clinic' is ready.<br>";
} else {
    echo "error creating database: " . $conn->error . "<br>";
}

$conn->select_db("dental_clinic");

$sql = "create table if not exists contacts (
    id int auto_increment primary key,
    name varchar(255),
    email varchar(255),
    phone varchar(20),
    message text,
    date timestamp default current_timestamp
)";
if ($conn->query($sql) === true) {
    echo "table 'contacts' is ready.<br>";
} else {
    echo "error creating contacts table: " . $conn->error . "<br>";
}

$sql = "create table if not exists appointments (
    id int auto_increment primary key,
    name varchar(255),
    email varchar(255),
    phone varchar(20),
    date date,
    time time,
    service varchar(100),
    message text,
    submitted timestamp default current_timestamp
)";
if ($conn->query($sql) === true) {
    echo "table 'appointments' is ready.<br>";
} else {
    echo "error creating appointments table: " . $conn->error . "<br>";
}

echo "<br><strong>setup complete</strong><br>";

$conn->close();
?>
</body>
</html>
