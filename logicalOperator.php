<?php


    // $age = 18;
    // $citizen = false;

    // if(!$age >= 18 || !$citizen){
    //     echo "you can not vote";
    // } else {
    //     echo "You can  vote";
    // }


    // Movie Ticket

    $child = false;
    $senior = true;
    $ticket = null;

    if( $child || $senior) {
        $ticket = 10;
    } else {
        $ticket = 15;
    }

    echo"The ticket price is \${$ticket}";
?>