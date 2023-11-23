<?php

    echo "<html>
            <head>
            <link rel='stylesheet' href='bootstrap/bootstap.css'>
            <link rel='stylesheet' href='style.css'>
            </head>
        </html>";
    $basicsalary = $_GET['bs'];
    $DA = (40 / 100) * $basicsalary;
    $HRA = (20 / 100) * $basicsalary;
    $grosssalary = $basicsalary + $DA + $HRA;

    echo "<div class='alert alert-danger' role='alert' id='question'>
        <h4 class='alert-heading text-center'>Question 12</h4>
        <p class='text-center'>Write a program to calculate the Gross Salary of an employee.
            Assume <br/> Gross Salary=Basic Salary+DA+HRA<br/>
            DA=40% of Basic Salary<br/>
            HRA=20% of Basic Salary</p>
        <hr>
        <div class='container'>
            <div class='form-group'>
                <label for=''>Basic Salary: </label>
                <small class='form-text text-muted'>$basicsalary</small>
            </div>
            <hr>
            <div class='row'>
                <div class='col-sm-12'>
                    <div class='card text-center' style='width: 15rem;'>
                        <div class='card-body'>
                            <h5 class='card-title'>Gross Salary</h5>
                            <h6 class='card-subtitle'>$grosssalary</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>";

?>

