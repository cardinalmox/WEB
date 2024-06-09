<?php

function ToHome()
{
    header("Location: index.php");
    exit();
}

if (false === isset($_POST['email'], $_POST['category'], $_POST['title'], $_POST['description'])) {
    ToHome();
}

$email = $_POST['email'];
$category = $_POST['category'];
$title = $_POST['title'];
$description = $_POST['description'];
$mysqli = new mysqli("db", "root", "123", "web");
$stmt = $mysqli->prepare("INSERT INTO ad (email, title, description, category) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $email, $title, $description, $category);
if ($stmt->execute() === TRUE) {
    ToHome();
} else {
    echo "Error: " . $stmt->error;
}
$stmt->close();
$mysqli->close();
ToHome();
?>
