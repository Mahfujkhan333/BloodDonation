<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        <form action="login.php" method="post">
            <input type="text" name="name" placeholder="Full Name" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" name="login">Login</button>
        </form>

        <?php
        if (isset($_POST['login'])) {
            $name = $_POST['name'];
            $password = $_POST['password'];

            $sql = "SELECT * FROM donors WHERE name='$name'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $user = $result->fetch_assoc();
                if (password_verify($password, $user['password'])) {
                    $_SESSION['user_id'] = $user['id'];
                    header("Location: update.php");
                } else {
                    echo "<p class='error'>Invalid password.</p>";
                }
            } else {
                echo "<p class='error'>No user found with that name.</p>";
            }
        }
        ?>
    </div>
</body>
</html>
