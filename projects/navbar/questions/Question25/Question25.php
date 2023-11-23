<?php

    echo "<html>
            <head>
                <link rel='stylesheet' href='bootstrap/bootstap.css'>
            </head>
        </html>";

    echo "Write a program to check whether the given number is even or odd (By using conditional operator).";
    echo "<br/><br/>";

    $num1 = $_POST['num1'];

    if ($num1 % 2 == 0 && $num1 > 0) {
        echo "<div class='alert alert-info' style='width:15% ;'><strong>$num1 is even</strong></div>";
    }
    elseif ($num1 % 2 != 0 && $num1 > 0) {
        echo "<div class='alert alert-warning' style='width:15% ;'><strong>$num1 is odd</strong></div>";
    }
    else {
        echo "<div class='alert alert-danger' style='width:10% ;'><strong>ERROR</strong></div>";
    }


?>