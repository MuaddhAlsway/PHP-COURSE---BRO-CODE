<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="getandpost.php" method="POST">
        <label>username</label>
        <input type="text" name="username">

        <label>password:</label>
        <input type="password" name="password">

        <button type="submit">Login</button>
    </form>
</body>
</html>

<?php
    echo $_POST['username'];
    echo "<br>";
    echo $_POST['password'];
?>
