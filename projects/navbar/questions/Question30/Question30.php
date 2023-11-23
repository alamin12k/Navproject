<?php

    echo "<html>
            <head>
                <link rel='stylesheet' href='bootstrap/bootstap.css'>
            </head>
        </html>";

    echo "<h4>Write a program to display arithmetic operations using switch-case statement.</h4>";
    echo "<br/><br/>";

    print_r($_POST);
    echo "<br/><br/>";

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    $operators = $_POST['arithmetic'];

    switch ($operators) {
        case '+':
            $add = $num1 + $num2;
            echo "<div class='alert alert-info' style='width:10% ;'><strong>$num1 + $num2 = $add</strong></div>";
            break;
        case '-':
            $sub = $num1 - $num2;
            echo "<div class='alert alert-info' style='width:10% ;'><strong>$num1 - $num2 = $sub</strong></div>";
            break;
        case '*':
            $mul = $num1 * $num2;
            echo "<div class='alert alert-info' style='width:10% ;'><strong>$num1 * $num2 = $mul</strong></div>";
            break;
        case '/':
            
            if ($num2 != 0) {
                $div = $num1 / $num2;
                echo "<div class='alert alert-info' style='width:10% ;'><strong>$num1 / $num2 = $div</strong></div>";
            }
            else {
                echo "<div class='alert alert-danger' style='width:33% ;'><strong>Zero cannot be used as a denominator in this case.</strong></div>";
            }
            
            break;
        
        default:
            echo "<div class='alert alert-danger' style='width:10% ;'><strong>Error</strong></div>";
            break;
    }


?>