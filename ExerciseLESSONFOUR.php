<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ExerciseLESSONFOUR.php" method="POST">
        <label for="">quantity</label><br>
        <input type="text" name="quantity">
        <input type="submit" value="total">
    </form>    
</body>
</html>

<?php
    $item = 'pizza';
    $price = 4.99;
    $quantity = $_POST['quantity'];
    $total = $price * $quantity;
    echo "You have ordered {$quantity} {$item}(s) <br>";
    echo "Your total is: \${$total}";
    ?>