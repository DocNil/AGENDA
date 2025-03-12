<?php
include 'config.php';

$name = $_POST['name'];
$phone = $_POST['phone'];

$sql = "INSERT INTO contacts (name, phone) VALUES (:name, :phone)";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':name', $name);
$stmt->bindParam(':phone', $phone);

if ($stmt->execute()) {
    echo "New record created successfully";
} else {
    echo "Error: " . $stmt->errorInfo();
}

header("Location: index.html");
exit();
?>