<?php

    echo "<html>
            <head>
                <link rel='stylesheet' href='bootstrap/bootstap.css'>
            </head>
        </html>";

    echo "Write a program to accept two integers and check whether they are equal or not.";
    echo "<br/><br/>";

    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];

    if ($num1 == $num2) {
        echo "<div class='alert alert-info' style='width:20% ;'><strong>The numbers are equal</strong></div>";
    }
    else {
        echo "<div class='alert alert-danger' style='width:20% ;'><strong>The numbers are not equal</strong></div>";
    }
   


?>