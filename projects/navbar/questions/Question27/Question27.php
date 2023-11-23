<?php

    echo "<html>
            <head>
                <link rel='stylesheet' href='bootstrap/bootstap.css'>
            </head>
        </html>";

    echo "Write a program to calculate the percentage of a student in 5 subjects and then find his grade accordingly.";
    echo "<br/><br/>";

    $sub1 = $_POST['sub1'];
    $sub2 = $_POST['sub2'];
    $sub3 = $_POST['sub3'];
    $sub4 = $_POST['sub4'];
    $sub5 = $_POST['sub5'];

    if ($sub1 > 100) {
        echo "Score is greater than 100";
        echo "<br/>";
    }
    else {
        echo "Subject 1 is = $sub1";
        echo "<br/>";
    }

    if ($sub2 > 100) {
        echo "Score is greater than 100";
        echo "<br/>";
    }
    else {
        echo "Subject 2 is = $sub2";
        echo "<br/>";
    }

    if ($sub3 > 100) {
        echo "Score is greater than 100";
        echo "<br/>";
    }
    else {
        echo "Subject 3 is = $sub3";
        echo "<br/>";
    }

    if ($sub4 > 100) {
        echo "Score is greater than 100";
        echo "<br/>";
    }
    else {
        echo "Subject 4 is = $sub4";
        echo "<br/>";
    }

    if ($sub5 > 100) {
        echo "Score is greater than 100";
        echo "<br/>";
    }
    else {
        echo "Subject 5 is = $sub5";
        echo "<br/><br/>";

    }


    $percentage = ($sub1 + $sub2 + $sub3 + $sub4 + $sub5) / 500 * 100;
    if ($percentage > 100) {
        echo "<div class='alert alert-danger' style='width:10% ;'><strong>ERROR</strong></div";
    }
    else {
        echo "<div class='alert alert-info' style='width:20% ;'><strong>The percentage = $percentage %</strong></div>";
        
    }
    
    
    echo "<br/>";
    echo "The grade is = ";

    if ($percentage <= 100 && $percentage > 80) {
        echo "A";
        echo "<br/>";
    }
    elseif ($percentage <= 80 && $percentage > 70) {
        echo "B";
        echo "<br/>";
    }
    elseif ($percentage <= 70 && $percentage > 60) {
        echo "C";
        echo "<br/>";
    }
    elseif ($percentage <= 60 && $percentage > 50) {
        echo "D";
        echo "<br/>";
    }
    elseif ($percentage < 50 && $percentage > 40) {
        echo "E";
        echo "<br/>";
    }
    elseif ($percentage <= 40) {
        echo "F";
        echo "<br/>";
    }
    else {
        echo "Error";
        echo "<br/>";
    }






?>