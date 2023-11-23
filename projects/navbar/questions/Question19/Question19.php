<?php

    echo "<html>
            <head>
                <link rel='stylesheet' href='bootstrap/bootstap.css'>
            </head>
        </html>";
    
    echo "Write a program to enter the %age of a student & print whether he is PASS or FAIL.";
    echo "<br/><br/>";

    $percentage = $_GET['percent'];

  
   if ($percentage <= 100) {
    if ($percentage >= 50) {
        echo "<div class='alert alert-info' style='width:20% ;'><strong>PASS</strong></div>";
    }
    else {
        echo "<div class='alert alert-warning' style='width:20% ;'><strong>FAIL</strong></div>";
    }
   }
   else {
    echo "<div class='alert alert-danger' style='width:20% ;'><strong>Percentage is greater than 100</strong></div>";
   }
   


?>