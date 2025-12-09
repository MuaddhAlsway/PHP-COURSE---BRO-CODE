<?php

function sayHello() {
    echo "Hello, world <br>";
}

function sayGoodBay(){
    echo "Good bye";
}

sayHello();

sayGoodBay();

function welcome($name, $age, $country) {
    echo '<br>';
    echo "Hello, $name!";
    echo '<br>';
    echo "You are $age";
    echo '<br>';
    echo  "You are born $country";
}

welcome("MUAADH", "26", "Yeman");

function welcomeBack($word = "Saudi_Arabia") {
    echo "<br>";
    echo "Hello, $word!";
}

welcomeBack("Muaadh");
welcomeBack();
?>