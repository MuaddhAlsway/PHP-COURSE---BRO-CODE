<?php
$var1 = 'Hello';
$var2 = 'World';
$var3 = null;

echo isset($var1);
echo isset($var2);
echo isset($var3);

// Can check multiple variables at once:
$var11 = "Hello";
$var22 = "World";

echo isset($var11, $var22); // true, both exist and not null
$var1 = "";
$var2 = 0;
$var3 = null;
$var4 = "Hello";

echo empty($var1); // true, because it's an empty string
echo empty($var2); // true, because it's 0
echo empty($var3); // true, because it's null
echo empty($var4); // false, because it has value "Hello"
echo empty($var5); // true, because $var5 does not exist

?>