<?php
include 'db_config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $userid = $_POST['userid'];
    $username = $_POST['username'];
    $sql = "INSERT INTO user (userid, username) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $userid, $username);
    $stmt->execute();
    $stmt->close();
    header("Location: view.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Item</title>
</head>
<body>
    <form method="POST">
        <label>ID: <input type="int" name="userid" required></label><br>
        <label>Name: <input type="text" name="username" required></label><br>
        <button type="submit">Add</button>
    </form>
</body>
</html>
