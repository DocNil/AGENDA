<?php
include 'config.php';

$sql = "SELECT id, name, phone FROM contacts";
$stmt = $conn->prepare($sql);
$stmt->execute();

$contacts = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($contacts);
?>