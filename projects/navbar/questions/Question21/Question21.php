<?php

    echo "<html>
            <head>
                <link rel='stylesheet' href='bootstrap/bootstap.css'>
            </head>
        </html>";

    echo "Write a program in C# Sharp to accept a grade and declare the equivalent description";
    echo "<br/><br/>";

    
    
    $grade = $_GET['grades'];

    if ($grade == "A") {
        echo "<div class='alert alert-info' style='width:15% ;'><strong>Excellent</strong></div>";
    }
    elseif ($grade == "B") {
        echo "<div class='alert alert-info' style='width:15% ;'><strong>Very Good</strong></div>";
    }
    elseif ($grade == "C") {
        echo "<div class='alert alert-info' style='width:15% ;'><strong>Good</strong></div>";
    }
    elseif ($grade == "D") {
        echo "<div class='alert alert-warning' style='width:15% ;'><strong>Pass</strong></div>";
    }
    elseif ($grade == "E") {
        echo "<div class='alert alert-warning' style='width:15% ;'><strong>Fair</strong></div>";
    }
    elseif ($grade == "F") {
        echo "<div class='alert alert-danger' style='width:15% ;'><strong>Fail</strong></div>";
    }
    else {
        echo "Error";
    }
    
       


?>