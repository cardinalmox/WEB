<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.8, maximum-scale=1.8, minimum-scale=1.8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MARKETPLACE</title>
</head>
<body>
<div id="form">
    <form action="Save.php" method="post">
        <label for="email">Email:</label>
        <input type="email" name="email" required>
        <label for="category">Category:</label>
        <select name="category" required>
            <option value="cars">Cars</option>
            <option value="others">Others</option>
            <option value="real estate">Real Estate</option>
        </select><br>
        <label for="title">Title:</label><br>
        <input type="text" id="title" name="title" required><br>
        <label for="description">Description:</label><br>
        <textarea rows="5" name="description" id="description" required></textarea><br>
        <input type="submit" value="Save"><br>
    </form>
</div>
<div id="table">
    <table>
        <thead>
        <th>Email</th>
        <th>Category</th>
        <th>Title</th>
        <th>Description</th>
        </thead>
        <tbody>
        <?php
        $mysqli = new mysqli("db", "root", "123", "web");
        $sql = "SELECT email, category, title, description FROM ad";
        $result = $mysqli->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($row["email"]) . "</td>";
                echo "<td>" . htmlspecialchars($row["category"]) . "</td>";
                echo "<td>" . htmlspecialchars($row["title"]) . "</td>";
                echo "<td>" . htmlspecialchars($row["description"]) . "</td>";
                echo "</tr>";
            }
        } else {
            echo "NO RESULT";
        }
        $mysqli->close();
        ?>
        </tbody>
    </table>
</div>
</body>
</html>
