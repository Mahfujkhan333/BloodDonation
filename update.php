<?php include 'db.php'; ?>

<?php
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];
$sql = "SELECT * FROM donors WHERE id=$user_id";
$user = $conn->query($sql)->fetch_assoc();

if (isset($_POST['update'])) {
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $available = isset($_POST['available']) ? 1 : 0;

    $sql = "UPDATE donors SET address='$address', phone='$phone', available=$available WHERE id=$user_id";
    if ($conn->query($sql) === TRUE) {
        echo "<p class='success'>Profile updated successfully!</p>";
    } else {
        echo "<p class='error'>Error: " . $conn->error . "</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Profile</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Update Profile</h1>
        <form action="update.php" method="post">
            <input type="text" name="address" value="<?= $user['address'] ?>" required>
            <input type="text" name="phone" value="<?= $user['phone'] ?>" required>
            <label>
                <input type="checkbox" name="available" <?= $user['available'] ? 'checked' : '' ?>> Available
            </label>
            <button type="submit" name="update">Update</button>
        </form>
        <a href="logout.php" class="btn">Logout</a>
    </div>
</body>
</html>

