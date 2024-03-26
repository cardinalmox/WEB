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
                <?php
//TASK3
                $directoryPath = "./categories/";
                if (is_dir($directoryPath))
                {
                    $subdirectories = array_filter(glob($directoryPath . '*'), 'is_dir');
                    foreach ($subdirectories as $subdirectory)
                    {
                    $name = basename($subdirectory);
                    echo "<option value=\"$name\">$name</option>";
                    }
                }
                ?>
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