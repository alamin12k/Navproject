<?php

    echo "<html>
            <head>
                <link rel='stylesheet' href='bootstrap/bootstap.css'>
            </head>
        </html>";

    echo "Write a program to calculate the Gross Salary of an employee.
        Assume:
        BASIC SALARY	DA	HRA
        <1500	90% of Basic Salary	10% of Basic Salary
        >=1500	98% of Basic Salary	500";
    echo "<br/><br/>";

    print_r($_POST);
    echo "<br/><br/>";
    $basicsalary = $_POST['basicsalary'];
    
    
    if ($basicsalary < 1500) {
        $DA = (90 / 100) * $basicsalary;
        $HRA = (10 / 100) * $basicsalary;
        $grosssalary = floatval($basicsalary + $DA + $HRA);
        echo "<div class='alert alert-info' style='width:15% ;'><strong>The Gross Salary =  $grosssalary</strong></div>";
    }
    else {
        $DA = (98 / 100) * $basicsalary;
        $HRA = 500;
        $grosssalary = floatval($basicsalary + $DA + $HRA);
        echo "<div class='alert alert-info' style='width:20% ;'><strong>The Gross Salary = $grosssalary</strong></div>";
    }


    


?>