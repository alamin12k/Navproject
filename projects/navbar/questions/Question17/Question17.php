<?php

    echo "<html>
            <head>
                <link rel='stylesheet' href='bootstrap/bootstap.css'>
            </head>
        </html>";

    echo "Write a program to find whether a no is positive or negative.";
    echo "<br/><br/>";

    $number = $_GET['num'];
    
    if ($number > 0) {
        echo "<div class='alert alert-info' style='width:20% ;'><strong>$number is positive</strong></div>";
    }
    else {
        echo "<div class='alert alert-danger' style='width:20% ;'><strong>$number is negative</strong></div>";
    }


?>