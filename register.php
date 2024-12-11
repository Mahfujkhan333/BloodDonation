<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Register as a Blood Donor</h1>
        <form action="register.php" method="post">
            <input type="text" name="name" placeholder="Full Name" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="text" name="blood_group" placeholder="Blood Group" required>
            <input type="text" name="address" placeholder="Address" required>
            <input type="text" name="phone" placeholder="Phone Number" required>
            <button type="submit" name="register">Register</button>
        </form>

        <?php
        if (isset($_POST['register'])) {
            $name = $_POST['name'];
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $blood_group = $_POST['blood_group'];
            $address = $_POST['address'];
            $phone = $_POST['phone'];

            $sql = "INSERT INTO donors (name, password, blood_group, address, phone) VALUES ('$name', '$password', '$blood_group', '$address', '$phone')";

            if ($conn->query($sql) === TRUE) {
                echo "<p class='success'>Registration successful! You can now <a href='login.php'>log in</a>.</p>";
            } else {
                echo "<p class='error'>Error: " . $conn->error . "</p>";
            }
        }
        ?>
    </div>
</body>
</html>
