<?php
include 'db_config.php';

$id = $_GET['id'];
$sql = "DELETE FROM users WHERE id=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$stmt->close();
header("Location: view.php");
exit();
?>
