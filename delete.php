<?php
include 'db_config.php';

$userid = $_GET['userid'];
$sql = "DELETE FROM user WHERE userid=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $userid);
$stmt->execute();
$stmt->close();
header("Location: view.php");
exit();
?>
