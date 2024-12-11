<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Donors</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Search for Blood Donors</h1>
        <form action="search.php" method="get">
            <input type="text" name="blood_group" placeholder="Blood Group" required>
            <input type="text" name="address" placeholder="Address" required>
            <button type="submit">Search</button>
        </form>

        <?php
        if (isset($_GET['blood_group']) && isset($_GET['address'])) {
            $blood_group = $_GET['blood_group'];
            $address = $_GET['address'];

            $sql = "SELECT * FROM donors WHERE blood_group='$blood_group' AND address LIKE '%$address%' AND available=1";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                echo "<h2>Available Donors:</h2>";
                echo "<table>
                        <tr>
                            <th>Name</th>
                            <th>Blood Group</th>
                            <th>Address</th>
                            <th>Phone</th>
                        </tr>";
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row['name']}</td>
                            <td>{$row['blood_group']}</td>
                            <td>{$row['address']}</td>
                            <td>{$row['phone']}</td>
                        </tr>";
                }
                echo "</table>";
            } else {
                echo "<p class='error'>No donors found.</p>";
            }
        }
        ?>
    </div>
</body>
</html>
