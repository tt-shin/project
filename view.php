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
        <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?= $row['userid'] ?></td>
                <td><?= $row['username'] ?></td>
                <td>
                    <a href="edit.php?id=<?= $row['userid'] ?>">Edit</a>
                    <a href="delete.php?id=<?= $row['userid'] ?>">Delete</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
