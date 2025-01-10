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
    $name = $_POST['name'];
    $email = $_POST['email'];
    $sql = "UPDATE users SET name=?, email=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssi", $name, $email, $id);
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
        <label>Name: <input type="text" name="name" value="<?= $user['name'] ?>" required></label><br>
        <label>Email: <input type="email" name="email" value="<?= $user['email'] ?>" required></label><br>
        <button type="submit">Save Changes</button>
    </form>
</body>
</html>
