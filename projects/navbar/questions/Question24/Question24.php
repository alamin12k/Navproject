<?php

    echo "<html>
            <head>
                <link rel='stylesheet' href='bootstrap/bootstap.css'>
            </head>
        </html>";

    echo "Write a program to show the use of conditional operator (Greater among two numbers)";
    echo "<br/><br/>";

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    if ($num1 > $num2 && $num2 < $num1) {
        echo "<div class='alert alert-info' style='width:25% ;'><strong>$num1 is greater than $num2</strong></div>";
    }
    else {
        echo "<div class='alert alert-info' style='width:25% ;'><strong>$num2 is greater than $num1</strong></div>";
    }




?>