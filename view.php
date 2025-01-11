<?php
include 'db_config.php';

$sql = "SELECT * FROM user";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>View User</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Actions</th>
        </tr>
        <tr>
            <td><?= $row['userid'] ?></td>
            <td><?= $row['username'] ?></td>
            <td>
                <a href="edit.php?id=<?= $row['userid'] ?>">Edit</a>
                <a href="delete.php?id=<?= $row['userid'] ?>">Delete</a>
            </td>
        </tr>
    </table>
</body>
</html>
