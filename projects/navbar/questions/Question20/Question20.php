<?php

    echo "<html>
            <head>
                <link rel='stylesheet' href='bootstrap/bootstap.css'>
            </head>
        </html>";

    echo "Write a program to check whether a given year is leap or not.";
    echo "<br/><br/>";

    $year = $_GET['yr'];

    if ($year % 4 == 0 && $year % 400 == 0 && $year % 100 != 0) {
        echo "<div class='alert alert-info' style='width:20% ;'><strong>$year is a leap year</strong></div>";
    }
    elseif ($year % 4 !== 0) {
        echo "<div class='alert alert-warning' style='width:20% ;'><strong>$year is not a leap year</strong></div>";
    }
    else {
        echo "<div class='alert alert-danger' style='width:20% ;'></strong></div>";
    }


?>