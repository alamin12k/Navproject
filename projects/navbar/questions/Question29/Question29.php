<?php

    echo "<html>
            <head>
                <link rel='stylesheet' href='bootstrap/bootstap.css'>
            </head>
        </html>";

    echo "<h4>Write a program to display days of week i.e. Monday to Sunday using switch-case statement.</h4>";
    echo "<br/><br/>";

    $day = $_POST['day'];

    switch ($day) {
        case '1':
            echo "<div class='alert alert-info' style='width:10% ;'><strong>Monday</strong></div>";
            break;
        case '2':
            echo "<div class='alert alert-info' style='width:10% ;'><strong>Tuesday</strong></div>";
            break;
        case '3':
            echo "<div class='alert alert-info' style='width:10% ;'><strong>Wednesday</strong></div>";
            break;
        case '4':
            echo "<div class='alert alert-info' style='width:10% ;'><strong>Thursday</strong></div>";
            break;
        case '5':
            echo "<div class='alert alert-info' style='width:10% ;'><strong>Friday</strong></div>";
            break;
        case '6':
            echo "<div class='alert alert-info' style='width:10% ;'><strong>Saturday</strong></div>";
            break;
        case '7':
            echo "<div class='alert alert-info' style='width:10% ;'><strong>Sunday</strong></div>";
            break;   
        default:
            echo "<div class='alert alert-danger' style='width:20% ;'><strong>Input a number between 1-7</strong></div>";
            break;
    }


?>