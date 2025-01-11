<?php
include 'db_config.php';

$id = $_GET['id'];
$sql = "SELECT * FROM users WHERE id=?";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Item</title>
</head>
<body>
    <form method="POST">
        <label>Id: <input type="int" name="userid" value=$userid required></label><br>
        <label>Name: <input type="text" name="username" value=$username required></label><br>
        <button type="submit">Save Changes</button>
    </form>
</body>
</html>
