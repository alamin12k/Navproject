<?php

    echo "<html>
            <head>
                <link rel='stylesheet' href='bootstrap/bootstap.css'>
            </head>
        </html>";

    echo "Write a program to print the largest of three numbers.";
    echo "<br/><br/>";

    print_r($_POST);
    echo "<br/><br/>";
    
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];

    if ($num1 > $num2 && $num1 > $num3) {
        echo "<div class='alert alert-info' style='width:23% ;'><strong>$num1 is the largest of the three numbers</strong></div>";
    }
    elseif ($num2 > $num1 && $num2 > $num3) {
        echo "<div class='alert alert-info' style=width:23% ;'><strong>$num2 is the largest of the three numbers</strong></div>";
    }
    else {
        echo "<div class='alert alert-info' style='width:23% ;'><strong>$num3 is the largest of the three numbers</strong></div>";
    }


?>