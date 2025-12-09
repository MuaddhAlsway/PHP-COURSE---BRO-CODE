<?php

// Add item to cart
$item = "Apple";

// Check if cart cookie exists
if(isset($_COOKIE['cart'])){
    $cart = explode(",", $_COOKIE['cart']); // convert string to array
    $cart[] = $item; // add new item
} else {
    $cart = [$item]; // first item
}

// Save updated cart in cookie (expires in 1 day)
setcookie("cart", implode(",", $cart), time() + 86400);

// Display cart items
echo "Cart items: " . implode(", ", $cart) . "<br>";

// Display the cart from cookie on next request
if(isset($_COOKIE['cart'])) {
    $cart_from_cookie = explode(",", $_COOKIE['cart']);
    echo "Your cart contains: " . implode(", ", $cart_from_cookie);
} else {
    echo "Your cart is empty!";
}

?>
