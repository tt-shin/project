<?php
include 'db_config.php';

$id = $_GET['id'];
$sql = "SELECT * FROM users WHERE id=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $sql = "UPDATE user SET username=? WHERE userid=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssi", $username);
    $stmt->execute();
    $stmt->close();
    header("Location: view.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Item</title>
</head>
<body>
    <form method="POST">
        <label>Id: <input type="int" name="userid" value="<?= $user['userid'] ?>" required></label><br>
        <label>Name: <input type="text" name="username" value="<?= $user['username'] ?>" required></label><br>
        <button type="submit">Save Changes</button>
    </form>
</body>
</html>
