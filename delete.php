<?php
include 'config.php';

$id = $_GET['id'];

$sql = "DELETE FROM contacts WHERE id = :id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $id);

if ($stmt->execute()) {
    echo "Record deleted successfully";
} else {
    echo "Error: " . $stmt->errorInfo();
}
?>