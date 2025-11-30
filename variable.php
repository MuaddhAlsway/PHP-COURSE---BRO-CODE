<?php
    $name = "Muaadh AL-Sway";
    echo $name;
    $mycareer ='Front End Developer';
    echo "<br>";
    echo $mycareer;
    echo "<br>";
    echo "Hello {$name}";
    echo "<br>";
    echo "My job is {$mycareer}";
    //variabe
    //Whole Integer
    $age = 27;
    $users = 2;
    $quantity = 3;
 echo "<br>";
    echo "My age is {$age} years old";
    echo "<br>";
    echo "There are {$users} users online";
    echo "<br>";
    echo "You would like to buy {$quantity} items";
///////////////////////
//Pointer
    $price = 4.99;
    $gpa =2.5;
    $tax_rate = 5.1;
    echo "<br>";
    echo "Your gpa is: {$gpa}";
    echo "<br>";
    echo "Your pizza is \${$price}";
    echo "<br>";
    echo "The sales tax rate is: {$tax_rate}";
    echo "<br>";
    //boolean
    $employed = True;
    $food = "Pizza";
    $online = false;
    $for_sale = true;
    $total = null;
    echo "Online status: {$online}</br>";
    echo "You have ordered: {$quantity} x {$food}s </br>";

    $total = $quantity * $price;
    echo "Your total is: \${$total} </br>";

?>