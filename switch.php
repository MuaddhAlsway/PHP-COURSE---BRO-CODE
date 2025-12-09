<?php
    $data = date('1');

    $date = "Monday";


    switch($date) {
        case "Monday":
            echo"it is Monday";
            break;
         case "Tuesday":
            echo"it is Tuesday";
            break;
             case "Wednesday":
            echo"it is Wednesday";
            break;
             case "Thrusday":
            echo"it is Thrusday";
            break;
             case "Friday":
            echo"it is Friday";
            break;
               case "Saturday":
            echo"it is Saturday";
            break;
               case "Sunday":
            echo"it is Sunday";
            break;
        default:
         echo "{$date} is not a day"; 
    }


?>